"""Server monitoring utilities — uptime, disk, service control."""

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
    return await _run("df -h --output=target,size,used,avail,pcent -x tmpfs -x devtmpfs")


async def get_memory() -> str:
    return await _run("free -h")


async def get_service_status(service: str) -> str:
    safe = shlex.quote(service)
    return await _run(f"systemctl is-active {safe}")


async def restart_service(service: str) -> str:
    safe = shlex.quote(service)
    return await _run(f"sudo systemctl restart {safe}", timeout=30.0)


async def get_full_status() -> str:
    uptime, disk, mem, nginx_st, php_st, mysql_st = await asyncio.gather(
        get_uptime(),
        get_disk_usage(),
        get_memory(),
        get_service_status("nginx"),
        get_service_status("php8.3-fpm"),
        get_service_status("mysql"),
    )

    return (
        f"⏱ Uptime: {uptime}\n\n"
        f"💾 Disk:\n{disk}\n\n"
        f"🧠 Memory:\n{mem}\n\n"
        f"Services:\n"
        f"  nginx: {nginx_st}\n"
        f"  php8.3-fpm: {php_st}\n"
        f"  mysql: {mysql_st}"
    )
