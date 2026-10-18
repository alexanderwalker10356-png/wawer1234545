"""
Payment gateway integration.

Supports a generic REST-based payment API.
Replace the implementation with your actual gateway (CMI, Stripe, PayPal, etc.).
"""

from __future__ import annotations

import hashlib
import hmac
import time
from dataclasses import dataclass
from enum import Enum

import aiohttp

from bot.config import config


class PaymentStatus(str, Enum):
    PENDING = "pending"
    PAID = "paid"
    FAILED = "failed"
    EXPIRED = "expired"


@dataclass
class PaymentResult:
    payment_id: str
    status: PaymentStatus
    payment_url: str | None = None
    error: str | None = None


def _sign(payload: str) -> str:
    return hmac.new(
        config.payment_secret.encode(),
        payload.encode(),
        hashlib.sha256,
    ).hexdigest()


async def create_payment(
    order_id: str,
    amount_cents: int,
    currency: str,
    domain: str,
    description: str,
) -> PaymentResult:
    """Create a payment and return a checkout URL."""
    payload = {
        "order_id": order_id,
        "amount": amount_cents,
        "currency": currency,
        "description": description,
        "return_url": f"https://{domain}/payment/success",
        "cancel_url": f"https://{domain}/payment/cancel",
        "webhook_url": f"https://{domain}/api/payment-webhook",
        "timestamp": int(time.time()),
    }

    headers = {
        "Authorization": f"Bearer {config.payment_api_key}",
        "X-Signature": _sign(f"{order_id}:{amount_cents}:{currency}"),
        "Content-Type": "application/json",
    }

    try:
        async with aiohttp.ClientSession() as session:
            async with session.post(
                f"{config.payment_gateway_url}/payments",
                json=payload,
                headers=headers,
                timeout=aiohttp.ClientTimeout(total=30),
            ) as resp:
                data = await resp.json()
                if resp.status == 200 or resp.status == 201:
                    return PaymentResult(
                        payment_id=data["payment_id"],
                        status=PaymentStatus.PENDING,
                        payment_url=data["payment_url"],
                    )
                return PaymentResult(
                    payment_id="",
                    status=PaymentStatus.FAILED,
                    error=data.get("error", f"HTTP {resp.status}"),
                )
    except Exception as exc:
        return PaymentResult(
            payment_id="",
            status=PaymentStatus.FAILED,
            error=str(exc),
        )


async def check_payment(payment_id: str) -> PaymentResult:
    """Check the status of an existing payment."""
    headers = {
        "Authorization": f"Bearer {config.payment_api_key}",
    }

    try:
        async with aiohttp.ClientSession() as session:
            async with session.get(
                f"{config.payment_gateway_url}/payments/{payment_id}",
                headers=headers,
                timeout=aiohttp.ClientTimeout(total=15),
            ) as resp:
                data = await resp.json()
                if resp.status == 200:
                    return PaymentResult(
                        payment_id=payment_id,
                        status=PaymentStatus(data["status"]),
                        payment_url=data.get("payment_url"),
                    )
                return PaymentResult(
                    payment_id=payment_id,
                    status=PaymentStatus.FAILED,
                    error=data.get("error", f"HTTP {resp.status}"),
                )
    except Exception as exc:
        return PaymentResult(
            payment_id=payment_id,
            status=PaymentStatus.FAILED,
            error=str(exc),
        )
