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

from bot.services.server_monitor import get_full_status, restart_service

router = Router(name="monitoring")

ALLOWED_SERVICES = {
    "nginx": "nginx",
    "php": "php8.3-fpm",
}


def restart_kb() -> InlineKeyboardMarkup:
    return InlineKeyboardMarkup(inline_keyboard=[
        [
            InlineKeyboardButton(text="Nginx", callback_data="restart:nginx"),
            InlineKeyboardButton(text="PHP-FPM", callback_data="restart:php"),
        ],
        [InlineKeyboardButton(text="Back", callback_data="back_main")],
    ])


@router.message(Command("status"))
async def cmd_status(message: Message) -> None:
    await message.answer("Loading...")
    status = await get_full_status()
    await message.answer(f"```\n{status}\n```", parse_mode="Markdown")


@router.callback_query(F.data == "monitoring")
async def cb_monitoring(callback: CallbackQuery) -> None:
    await callback.answer()
    status = await get_full_status()
    await callback.message.edit_text(
        f"*Server Status:*\n\n```\n{status}\n```",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="Refresh", callback_data="monitoring")],
            [InlineKeyboardButton(text="Back", callback_data="back_main")],
        ]),
    )


@router.callback_query(F.data == "restart_menu")
async def cb_restart_menu(callback: CallbackQuery) -> None:
    await callback.answer()
    await callback.message.edit_text(
        "*Restart a service:*",
        parse_mode="Markdown",
        reply_markup=restart_kb(),
    )


@router.callback_query(F.data.startswith("restart:"))
async def cb_restart_service(callback: CallbackQuery) -> None:
    key = callback.data.split(":")[1]
    service = ALLOWED_SERVICES.get(key)
    if not service:
        await callback.answer("Unknown service", show_alert=True)
        return

    await callback.answer(f"Restarting {service}...")
    result = await restart_service(service)
    await callback.message.edit_text(
        f"*Restart {service}:*\n`{result}`",
        parse_mode="Markdown",
        reply_markup=InlineKeyboardMarkup(inline_keyboard=[
            [InlineKeyboardButton(text="Back", callback_data="restart_menu")],
        ]),
    )


@router.message(Command("restart"))
async def cmd_restart(message: Message) -> None:
    parts = message.text.strip().split()
    if len(parts) < 2:
        await message.answer(
            "Usage: `/restart <nginx|php>`", parse_mode="Markdown"
        )
        return

    key = parts[1].lower()
    service = ALLOWED_SERVICES.get(key)
    if not service:
        await message.answer(f"Unknown service: `{key}`", parse_mode="Markdown")
        return

    await message.answer(f"Restarting {service}...")
    result = await restart_service(service)
    await message.answer(f"`{result}`", parse_mode="Markdown")
