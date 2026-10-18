"""
White-label theme resolver.
Resolves brand configuration by domain name for dynamic payment pages.
"""

from __future__ import annotations

import json
from pathlib import Path
from functools import lru_cache
from typing import Any

BRANDS_JSON = Path(__file__).parent / "brands.json"


@lru_cache(maxsize=1)
def _load_brands() -> dict[str, Any]:
    with open(BRANDS_JSON, encoding="utf-8") as f:
        return json.load(f)["brands"]


def reload_brands() -> None:
    _load_brands.cache_clear()


def get_brand(domain: str) -> dict[str, Any]:
    brands = _load_brands()
    domain = domain.lower().removeprefix("www.")
    return brands.get(domain, brands["default"])


def get_all_brands() -> dict[str, Any]:
    return {k: v for k, v in _load_brands().items() if k != "default"}


def render_css_vars(domain: str) -> str:
    brand = get_brand(domain)
    colors = brand["colors"]
    lines = [":root {"]
    for name, value in colors.items():
        lines.append(f"    --color-{name}: {value};")
    lines.append(f'    --font-family: {brand["font"]};')
    lines.append("}")
    return "\n".join(lines)
