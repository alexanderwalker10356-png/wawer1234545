"""Payment creation and status check handlers."""

from __future__ import annotations

import json

from aiogram import Router, F
from aiogram.filters import Command
from aiogram.types import (
    Message,
    CallbackQuery,
    InlineKeyboardMarkup,
    InlineKeyboardButton,
)

from bot.config import config
from bot.services.payment_gateway import create_payment, check_payment

router = Router(name="payments")


def _load_brands() -> dict:
    with open(config.brands_json, encoding="utf-8") as f:
        return json.load(f)["brands"]


@router.callback_query(F.data == "payments_menu")
async def cb_payments_menu(callback: CallbackQuery) -> None:
    await callback.answer()
    brands = _load_brands()
    buttons = []
    row: list[InlineKeyboardButton] = []
    for domain, brand in brands.items():
        if domain == "default":
            continue
        row.append(InlineKeyboardButton(
            text=brand["name"],
            callback_data=f"pay_brand:{domain}",
        ))
        if len(row) == 2:
            buttons.append(row)
            row = []
    if row:
        buttons.append(row)
    buttons.append([InlineKeyboardButton(text="◀️ Назад", callback_data="back_main")])

    await callback.message.edit_text(
        "💳 *Платежи*\n\nВыберите бренд для создания платежа:",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=buttons),
    )


@router.callback_query(F.data.startswith("pay_brand:"))
async def cb_pay_brand(callback: CallbackQuery) -> None:
    domain = callback.data.split(":", 1)[1]
    brands = _load_brands()
    brand = brands.get(domain)
    if not brand:
        await callback.answer("Бренд не найден", show_alert=True)
        return

    await callback.answer()
    await callback.message.edit_text(
        f"💳 *{brand['name']}*\n\n"
        f"Отправьте команду:\n"
        f"`/pay {domain} <order_id> <сумма_в_сантимах>`\n\n"
        f"Пример: `/pay {domain} ORD-001 50000`\n"
        f"(500.00 {brand['currency']})",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="◀️ Назад", callback_data="payments_menu")],
        ]),
    )


@router.callback_query(F.data == "brands_list")
async def cb_brands_list(callback: CallbackQuery) -> None:
    await callback.answer()
    brands = _load_brands()
    lines = ["🌐 *Список брендов:*\n"]
    for domain, brand in brands.items():
        if domain == "default":
            continue
        lines.append(
            f"• *{brand['name']}* — `{domain}`\n"
            f"  Цвет: {brand['colors']['primary']} | Валюта: {brand['currency']}"
        )
    await callback.message.edit_text(
        "\n".join(lines),
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="◀️ Назад", callback_data="back_main")],
        ]),
    )


@router.message(Command("brands"))
async def cmd_brands(message: Message) -> None:
    brands = _load_brands()
    lines = ["🌐 *Бренды платформы:*\n"]
    for domain, brand in brands.items():
        if domain == "default":
            continue
        lines.append(f"• *{brand['name']}* — `{domain}`")
    await message.answer("\n".join(lines), parse_mode="Markdown")


@router.message(Command("pay"))
async def cmd_pay(message: Message) -> None:
    parts = message.text.strip().split()
    if len(parts) < 4:
        await message.answer(
            "Использование: `/pay <domain> <order_id> <сумма_сантимы>`",
            parse_mode="Markdown",
        )
        return

    domain = parts[1]
    order_id = parts[2]
    try:
        amount = int(parts[3])
    except ValueError:
        await message.answer("Сумма должна быть целым числом (в сантимах).")
        return

    brands = _load_brands()
    brand = brands.get(domain, brands["default"])

    await message.answer("⏳ Создаю платёж...")

    result = await create_payment(
        order_id=order_id,
        amount_cents=amount,
        currency=brand["currency"],
        domain=domain,
        description=brand["payment_description"],
    )

    if result.payment_url:
        await message.answer(
            f"✅ *Платёж создан*\n\n"
            f"Бренд: *{brand['name']}*\n"
            f"Заказ: `{order_id}`\n"
            f"Сумма: {amount / 100:.2f} {brand['currency']}\n"
            f"ID платежа: `{result.payment_id}`\n\n"
            f"🔗 [Ссылка на оплату]({result.payment_url})",
            parse_mode="Markdown",
            reply_markup=InlineKeyboardMarkup(inline_keyboard=[
                [InlineKeyboardButton(
                    text="🔍 Проверить статус",
                    callback_data=f"check_pay:{result.payment_id}",
                )],
            ]),
        )
    else:
        await message.answer(
            f"❌ Ошибка создания платежа:\n`{result.error}`",
            parse_mode="Markdown",
        )


@router.message(Command("check"))
async def cmd_check(message: Message) -> None:
    parts = message.text.strip().split()
    if len(parts) < 2:
        await message.answer(
            "Использование: `/check <payment_id>`",
            parse_mode="Markdown",
        )
        return

    payment_id = parts[1]
    result = await check_payment(payment_id)

    status_emoji = {
        "pending": "⏳",
        "paid": "✅",
        "failed": "❌",
        "expired": "⏰",
    }

    await message.answer(
        f"{status_emoji.get(result.status, '❓')} *Статус платежа*\n\n"
        f"ID: `{result.payment_id}`\n"
        f"Статус: *{result.status.value}*"
        + (f"\nОшибка: `{result.error}`" if result.error else ""),
        parse_mode="Markdown",
    )


@router.callback_query(F.data.startswith("check_pay:"))
async def cb_check_payment(callback: CallbackQuery) -> None:
    payment_id = callback.data.split(":", 1)[1]
    await callback.answer("Проверяю...")

    result = await check_payment(payment_id)

    status_emoji = {
        "pending": "⏳",
        "paid": "✅",
        "failed": "❌",
        "expired": "⏰",
    }

    await callback.message.edit_text(
        f"{status_emoji.get(result.status, '❓')} *Статус платежа*\n\n"
        f"ID: `{result.payment_id}`\n"
        f"Статус: *{result.status.value}*"
        + (f"\nОшибка: `{result.error}`" if result.error else ""),
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(
                text="🔄 Обновить",
                callback_data=f"check_pay:{payment_id}",
            )],
        ]),
    )


@router.callback_query(F.data == "back_main")
async def cb_back_main(callback: CallbackQuery) -> None:
    from bot.handlers.admin import main_menu_kb
    await callback.answer()
    await callback.message.edit_text(
        "🏠 *Панель администратора*\n\nВыберите действие:",
        parse_mode="Markdown",
        reply_markup=main_menu_kb(),
    )
