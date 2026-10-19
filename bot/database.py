"""SQLite database for orders and payments."""

from __future__ import annotations

import aiosqlite
import time
from bot.config import config

DB = config.db_path


async def init_db() -> None:
    async with aiosqlite.connect(DB) as db:
        await db.execute("""
            CREATE TABLE IF NOT EXISTS orders (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                order_id TEXT UNIQUE NOT NULL,
                user_id INTEGER,
                brand TEXT NOT NULL,
                description TEXT NOT NULL,
                amount_cents INTEGER NOT NULL,
                currency TEXT DEFAULT 'RUB',
                status TEXT DEFAULT 'pending',
                payment_method TEXT,
                payment_provider_id TEXT,
                created_at REAL,
                paid_at REAL
            )
        """)
        await db.execute("""
            CREATE TABLE IF NOT EXISTS products (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                brand TEXT NOT NULL,
                name TEXT NOT NULL,
                description TEXT,
                price_cents INTEGER NOT NULL,
                currency TEXT DEFAULT 'RUB',
                stars_price INTEGER DEFAULT 0,
                active INTEGER DEFAULT 1
            )
        """)
        await db.commit()


async def create_order(
    order_id: str,
    user_id: int,
    brand: str,
    description: str,
    amount_cents: int,
    currency: str = "RUB",
    payment_method: str = "yookassa",
) -> dict:
    async with aiosqlite.connect(DB) as db:
        await db.execute(
            """INSERT INTO orders
               (order_id, user_id, brand, description, amount_cents, currency,
                status, payment_method, created_at)
               VALUES (?, ?, ?, ?, ?, ?, 'pending', ?, ?)""",
            (order_id, user_id, brand, description, amount_cents, currency,
             payment_method, time.time()),
        )
        await db.commit()
    return {"order_id": order_id, "status": "pending"}


async def update_order_status(
    order_id: str, status: str, provider_id: str = ""
) -> None:
    async with aiosqlite.connect(DB) as db:
        paid_at = time.time() if status == "paid" else None
        await db.execute(
            """UPDATE orders SET status=?, payment_provider_id=?, paid_at=?
               WHERE order_id=?""",
            (status, provider_id, paid_at, order_id),
        )
        await db.commit()


async def get_order(order_id: str) -> dict | None:
    async with aiosqlite.connect(DB) as db:
        db.row_factory = aiosqlite.Row
        cursor = await db.execute(
            "SELECT * FROM orders WHERE order_id=?", (order_id,)
        )
        row = await cursor.fetchone()
        return dict(row) if row else None


async def get_orders(
    status: str | None = None, limit: int = 20
) -> list[dict]:
    async with aiosqlite.connect(DB) as db:
        db.row_factory = aiosqlite.Row
        if status:
            cursor = await db.execute(
                "SELECT * FROM orders WHERE status=? ORDER BY created_at DESC LIMIT ?",
                (status, limit),
            )
        else:
            cursor = await db.execute(
                "SELECT * FROM orders ORDER BY created_at DESC LIMIT ?",
                (limit,),
            )
        rows = await cursor.fetchall()
        return [dict(r) for r in rows]


async def get_stats() -> dict:
    async with aiosqlite.connect(DB) as db:
        cur = await db.execute("SELECT COUNT(*) FROM orders")
        total = (await cur.fetchone())[0]

        cur = await db.execute(
            "SELECT COUNT(*) FROM orders WHERE status='paid'"
        )
        paid = (await cur.fetchone())[0]

        cur = await db.execute(
            "SELECT COALESCE(SUM(amount_cents),0) FROM orders WHERE status='paid'"
        )
        revenue = (await cur.fetchone())[0]

        cur = await db.execute(
            "SELECT COUNT(*) FROM orders WHERE status='pending'"
        )
        pending = (await cur.fetchone())[0]

        return {
            "total": total,
            "paid": paid,
            "pending": pending,
            "revenue_cents": revenue,
        }


async def add_product(
    brand: str, name: str, description: str,
    price_cents: int, currency: str, stars_price: int,
) -> int:
    async with aiosqlite.connect(DB) as db:
        cursor = await db.execute(
            """INSERT INTO products
               (brand, name, description, price_cents, currency, stars_price)
               VALUES (?, ?, ?, ?, ?, ?)""",
            (brand, name, description, price_cents, currency, stars_price),
        )
        await db.commit()
        return cursor.lastrowid


async def get_products(brand: str | None = None) -> list[dict]:
    async with aiosqlite.connect(DB) as db:
        db.row_factory = aiosqlite.Row
        if brand:
            cursor = await db.execute(
                "SELECT * FROM products WHERE brand=? AND active=1", (brand,)
            )
        else:
            cursor = await db.execute(
                "SELECT * FROM products WHERE active=1"
            )
        return [dict(r) for r in await cursor.fetchall()]
