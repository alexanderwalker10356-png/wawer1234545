"""Admin command handlers — /start, /help, menu navigation."""

from __future__ import annotations

from aiogram import Router
from aiogram.filters import Command
from aiogram.types import Message, InlineKeyboardMarkup, InlineKeyboardButton

router = Router(name="admin")


def main_menu_kb() -> InlineKeyboardMarkup:
    return InlineKeyboardMarkup(inline_keyboard=[
        [
            InlineKeyboardButton(text="📊 Мониторинг", callback_data="monitoring"),
            InlineKeyboardButton(text="💳 Платежи", callback_data="payments_menu"),
        ],
        [
            InlineKeyboardButton(text="🔄 Перезагрузка", callback_data="restart_menu"),
            InlineKeyboardButton(text="🌐 Бренды", callback_data="brands_list"),
        ],
    ])


@router.message(Command("start"))
async def cmd_start(message: Message) -> None:
    await message.answer(
        "🏠 *Панель администратора*\n\n"
        "Управление мультитенантной платформой.\n"
        "Выберите действие:",
        reply_markup=main_menu_kb(),
        parse_mode="Markdown",
    )


@router.message(Command("help"))
async def cmd_help(message: Message) -> None:
    await message.answer(
        "*Доступные команды:*\n\n"
        "/start — главное меню\n"
        "/status — состояние серверов\n"
        "/brands — список брендов\n"
        "/pay `<domain>` `<order_id>` `<amount>` — создать платёж\n"
        "/check `<payment_id>` — проверить статус платежа\n"
        "/restart `<nginx|php|mysql>` — перезагрузить сервис\n",
        parse_mode="Markdown",
    )
