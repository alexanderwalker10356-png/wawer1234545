    </main>
<?php
$footer_text = [
    'fr' => [
        'desc' => 'Ressource informative indépendante sur les télécommunications au Maroc.',
        'sections' => 'Sections',
        'nav' => ['index.php' => 'Accueil', 'operators.php' => 'Opérateurs', 'technology.php' => 'Technologies', 'privacy.php' => 'Confidentialité'],
        'copy' => 'Contenu à caractère informatif uniquement.',
    ],
    'en' => [
        'desc' => 'Independent informational resource on telecommunications in Morocco.',
        'sections' => 'Sections',
        'nav' => ['index.php' => 'Home', 'operators.php' => 'Operators', 'technology.php' => 'Technologies', 'privacy.php' => 'Privacy'],
        'copy' => 'Informational content only.',
    ],
    'ar' => [
        'desc' => 'مصدر معلوماتي مستقل حول الاتصالات في المغرب.',
        'sections' => 'الأقسام',
        'nav' => ['index.php' => 'الرئيسية', 'operators.php' => 'المشغّلون', 'technology.php' => 'التقنيات', 'privacy.php' => 'الخصوصية'],
        'copy' => 'محتوى إعلامي فقط.',
    ],
];
$fl = isset($lang) ? $lang : 'fr';
$ft = isset($footer_text[$fl]) ? $footer_text[$fl] : $footer_text['fr'];
?>
    <footer style="background:#1a1a2e;color:#8888a0;padding:32px 16px;margin-top:auto;font-size:0.85rem;">
        <div style="max-width:960px;margin:0 auto;display:flex;flex-wrap:wrap;justify-content:space-between;gap:20px;">
            <div style="flex:1;min-width:200px;">
                <div style="font-weight:700;color:#e8e8f0;margin-bottom:8px;"><?php echo $site_name; ?></div>
                <p style="margin:0 0 4px;color:#8888a0;"><?php echo $ft['desc']; ?></p>
                <p style="margin:0;color:#8888a0;">adam.henderson62464@gmail.com</p>
            </div>
            <div style="flex:0 0 auto;">
                <div style="font-weight:600;color:#b0b0c8;margin-bottom:8px;"><?php echo $ft['sections']; ?></div>
                <div style="display:flex;flex-direction:column;gap:4px;">
                    <?php foreach ($ft['nav'] as $href => $label): ?>
                        <a href="<?php echo $href; ?>" style="color:#8888a0;text-decoration:none;"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div style="max-width:960px;margin:20px auto 0;padding-top:16px;border-top:1px solid rgba(255,255,255,0.08);text-align:center;color:#666;">
            &copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. <?php echo $ft['copy']; ?>
        </div>
    </footer>
</body>
</html>
