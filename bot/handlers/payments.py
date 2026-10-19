"""Payment handlers — Telegram Stars + YooKassa."""

from __future__ import annotations

import json
import uuid
from datetime import datetime

from aiogram import Router, F, Bot
from aiogram.filters import Command
from aiogram.types import (
    Message,
    CallbackQuery,
    InlineKeyboardMarkup,
    InlineKeyboardButton,
    LabeledPrice,
    PreCheckoutQuery,
    ContentType,
)

from bot.config import config
from bot import database as db
from bot.services.yookassa_service import create_yookassa_payment, check_yookassa_payment

router = Router(name="payments")


def _load_brands() -> dict:
    try:
        path = "/app/white-label/brands.json"
        with open(path, encoding="utf-8") as f:
            return json.load(f)["brands"]
    except FileNotFoundError:
        return {"default": {"name": "Platform", "currency": "RUB"}}


# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
#  PRODUCT MANAGEMENT
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

@router.message(Command("addproduct"))
async def cmd_add_product(message: Message) -> None:
    """Usage: /addproduct brand|name|description|price_cents|currency|stars_price"""
    parts = message.text.strip().split(maxsplit=1)
    if len(parts) < 2:
        await message.answer(
            "Usage:\n`/addproduct brand|name|desc|price_cents|currency|stars`\n\n"
            "Example:\n`/addproduct ticket.ma|Bus Ticket|Marrakech-Casablanca|15000|MAD|100`",
            parse_mode="Markdown",
        )
        return

    fields = parts[1].split("|")
    if len(fields) != 6:
        await message.answer("Need exactly 6 fields separated by `|`", parse_mode="Markdown")
        return

    brand, name, desc, price_s, currency, stars_s = [f.strip() for f in fields]
    try:
        price_cents = int(price_s)
        stars_price = int(stars_s)
    except ValueError:
        await message.answer("price_cents and stars_price must be integers.")
        return

    pid = await db.add_product(brand, name, desc, price_cents, currency, stars_price)
    await message.answer(
        f"Product #{pid} created:\n"
        f"*{name}* — {price_cents/100:.2f} {currency} / {stars_price} Stars",
        parse_mode="Markdown",
    )


@router.message(Command("products"))
async def cmd_products(message: Message) -> None:
    products = await db.get_products()
    if not products:
        await message.answer("No products yet. Use /addproduct to create one.")
        return

    lines = ["*Products:*\n"]
    for p in products:
        lines.append(
            f"#{p['id']} *{p['name']}* ({p['brand']})\n"
            f"   {p['price_cents']/100:.2f} {p['currency']} / {p['stars_price']} Stars"
        )
    await message.answer("\n".join(lines), parse_mode="Markdown")


@router.callback_query(F.data == "products")
async def cb_products(callback: CallbackQuery) -> None:
    await callback.answer()
    products = await db.get_products()
    if not products:
        await callback.message.edit_text(
            "No products. Use /addproduct",
            reply_markup=InlineKeyboardMarkup(inline_keyboard=[
                [InlineKeyboardButton(text="Back", callback_data="back_main")],
            ]),
        )
        return

    lines = ["*Products:*\n"]
    buttons = []
    for p in products:
        lines.append(f"#{p['id']} *{p['name']}* — {p['price_cents']/100:.2f} {p['currency']}")
        buttons.append([
            InlineKeyboardButton(
                text=f"Stars: {p['name']}", callback_data=f"buy_stars:{p['id']}"
            ),
            InlineKeyboardButton(
                text=f"YooKassa: {p['name']}", callback_data=f"buy_yoo:{p['id']}"
            ),
        ])
    buttons.append([InlineKeyboardButton(text="Back", callback_data="back_main")])

    await callback.message.edit_text(
        "\n".join(lines),
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=buttons),
    )


# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
#  TELEGRAM STARS PAYMENTS
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

@router.message(Command("pay_stars"))
async def cmd_pay_stars(message: Message, bot: Bot) -> None:
    """Usage: /pay_stars <product_id>"""
    parts = message.text.strip().split()
    if len(parts) < 2:
        await message.answer("Usage: `/pay_stars <product_id>`", parse_mode="Markdown")
        return

    try:
        product_id = int(parts[1])
    except ValueError:
        await message.answer("product_id must be a number.")
        return

    products = await db.get_products()
    product = next((p for p in products if p["id"] == product_id), None)
    if not product:
        await message.answer("Product not found.")
        return

    if product["stars_price"] <= 0:
        await message.answer("This product has no Stars price set.")
        return

    order_id = f"STARS-{uuid.uuid4().hex[:8].upper()}"
    await db.create_order(
        order_id=order_id,
        user_id=message.from_user.id,
        brand=product["brand"],
        description=product["name"],
        amount_cents=product["price_cents"],
        currency="XTR",
        payment_method="stars",
    )

    await bot.send_invoice(
        chat_id=message.chat.id,
        title=product["name"],
        description=product["description"] or product["name"],
        payload=order_id,
        provider_token="",
        currency="XTR",
        prices=[LabeledPrice(label=product["name"], amount=product["stars_price"])],
    )


