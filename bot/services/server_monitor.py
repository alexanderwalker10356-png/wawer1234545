"""Server monitoring — uptime, disk, memory, services."""

from __future__ import annotations

import asyncio
import shlex


async def _run(cmd: str, timeout: float = 10.0) -> str:
    proc = await asyncio.create_subprocess_shell(
        cmd,
        stdout=asyncio.subprocess.PIPE,
        stderr=asyncio.subprocess.STDOUT,
    )
    try:
        stdout, _ = await asyncio.wait_for(proc.communicate(), timeout=timeout)
        return stdout.decode(errors="replace").strip()
    except asyncio.TimeoutError:
        proc.kill()
        return "[timeout]"


async def get_uptime() -> str:
    return await _run("uptime -p")


async def get_disk_usage() -> str:
    return await _run("df -h --output=target,size,used,avail,pcent -x tmpfs -x devtmpfs 2>/dev/null || df -h")


async def get_memory() -> str:
    return await _run("free -h 2>/dev/null || echo 'free not available'")


async def get_service_status(service: str) -> str:
    safe = shlex.quote(service)
    return await _run(f"systemctl is-active {safe} 2>/dev/null || echo 'unknown'")


async def restart_service(service: str) -> str:
    safe = shlex.quote(service)
    return await _run(f"systemctl restart {safe}", timeout=30.0)


async def get_full_status() -> str:
    uptime, disk, mem, nginx_st, php_st = await asyncio.gather(
        get_uptime(),
        get_disk_usage(),
        get_memory(),
        get_service_status("nginx"),
        get_service_status("php8.3-fpm"),
    )

    return (
        f"Uptime: {uptime}\n\n"
        f"Disk:\n{disk}\n\n"
        f"Memory:\n{mem}\n\n"
        f"Services:\n"
        f"  nginx:     {nginx_st}\n"
        f"  php8.3-fpm: {php_st}"
    )
