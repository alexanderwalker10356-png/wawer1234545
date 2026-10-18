"""Server monitoring and service restart handlers."""

from __future__ import annotations

from aiogram import Router, F
from aiogram.filters import Command
from aiogram.types import (
    Message,
    CallbackQuery,
    InlineKeyboardMarkup,
    InlineKeyboardButton,
)

from bot.services.server_monitor import (
    get_full_status,
    restart_service,
)

router = Router(name="monitoring")

ALLOWED_SERVICES = {
    "nginx": "nginx",
    "php": "php8.3-fpm",
    "mysql": "mysql",
}


def restart_kb() -> InlineKeyboardMarkup:
    return InlineKeyboardMarkup(inline_keyboard=[
        [
            InlineKeyboardButton(text="🔄 Nginx", callback_data="restart:nginx"),
            InlineKeyboardButton(text="🔄 PHP-FPM", callback_data="restart:php"),
        ],
        [
            InlineKeyboardButton(text="🔄 MySQL", callback_data="restart:mysql"),
            InlineKeyboardButton(text="◀️ Назад", callback_data="back_main"),
        ],
    ])


@router.message(Command("status"))
async def cmd_status(message: Message) -> None:
    await message.answer("⏳ Получаю данные...")
    status = await get_full_status()
    await message.answer(f"```\n{status}\n```", parse_mode="Markdown")


@router.callback_query(F.data == "monitoring")
async def cb_monitoring(callback: CallbackQuery) -> None:
    await callback.answer()
    status = await get_full_status()
    await callback.message.edit_text(
        f"📊 *Состояние серверов:*\n\n```\n{status}\n```",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="🔄 Обновить", callback_data="monitoring")],
            [InlineKeyboardButton(text="◀️ Назад", callback_data="back_main")],
        ]),
    )


@router.callback_query(F.data == "restart_menu")
async def cb_restart_menu(callback: CallbackQuery) -> None:
    await callback.answer()
    await callback.message.edit_text(
        "🔄 *Перезагрузка сервисов*\n\nВыберите сервис:",
        parse_mode="Markdown",
        reply_markup=restart_kb(),
    )


@router.callback_query(F.data.startswith("restart:"))
async def cb_restart_service(callback: CallbackQuery) -> None:
    service_key = callback.data.split(":")[1]
    service_name = ALLOWED_SERVICES.get(service_key)
    if not service_name:
        await callback.answer("Неизвестный сервис", show_alert=True)
        return

    await callback.answer(f"Перезагружаю {service_name}...")
    result = await restart_service(service_name)
    await callback.message.edit_text(
        f"🔄 Перезагрузка *{service_name}*:\n\n`{result}`",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="◀️ Назад", callback_data="restart_menu")],
        ]),
    )


@router.message(Command("restart"))
async def cmd_restart(message: Message) -> None:
    parts = message.text.strip().split()
    if len(parts) < 2:
        await message.answer(
            "Использование: /restart `<nginx|php|mysql>`",
            parse_mode="Markdown",
        )
        return

    service_key = parts[1].lower()
    service_name = ALLOWED_SERVICES.get(service_key)
    if not service_name:
        await message.answer(
            f"Неизвестный сервис: `{service_key}`\n"
            f"Доступные: {', '.join(ALLOWED_SERVICES.keys())}",
            parse_mode="Markdown",
        )
        return

    await message.answer(f"⏳ Перезагружаю {service_name}...")
    result = await restart_service(service_name)
    await message.answer(f"✅ Результат:\n`{result}`", parse_mode="Markdown")