@router.callback_query(F.data.startswith("buy_stars:"))
async def cb_buy_stars(callback: CallbackQuery, bot: Bot) -> None:
    product_id = int(callback.data.split(":")[1])
    products = await db.get_products()
    product = next((p for p in products if p["id"] == product_id), None)
    if not product:
        await callback.answer("Product not found", show_alert=True)
        return

    await callback.answer()

    order_id = f"STARS-{uuid.uuid4().hex[:8].upper()}"
    await db.create_order(
        order_id=order_id,
        user_id=callback.from_user.id,
        brand=product["brand"],
        description=product["name"],
        amount_cents=product["price_cents"],
        currency="XTR",
        payment_method="stars",
    )

    await bot.send_invoice(
        chat_id=callback.message.chat.id,
        title=product["name"],
        description=product["description"] or product["name"],
        payload=order_id,
        provider_token="",
        currency="XTR",
        prices=[LabeledPrice(label=product["name"], amount=product["stars_price"])],
    )


@router.pre_checkout_query()
async def on_pre_checkout(pre_checkout: PreCheckoutQuery, bot: Bot) -> None:
    await bot.answer_pre_checkout_query(pre_checkout.id, ok=True)


@router.message(F.content_type == ContentType.SUCCESSFUL_PAYMENT)
async def on_successful_payment(message: Message) -> None:
    payment = message.successful_payment
    order_id = payment.invoice_payload
    provider_id = payment.telegram_payment_charge_id

    await db.update_order_status(order_id, "paid", provider_id)

    await message.answer(
        f"Payment received!\n\n"
        f"Order: `{order_id}`\n"
        f"Amount: {payment.total_amount} Stars\n"
        f"Charge ID: `{provider_id}`",
        parse_mode="Markdown",
    )


# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
#  YOOKASSA PAYMENTS
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

@router.message(Command("pay_yookassa"))
async def cmd_pay_yookassa(message: Message) -> None:
    """Usage: /pay_yookassa <product_id>"""
    parts = message.text.strip().split()
    if len(parts) < 2:
        await message.answer("Usage: `/pay_yookassa <product_id>`", parse_mode="Markdown")
        return

    try:
        product_id = int(parts[1])
    except ValueError:
        await message.answer("product_id must be a number.")
        return

    products = await db.get_products()
    product = next((p for p in products if p["id"] == product_id), None)
    if not product:
        await message.answer("Product not found.")
        return

    if not config.yookassa_shop_id:
        await message.answer("YooKassa not configured. Set YOOKASSA_SHOP_ID and YOOKASSA_SECRET_KEY.")
        return

    order_id = f"YOO-{uuid.uuid4().hex[:8].upper()}"
    await db.create_order(
        order_id=order_id,
        user_id=message.from_user.id,
        brand=product["brand"],
        description=product["name"],
        amount_cents=product["price_cents"],
        currency=product["currency"],
        payment_method="yookassa",
    )

    result = await create_yookassa_payment(
        order_id=order_id,
        amount_cents=product["price_cents"],
        currency=product["currency"],
        description=f"{product['name']} — {product['brand']}",
    )

    if "error" in result:
        await db.update_order_status(order_id, "failed")
        await message.answer(f"Payment error: `{result['error']}`", parse_mode="Markdown")
        return

    await db.update_order_status(order_id, "pending", result["id"])

    await message.answer(
        f"*Invoice created*\n\n"
        f"Order: `{order_id}`\n"
        f"Amount: {product['price_cents']/100:.2f} {product['currency']}\n\n"
        f"[Pay now]({result['confirmation_url']})",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(
                text="Check status",
                callback_data=f"yoo_check:{order_id}",
            )],
        ]),
    )


@router.callback_query(F.data.startswith("buy_yoo:"))
async def cb_buy_yookassa(callback: CallbackQuery) -> None:
    product_id = int(callback.data.split(":")[1])
    products = await db.get_products()
    product = next((p for p in products if p["id"] == product_id), None)
    if not product:
        await callback.answer("Product not found", show_alert=True)
        return

    if not config.yookassa_shop_id:
        await callback.answer("YooKassa not configured", show_alert=True)
        return

    await callback.answer("Creating payment...")

    order_id = f"YOO-{uuid.uuid4().hex[:8].upper()}"
    await db.create_order(
        order_id=order_id,
        user_id=callback.from_user.id,
        brand=product["brand"],
        description=product["name"],
        amount_cents=product["price_cents"],
        currency=product["currency"],
        payment_method="yookassa",
    )

    result = await create_yookassa_payment(
        order_id=order_id,
        amount_cents=product["price_cents"],
        currency=product["currency"],
        description=f"{product['name']} — {product['brand']}",
    )

    if "error" in result:
        await db.update_order_status(order_id, "failed")
        await callback.message.answer(f"Payment error: `{result['error']}`", parse_mode="Markdown")
        return

    await db.update_order_status(order_id, "pending", result["id"])

    await callback.message.answer(
        f"*Invoice created*\n\n"
        f"Order: `{order_id}`\n"
        f"Amount: {product['price_cents']/100:.2f} {product['currency']}\n\n"
        f"[Pay now]({result['confirmation_url']})",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(
                text="Check status",
                callback_data=f"yoo_check:{order_id}",
            )],
        ]),
    )


