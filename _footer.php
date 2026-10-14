    </main>
<?php
$footer_text = [
    'fr' => [
        'desc' => 'Ressource informative indépendante sur les télécommunications au Maroc.',
        'sections' => 'Sections',
        'nav' => ['index.php' => 'Accueil', 'operators.php' => 'Opérateurs', 'technology.php' => 'Technologies', 'privacy.php' => 'Confidentialité'],
        'contact' => 'Contact',
        'copy' => 'Contenu à caractère informatif uniquement.',
    ],
    'en' => [
        'desc' => 'Independent informational resource on telecommunications in Morocco.',
        'sections' => 'Sections',
        'nav' => ['index.php' => 'Home', 'operators.php' => 'Operators', 'technology.php' => 'Technologies', 'privacy.php' => 'Privacy'],
        'contact' => 'Contact',
        'copy' => 'Informational content only.',
    ],
    'ar' => [
        'desc' => 'مصدر معلوماتي مستقل حول الاتصالات في المغرب.',
        'sections' => 'الأقسام',
        'nav' => ['index.php' => 'الرئيسية', 'operators.php' => 'المشغّلون', 'technology.php' => 'التقنيات', 'privacy.php' => 'الخصوصية'],
        'contact' => 'اتصل بنا',
        'copy' => 'محتوى إعلامي فقط.',
    ],
];
$fl = isset($lang) ? $lang : 'fr';
$ft = isset($footer_text[$fl]) ? $footer_text[$fl] : $footer_text['fr'];
?>
    <footer style="background:var(--c-footer-bg);color:rgba(255,255,255,0.5);padding:48px 20px 32px;margin-top:auto;font-size:0.88rem;">
        <div style="max-width:1100px;margin:0 auto;">
            <div style="display:grid;grid-template-columns:2fr 1fr 1fr;gap:40px;margin-bottom:32px;">
                <div>
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px;">
                        <div style="width:32px;height:32px;background:linear-gradient(135deg,var(--c-primary),#10b981);border-radius:8px;display:flex;align-items:center;justify-content:center;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M12 2L12 8M12 8L7 13M12 8L17 13" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 17C5 17 8 15 12 15C16 15 19 17 19 17" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
                        </div>
                        <span style="font-weight:700;color:#fff;font-size:1rem;"><?php echo $site_name; ?></span>
                    </div>
                    <p style="margin:0 0 4px;color:rgba(255,255,255,0.45);line-height:1.6;"><?php echo $ft['desc']; ?></p>
                </div>
                <div>
                    <div style="font-weight:600;color:rgba(255,255,255,0.7);margin-bottom:12px;font-size:0.82rem;text-transform:uppercase;letter-spacing:0.05em;"><?php echo $ft['sections']; ?></div>
                    <div style="display:flex;flex-direction:column;gap:8px;">
                        <?php foreach ($ft['nav'] as $href => $label): ?>
                            <a href="<?php echo $href; ?>" style="color:rgba(255,255,255,0.45);text-decoration:none;transition:color 0.2s;font-size:0.88rem;"><?php echo $label; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div>
                    <div style="font-weight:600;color:rgba(255,255,255,0.7);margin-bottom:12px;font-size:0.82rem;text-transform:uppercase;letter-spacing:0.05em;"><?php echo $ft['contact']; ?></div>
                    <div style="display:flex;align-items:center;gap:8px;color:rgba(255,255,255,0.45);">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 4L12 13L2 4"/></svg>
                        <span style="font-size:0.85rem;">adam.henderson62464@gmail.com</span>
                    </div>
                </div>
            </div>
            <div style="padding-top:20px;border-top:1px solid rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;">
                <span style="color:rgba(255,255,255,0.3);font-size:0.82rem;">&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. <?php echo $ft['copy']; ?></span>
                <div style="display:flex;gap:2px;background:rgba(255,255,255,0.06);border-radius:6px;padding:2px;">
                    <a href="<?php echo $fr_link; ?>" style="color:rgba(255,255,255,0.4);font-size:0.75rem;font-weight:600;padding:3px 8px;border-radius:5px;text-decoration:none;<?php echo ($fl === 'fr') ? 'background:var(--c-primary);color:#fff;' : ''; ?>">FR</a>
                    <a href="<?php echo $en_link; ?>" style="color:rgba(255,255,255,0.4);font-size:0.75rem;font-weight:600;padding:3px 8px;border-radius:5px;text-decoration:none;<?php echo ($fl === 'en') ? 'background:var(--c-primary);color:#fff;' : ''; ?>">EN</a>
                    <a href="<?php echo $ar_link; ?>" style="color:rgba(255,255,255,0.4);font-size:0.75rem;font-weight:600;padding:3px 8px;border-radius:5px;text-decoration:none;<?php echo ($fl === 'ar') ? 'background:var(--c-primary);color:#fff;' : ''; ?>">AR</a>
                </div>
            </div>
        </div>
    </footer>
    <style>
        @media (max-width: 768px) {
            footer > div > div:first-child { grid-template-columns: 1fr !important; gap: 28px !important; }
        }
    </style>
</body>
</html>
