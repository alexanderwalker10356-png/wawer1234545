"""
White-Label Admin Telegram Bot.
Supports: Telegram Stars + YooKassa payments, admin panel, server monitoring.

Run: python -m bot.main
"""

from __future__ import annotations

import asyncio
import logging
import os

from aiohttp import web
from aiogram import Bot, Dispatcher
from aiogram.client.default import DefaultBotProperties
from aiogram.enums import ParseMode
from aiogram.webhook.aiohttp_server import SimpleRequestHandler, setup_application

from bot.config import config
from bot.database import init_db
from bot.middleware.auth import AdminOnlyMiddleware
from bot.handlers import admin, monitoring, payments


logging.basicConfig(
    level=logging.INFO,
    format="%(asctime)s [%(levelname)s] %(name)s: %(message)s",
)
logger = logging.getLogger(__name__)


def create_bot() -> Bot:
    return Bot(
        token=config.bot_token,
        default=DefaultBotProperties(parse_mode=ParseMode.MARKDOWN),
    )


def create_dispatcher() -> Dispatcher:
    dp = Dispatcher()
    dp.message.middleware(AdminOnlyMiddleware())
    dp.callback_query.middleware(AdminOnlyMiddleware())
    dp.include_routers(
        admin.router,
        payments.router,
        monitoring.router,
    )
    return dp


async def on_startup(bot: Bot) -> None:
    await init_db()
    logger.info("Database initialized")

    if config.use_webhook:
        await bot.set_webhook(
            config.webhook_url,
            drop_pending_updates=True,
        )
        logger.info("Webhook set: %s", config.webhook_url)
    else:
        await bot.delete_webhook(drop_pending_updates=True)


async def main() -> None:
    os.makedirs(os.path.dirname(config.db_path), exist_ok=True)

    bot = create_bot()
    dp = create_dispatcher()
    dp.startup.register(on_startup)

    if config.use_webhook:
        app = web.Application()
        handler = SimpleRequestHandler(dispatcher=dp, bot=bot)
        handler.register(app, path=config.webhook_path)
        setup_application(app, dp, bot=bot)

        logger.info(
            "Starting webhook server on %s:%s",
            config.webapp_host, config.webapp_port,
        )
        await web._run_app(app, host=config.webapp_host, port=config.webapp_port)
    else:
        logger.info("Starting polling mode. Admin ID: %s", config.admin_id)
        await dp.start_polling(bot)


if __name__ == "__main__":
    asyncio.run(main())
