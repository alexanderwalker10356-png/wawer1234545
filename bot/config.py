"""Bot configuration loaded from environment variables."""

from __future__ import annotations

import os
from pathlib import Path
from dataclasses import dataclass, field

from dotenv import load_dotenv

load_dotenv()


@dataclass(frozen=True)
class Config:
    bot_token: str = field(default_factory=lambda: os.environ["BOT_TOKEN"])
    admin_id: int = field(default_factory=lambda: int(os.environ["ADMIN_TELEGRAM_ID"]))

    # Payment gateway (CMI / Stripe / custom)
    payment_gateway_url: str = field(
        default_factory=lambda: os.environ.get("PAYMENT_GATEWAY_URL", "https://payment.example.com/api")
    )
    payment_api_key: str = field(
        default_factory=lambda: os.environ.get("PAYMENT_API_KEY", "")
    )
    payment_secret: str = field(
        default_factory=lambda: os.environ.get("PAYMENT_SECRET", "")
    )

    # Brands config
    brands_json: Path = field(
        default_factory=lambda: Path(
            os.environ.get("BRANDS_JSON_PATH", "/app/white-label/brands.json")
        )
    )

    # Monitored servers (comma-separated list of host:port or IPs)
    server_hosts: list[str] = field(
        default_factory=lambda: [
            h.strip()
            for h in os.environ.get("SERVER_HOSTS", "localhost").split(",")
            if h.strip()
        ]
    )


config = Config()
