from __future__ import annotations

import os
from dataclasses import dataclass, field

from dotenv import load_dotenv

load_dotenv()


@dataclass(frozen=True)
class Config:
    bot_token: str = field(default_factory=lambda: os.environ["BOT_TOKEN"])
    admin_id: int = field(default_factory=lambda: int(os.environ["ADMIN_TELEGRAM_ID"]))

    # Webhook
    webhook_host: str = field(
        default_factory=lambda: os.environ.get("WEBHOOK_HOST", "")
    )
    webhook_path: str = field(
        default_factory=lambda: os.environ.get("WEBHOOK_PATH", "/webhook")
    )
    webapp_host: str = field(
        default_factory=lambda: os.environ.get("WEBAPP_HOST", "0.0.0.0")
    )
    webapp_port: int = field(
        default_factory=lambda: int(os.environ.get("WEBAPP_PORT", "8080"))
    )
    use_webhook: bool = field(
        default_factory=lambda: os.environ.get("USE_WEBHOOK", "false").lower() == "true"
    )

    # YooKassa
    yookassa_shop_id: str = field(
        default_factory=lambda: os.environ.get("YOOKASSA_SHOP_ID", "")
    )
    yookassa_secret_key: str = field(
        default_factory=lambda: os.environ.get("YOOKASSA_SECRET_KEY", "")
    )

    # Telegram Stars provider token (empty string = Telegram Stars)
    stars_provider_token: str = field(
        default_factory=lambda: os.environ.get("STARS_PROVIDER_TOKEN", "")
    )

    # Database
    db_path: str = field(
        default_factory=lambda: os.environ.get("DB_PATH", "/app/data/bot.db")
    )

    @property
    def webhook_url(self) -> str:
        return f"{self.webhook_host}{self.webhook_path}"


config = Config()
