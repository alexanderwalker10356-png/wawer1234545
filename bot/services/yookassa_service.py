"""YooKassa payment integration."""

from __future__ import annotations

import uuid
import aiohttp
from base64 import b64encode

from bot.config import config


def _auth_header() -> str:
    creds = f"{config.yookassa_shop_id}:{config.yookassa_secret_key}"
    return "Basic " + b64encode(creds.encode()).decode()


async def create_yookassa_payment(
    order_id: str,
    amount_cents: int,
    currency: str,
    description: str,
    return_url: str = "https://t.me",
) -> dict:
    """Create YooKassa payment, return {id, confirmation_url, status}."""
    idempotency_key = str(uuid.uuid4())
    payload = {
        "amount": {
            "value": f"{amount_cents / 100:.2f}",
            "currency": currency,
        },
        "confirmation": {
            "type": "redirect",
            "return_url": return_url,
        },
        "capture": True,
        "description": description,
        "metadata": {"order_id": order_id},
    }

    async with aiohttp.ClientSession() as session:
        async with session.post(
            "https://api.yookassa.ru/v3/payments",
            json=payload,
            headers={
                "Authorization": _auth_header(),
                "Idempotence-Key": idempotency_key,
                "Content-Type": "application/json",
            },
            timeout=aiohttp.ClientTimeout(total=30),
        ) as resp:
            data = await resp.json()
            if resp.status in (200, 201):
                return {
                    "id": data["id"],
                    "status": data["status"],
                    "confirmation_url": data["confirmation"]["confirmation_url"],
                }
            return {"error": data.get("description", f"HTTP {resp.status}")}


async def check_yookassa_payment(payment_id: str) -> dict:
    """Check payment status. Returns {id, status, paid, amount}."""
    async with aiohttp.ClientSession() as session:
        async with session.get(
            f"https://api.yookassa.ru/v3/payments/{payment_id}",
            headers={"Authorization": _auth_header()},
            timeout=aiohttp.ClientTimeout(total=15),
        ) as resp:
            data = await resp.json()
            if resp.status == 200:
                return {
                    "id": data["id"],
                    "status": data["status"],
                    "paid": data.get("paid", False),
                    "amount": data.get("amount", {}),
                }
            return {"error": data.get("description", f"HTTP {resp.status}")}
