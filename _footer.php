    </main>
    <footer style="background:#1a1a2e;color:#8888a0;padding:32px 16px;margin-top:auto;font-size:0.85rem;">
        <div style="max-width:960px;margin:0 auto;display:flex;flex-wrap:wrap;justify-content:space-between;gap:20px;">
            <div style="flex:1;min-width:200px;">
                <div style="font-weight:700;color:#e8e8f0;margin-bottom:8px;"><?php echo $site_name; ?></div>
                <p style="margin:0 0 4px;color:#8888a0;">Независимый информационный ресурс о телекоммуникациях в Марокко.</p>
                <p style="margin:0;color:#8888a0;">adam.henderson62464@gmail.com</p>
            </div>
            <div style="flex:0 0 auto;">
                <div style="font-weight:600;color:#b0b0c8;margin-bottom:8px;">Разделы</div>
                <div style="display:flex;flex-direction:column;gap:4px;">
                    <a href="index.php" style="color:#8888a0;text-decoration:none;">Главная</a>
                    <a href="operators.php" style="color:#8888a0;text-decoration:none;">Операторы</a>
                    <a href="technology.php" style="color:#8888a0;text-decoration:none;">Технологии</a>
                    <a href="privacy.php" style="color:#8888a0;text-decoration:none;">Конфиденциальность</a>
                </div>
            </div>
        </div>
        <div style="max-width:960px;margin:20px auto 0;padding-top:16px;border-top:1px solid rgba(255,255,255,0.08);text-align:center;color:#666;">
            &copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. Материалы носят информационный характер.
        </div>
    </footer>
</body>
</html>