@router.callback_query(F.data.startswith("yoo_check:"))
async def cb_yoo_check(callback: CallbackQuery) -> None:
    order_id = callback.data.split(":", 1)[1]
    order = await db.get_order(order_id)
    if not order:
        await callback.answer("Order not found", show_alert=True)
        return

    provider_id = order.get("payment_provider_id", "")
    if not provider_id:
        await callback.answer("No payment ID yet", show_alert=True)
        return

    result = await check_yookassa_payment(provider_id)

    if "error" in result:
        await callback.answer(f"Error: {result['error']}", show_alert=True)
        return

    new_status = "paid" if result.get("paid") else result.get("status", "pending")
    if new_status != order["status"]:
        await db.update_order_status(order_id, new_status, provider_id)

    emoji = {"paid": "paid", "pending": "pending", "canceled": "canceled"}.get(new_status, new_status)

    await callback.answer(f"Status: {new_status}")
    await callback.message.edit_text(
        f"*Order {order_id}*\n\nStatus: *{new_status}*",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="Refresh", callback_data=f"yoo_check:{order_id}")],
        ]),
    )


# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
#  ORDERS LIST
# ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

@router.message(Command("orders"))
async def cmd_orders(message: Message) -> None:
    orders = await db.get_orders(limit=15)
    if not orders:
        await message.answer("No orders yet.")
        return
    await message.answer(_format_orders(orders), parse_mode="Markdown")


@router.callback_query(F.data.startswith("orders:"))
async def cb_orders(callback: CallbackQuery) -> None:
    filter_status = callback.data.split(":")[1]
    status = None if filter_status == "all" else filter_status
    orders = await db.get_orders(status=status, limit=15)

    await callback.answer()
    text = _format_orders(orders) if orders else "No orders."
    await callback.message.edit_text(
        text,
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [
                InlineKeyboardButton(text="All", callback_data="orders:all"),
                InlineKeyboardButton(text="Paid", callback_data="orders:paid"),
                InlineKeyboardButton(text="Pending", callback_data="orders:pending"),
            ],
            [InlineKeyboardButton(text="Back", callback_data="back_main")],
        ]),
    )


@router.callback_query(F.data == "stats")
async def cb_stats(callback: CallbackQuery) -> None:
    await callback.answer()
    s = await db.get_stats()
    await callback.message.edit_text(
        f"*Platform Stats*\n\n"
        f"Total orders: {s['total']}\n"
        f"Paid: {s['paid']}\n"
        f"Pending: {s['pending']}\n"
        f"Revenue: {s['revenue_cents'] / 100:,.2f}",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="Back", callback_data="back_main")],
        ]),
    )


@router.callback_query(F.data == "brands_list")
async def cb_brands_list(callback: CallbackQuery) -> None:
    await callback.answer()
    brands = _load_brands()
    lines = ["*Brands:*\n"]
    for domain, brand in brands.items():
        if domain == "default":
            continue
        lines.append(f"  `{domain}` — {brand.get('name', domain)}")

    await callback.message.edit_text(
        "\n".join(lines),
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="Back", callback_data="back_main")],
        ]),
    )


@router.callback_query(F.data == "back_main")
async def cb_back_main(callback: CallbackQuery) -> None:
    from bot.handlers.admin import main_menu_kb
    await callback.answer()
    await callback.message.edit_text(
        "*Admin Panel*\n\nWhite-Label platform management.",
        parse_mode="Markdown",
        reply_markup=main_menu_kb(),
    )


def _format_orders(orders: list[dict]) -> str:
    lines = ["*Recent Orders:*\n"]
    for o in orders:
        status_icon = {"paid": "+", "pending": "~", "failed": "x"}.get(o["status"], "?")
        ts = datetime.fromtimestamp(o["created_at"]).strftime("%m/%d %H:%M") if o.get("created_at") else "?"
        lines.append(
            f"`[{status_icon}]` `{o['order_id']}` "
            f"{o['amount_cents']/100:.0f} {o['currency']} "
            f"({o['payment_method']}) {ts}"
        )
    return "\n".join(lines)
