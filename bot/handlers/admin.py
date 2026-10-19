"""Admin panel — main menu, stats, help."""

from __future__ import annotations

from aiogram import Router
from aiogram.filters import Command
from aiogram.types import Message, InlineKeyboardMarkup, InlineKeyboardButton

from bot import database as db

router = Router(name="admin")


def main_menu_kb() -> InlineKeyboardMarkup:
    return InlineKeyboardMarkup(inline_keyboard=[
        [
            InlineKeyboardButton(text="Stats", callback_data="stats"),
            InlineKeyboardButton(text="Orders", callback_data="orders:all"),
        ],
        [
            InlineKeyboardButton(text="Products", callback_data="products"),
            InlineKeyboardButton(text="Brands", callback_data="brands_list"),
        ],
        [
            InlineKeyboardButton(text="Server", callback_data="monitoring"),
            InlineKeyboardButton(text="Restart", callback_data="restart_menu"),
        ],
    ])


@router.message(Command("start"))
async def cmd_start(message: Message) -> None:
    await message.answer(
        "*Admin Panel*\n\nWhite-Label platform management.",
        reply_markup=main_menu_kb(),
        parse_mode="Markdown",
    )


@router.message(Command("help"))
async def cmd_help(message: Message) -> None:
    await message.answer(
        "*Commands:*\n\n"
        "/start — main menu\n"
        "/stats — revenue & order stats\n"
        "/orders — recent orders\n"
        "/products — manage products\n"
        "/addproduct — add a product\n"
        "/pay\\_stars `<product_id>` — pay with Telegram Stars\n"
        "/pay\\_yookassa `<product_id>` — pay with YooKassa\n"
        "/status — server monitoring\n"
        "/restart `<nginx|php>` — restart service\n",
        parse_mode="Markdown",
    )


@router.message(Command("stats"))
async def cmd_stats(message: Message) -> None:
    s = await db.get_stats()
    await message.answer(
        f"*Platform Stats*\n\n"
        f"Total orders: {s['total']}\n"
        f"Paid: {s['paid']}\n"
        f"Pending: {s['pending']}\n"
        f"Revenue: {s['revenue_cents'] / 100:,.2f}",
        parse_mode="Markdown",
    )
