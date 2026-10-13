<?php
$site_name = 'Telecom Maroc Guide';
$site_domain = 'telecommarocguide.info';
$current_page = basename($_SERVER['PHP_SELF']);
$base_url = 'https://' . $site_domain;

if (!isset($page_title)) $page_title = $site_name;
if (!isset($page_description)) $page_description = 'Информационный справочник о мобильной связи и телекоммуникациях в Марокко';
if (!isset($page_canonical)) $page_canonical = $base_url . '/' . $current_page;
if (!isset($page_type)) $page_type = 'website';
if (!isset($schema_type)) $schema_type = 'WebSite';
if (!isset($breadcrumbs)) $breadcrumbs = [];

$nav_items = [
    'index.php' => 'Главная',
    'operators.php' => 'Операторы',
    'technology.php' => 'Технологии',
    'privacy.php' => 'Политика конфиденциальности',
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="<?php echo htmlspecialchars($page_type); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_canonical); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="robots" content="index, follow">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.7;
            color: #1a1a2e;
            background: #fafbfc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        a { color: #2b6cb0; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .site-header {
            background: #1a1a2e;
            color: #e8e8f0;
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .header-inner {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 56px;
        }
        .site-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #e8e8f0;
            font-weight: 700;
            font-size: 1.1rem;
            white-space: nowrap;
        }
        .site-logo:hover { text-decoration: none; color: #fff; }
        .site-logo svg { flex-shrink: 0; }
        .nav-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            color: #e8e8f0;
        }
        .site-nav { display: flex; gap: 4px; }
        .site-nav a {
            color: #b0b0c8;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 0.9rem;
            transition: background 0.2s, color 0.2s;
            text-decoration: none;
            white-space: nowrap;
        }
        .site-nav a:hover { background: rgba(255,255,255,0.08); color: #fff; text-decoration: none; }
        .site-nav a.active { background: rgba(255,255,255,0.12); color: #fff; font-weight: 600; }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 32px 16px;
            flex: 1;
            width: 100%;
        }
        .breadcrumb {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 24px;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
            align-items: center;
        }
        .breadcrumb a { color: #4a7ab5; }
        .breadcrumb .sep { color: #999; margin: 0 2px; }
        h1 {
            font-size: 2rem;
            font-weight: 800;
            color: #1a1a2e;
            margin-bottom: 24px;
            line-height: 1.2;
        }
        h2 {
            font-size: 1.45rem;
            font-weight: 700;
            color: #1a1a2e;
            margin: 36px 0 16px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e2e8f0;
        }
        h3 {
            font-size: 1.15rem;
            font-weight: 600;
            color: #2d3748;
            margin: 28px 0 12px;
        }
        p { margin-bottom: 16px; color: #2d3748; }
        ul, ol { margin: 0 0 16px 24px; color: #2d3748; }
        li { margin-bottom: 6px; }
        .info-box {
            background: #edf2f7;
            border-left: 4px solid #4a7ab5;
            padding: 16px 20px;
            margin: 24px 0;
            border-radius: 0 6px 6px 0;
        }
        .info-box p { margin-bottom: 8px; }
        .info-box p:last-child { margin-bottom: 0; }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 24px 0;
        }
        .card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
            transition: box-shadow 0.2s;
        }
        .card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
        .card h3 { margin-top: 0; }
        .operator-section {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 28px;
            margin: 24px 0;
        }
        .operator-section h2 { margin-top: 0; border-bottom: none; padding-bottom: 0; }
        .spec-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 0.95rem;
        }
        .spec-table th, .spec-table td {
            padding: 10px 14px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .spec-table th {
            background: #f7fafc;
            font-weight: 600;
            color: #1a1a2e;
            white-space: nowrap;
        }
        .spec-table tr:last-child td { border-bottom: none; }
        .last-updated {
            font-size: 0.85rem;
            color: #718096;
            margin-bottom: 24px;
        }

        @media (max-width: 768px) {
            .nav-toggle { display: block; }
            .site-nav {
                display: none;
                position: absolute;
                top: 56px;
                left: 0;
                right: 0;
                background: #1a1a2e;
                flex-direction: column;
                padding: 8px 16px 16px;
                border-top: 1px solid rgba(255,255,255,0.1);
                box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            }
            .site-nav.open { display: flex; }
            h1 { font-size: 1.6rem; }
            h2 { font-size: 1.25rem; }
            .container { padding: 24px 16px; }
        }
        @media (max-width: 480px) {
            h1 { font-size: 1.4rem; }
            h2 { font-size: 1.15rem; }
            .header-inner { min-height: 50px; }
            .site-logo { font-size: 0.95rem; }
            .card-grid { grid-template-columns: 1fr; }
            .spec-table { font-size: 0.85rem; }
            .spec-table th, .spec-table td { padding: 8px 10px; }
        }
    </style>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "WebSite",
                "name": "<?php echo $site_name; ?>",
                "url": "<?php echo $base_url; ?>"
            },
            {
                "@type": "Organization",
                "name": "<?php echo $site_name; ?>",
                "url": "<?php echo $base_url; ?>",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "email": "info@<?php echo $site_domain; ?>",
                    "contactType": "customer support"
                }
            }
            <?php if ($schema_type === 'Article' && isset($article_headline)): ?>,
            {
                "@type": "Article",
                "headline": "<?php echo htmlspecialchars($article_headline); ?>",
                "description": "<?php echo htmlspecialchars($page_description); ?>",
                "url": "<?php echo htmlspecialchars($page_canonical); ?>",
                "publisher": {
                    "@type": "Organization",
                    "name": "<?php echo $site_name; ?>"
                },
                "inLanguage": "ru",
                "datePublished": "2025-09-15",
                "dateModified": "2026-10-10"
            }
            <?php endif; ?>
            <?php if (!empty($breadcrumbs)): ?>,
            {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    <?php foreach ($breadcrumbs as $i => $bc): ?>
                    {
                        "@type": "ListItem",
                        "position": <?php echo $i + 1; ?>,
                        "name": "<?php echo htmlspecialchars($bc['name']); ?>",
                        "item": "<?php echo htmlspecialchars($bc['url']); ?>"
                    }<?php echo ($i < count($breadcrumbs) - 1) ? ',' : ''; ?>
                    <?php endforeach; ?>
                ]
            }
            <?php endif; ?>
        ]
    }
    </script>
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a href="index.php" class="site-logo">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
                    <circle cx="14" cy="14" r="13" stroke="#4a7ab5" stroke-width="2" fill="none"/>
                    <path d="M8 18 L14 8 L20 18" stroke="#4a7ab5" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="14" cy="10" r="2" fill="#4a7ab5"/>
                    <line x1="10" y1="15" x2="18" y2="15" stroke="#4a7ab5" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <?php echo $site_name; ?>
            </a>
            <button class="nav-toggle" aria-label="Menu" onclick="document.querySelector('.site-nav').classList.toggle('open')">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
            <nav class="site-nav">
                <?php foreach ($nav_items as $file => $label): ?>
                    <a href="<?php echo $file; ?>"<?php echo ($current_page === $file) ? ' class="active"' : ''; ?>><?php echo $label; ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>
    <main class="container">
