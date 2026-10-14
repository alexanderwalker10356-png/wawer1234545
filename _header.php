<?php
$site_name = 'Telecom Maroc Guide';
$site_domain = 'maroctelecomguide.world';
$current_page = basename($_SERVER['PHP_SELF']);
$base_url = 'https://' . $site_domain;

if (!isset($page_lang)) $page_lang = 'fr';
$lang = $page_lang;

if (!isset($page_title)) $page_title = $site_name;
if (!isset($page_description)) $page_description = 'Guide informatif sur les télécommunications mobiles au Maroc';
if (!isset($page_canonical)) $page_canonical = $base_url . '/' . $current_page;
if (!isset($page_type)) $page_type = 'website';
if (!isset($schema_type)) $schema_type = 'WebSite';
if (!isset($breadcrumbs)) $breadcrumbs = [];

$nav_labels = [
    'fr' => ['index.php' => 'Accueil', 'operators.php' => 'Opérateurs', 'technology.php' => 'Technologies', 'sim-tourist.php' => 'SIM', 'coverage.php' => 'Couverture', 'faq.php' => 'FAQ'],
    'en' => ['index.php' => 'Home', 'operators.php' => 'Operators', 'technology.php' => 'Technologies', 'sim-tourist.php' => 'SIM', 'coverage.php' => 'Coverage', 'faq.php' => 'FAQ'],
    'ar' => ['index.php' => 'الرئيسية', 'operators.php' => 'المشغّلون', 'technology.php' => 'التقنيات', 'sim-tourist.php' => 'SIM', 'coverage.php' => 'التغطية', 'faq.php' => 'الأسئلة'],
];
$nav_items = isset($nav_labels[$lang]) ? $nav_labels[$lang] : $nav_labels['fr'];

$fr_link = ($lang === 'fr') ? $current_page : '../' . $current_page;
$en_link = ($lang === 'en') ? $current_page : (($lang === 'fr') ? 'en/' . $current_page : '../en/' . $current_page);
$ar_link = ($lang === 'ar') ? $current_page : (($lang === 'fr') ? 'ar/' . $current_page : '../ar/' . $current_page);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>"<?php echo ($lang === 'ar') ? ' dir="rtl"' : ''; ?>>
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

        :root {
            --c-primary: #0c6e3d;
            --c-primary-dark: #094d2b;
            --c-primary-light: #e8f5ee;
            --c-accent: #d4a843;
            --c-accent-light: #fdf6e3;
            --c-bg: #f8faf9;
            --c-surface: #ffffff;
            --c-text: #1a2332;
            --c-text-secondary: #4a5568;
            --c-text-muted: #718096;
            --c-border: #e2e8f0;
            --c-border-light: #edf2f7;
            --c-header-bg: #0a1628;
            --c-header-text: #e2e8f0;
            --c-footer-bg: #0a1628;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.08);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.1);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.12);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.75;
            color: var(--c-text);
            background: var(--c-bg);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a { color: var(--c-primary); text-decoration: none; transition: color 0.2s; }
        a:hover { color: var(--c-primary-dark); text-decoration: underline; }

        /* === HEADER === */
        .site-header {
            background: var(--c-header-bg);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 16px rgba(0,0,0,0.25);
        }
        .header-top {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }
        .site-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #fff;
            font-weight: 700;
            font-size: 1.15rem;
        }
        .site-logo:hover { text-decoration: none; opacity: 0.9; }
        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--c-primary), #10b981);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .header-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .nav-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            color: #fff;
            order: 1;
        }
        .site-nav {
            display: flex;
            gap: 2px;
        }
        .site-nav a {
            color: rgba(255,255,255,0.7);
            padding: 8px 16px;
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s;
            text-decoration: none;
            white-space: nowrap;
            position: relative;
        }
        .site-nav a:hover {
            color: #fff;
            background: rgba(255,255,255,0.08);
            text-decoration: none;
        }
        .site-nav a.active {
            color: #fff;
            background: rgba(255,255,255,0.12);
            font-weight: 600;
        }
        .site-nav a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 2px;
            background: var(--c-accent);
            border-radius: 1px;
        }
        .lang-switch {
            display: flex;
            gap: 2px;
            background: rgba(255,255,255,0.06);
            border-radius: 8px;
            padding: 3px;
        }
        .lang-switch a {
            color: rgba(255,255,255,0.5);
            font-size: 0.78rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.2s;
            letter-spacing: 0.5px;
        }
        .lang-switch a:hover { color: #fff; background: rgba(255,255,255,0.1); text-decoration: none; }
        .lang-switch a.active-lang { color: #fff; background: var(--c-primary); }

        /* === HERO === */
        .hero {
            background: linear-gradient(135deg, var(--c-header-bg) 0%, #132743 50%, var(--c-primary-dark) 100%);
            padding: 56px 20px 48px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 5 L55 30 L30 55 L5 30Z' fill='none' stroke='rgba(255,255,255,0.03)' stroke-width='1'/%3E%3C/svg%3E");
            pointer-events: none;
        }
        .hero-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 48px;
        }
        .hero-text { flex: 1; }
        .hero h1 {
            font-size: 2.4rem;
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero p {
            color: rgba(255,255,255,0.75);
            font-size: 1.1rem;
            line-height: 1.7;
            max-width: 560px;
        }
        .hero-visual {
            flex: 0 0 260px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* === MAIN CONTENT === */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
            flex: 1;
            width: 100%;
        }

        /* === BREADCRUMB === */
        .breadcrumb {
            font-size: 0.85rem;
            color: var(--c-text-muted);
            margin-bottom: 28px;
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            align-items: center;
        }
        .breadcrumb a { color: var(--c-primary); font-weight: 500; }
        .breadcrumb .sep { color: #cbd5e0; margin: 0 2px; }

        /* === TYPOGRAPHY === */
        h1 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--c-text);
            margin-bottom: 20px;
            line-height: 1.25;
            letter-spacing: -0.02em;
        }
        h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--c-text);
            margin: 48px 0 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--c-border);
            position: relative;
        }
        h2::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--c-primary);
        }
        [dir="rtl"] h2::after { left: auto; right: 0; }
        h3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--c-text);
            margin: 32px 0 12px;
        }
        p { margin-bottom: 16px; color: var(--c-text-secondary); }
        ul, ol { margin: 0 0 16px 24px; color: var(--c-text-secondary); }
        li { margin-bottom: 8px; }
        .last-updated {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.82rem;
            color: var(--c-text-muted);
            background: var(--c-border-light);
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 28px;
        }

        /* === CARDS === */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
            margin: 28px 0;
        }
        .card {
            background: var(--c-surface);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            padding: 28px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--c-primary), var(--c-accent));
            opacity: 0;
            transition: opacity 0.3s;
        }
        .card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
            border-color: transparent;
        }
        .card:hover::before { opacity: 1; }
        .card h3 { margin-top: 0; color: var(--c-text); }
        .card-icon {
            width: 48px;
            height: 48px;
            background: var(--c-primary-light);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }
        .card-icon svg { color: var(--c-primary); }

        /* === OPERATOR SECTIONS === */
        .operator-section {
            background: var(--c-surface);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            padding: 32px;
            margin: 28px 0;
            position: relative;
            overflow: hidden;
            transition: box-shadow 0.3s;
        }
        .operator-section:hover { box-shadow: var(--shadow-md); }
        .operator-section h2 {
            margin-top: 0;
            border-bottom: none;
            padding-bottom: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .operator-section h2::after { display: none; }
        .op-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: var(--radius-sm);
            flex-shrink: 0;
        }
        .op-badge-iam { background: linear-gradient(135deg, #1565c0, #0d47a1); }
        .op-badge-orange { background: linear-gradient(135deg, #f57c00, #e65100); }
        .op-badge-inwi { background: linear-gradient(135deg, #7b1fa2, #4a148c); }

        /* === TABLES === */
        .spec-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 24px 0;
            font-size: 0.93rem;
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            overflow: hidden;
        }
        .spec-table thead th {
            background: var(--c-primary);
            color: #fff;
            font-weight: 600;
            padding: 12px 16px;
            text-align: left;
            font-size: 0.85rem;
            letter-spacing: 0.02em;
        }
        [dir="rtl"] .spec-table thead th { text-align: right; }
        .spec-table th {
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            color: var(--c-text);
            background: #f7fafc;
            white-space: nowrap;
        }
        [dir="rtl"] .spec-table th { text-align: right; }
        .spec-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--c-border-light);
            color: var(--c-text-secondary);
        }
        [dir="rtl"] .spec-table td { text-align: right; }
        .spec-table tbody tr { transition: background 0.15s; }
        .spec-table tbody tr:hover { background: var(--c-primary-light); }
        .spec-table tbody tr:last-child td { border-bottom: none; }

        /* === INFO BOX === */
        .info-box {
            background: var(--c-accent-light);
            border-left: 4px solid var(--c-accent);
            padding: 20px 24px;
            margin: 28px 0;
            border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
            position: relative;
        }
        [dir="rtl"] .info-box {
            border-left: none;
            border-right: 4px solid var(--c-accent);
            border-radius: var(--radius-sm) 0 0 var(--radius-sm);
        }
        .info-box::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 24px;
            width: 20px;
            height: 20px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='9' fill='none' stroke='%23d4a843' stroke-width='1.5'/%3E%3Cpath d='M10 6v1M10 9v5' stroke='%23d4a843' stroke-width='1.5' stroke-linecap='round'/%3E%3C/svg%3E") no-repeat center;
        }
        [dir="rtl"] .info-box::before { left: auto; right: 24px; }
        .info-box p { margin-bottom: 8px; padding-left: 28px; }
        [dir="rtl"] .info-box p { padding-left: 0; padding-right: 28px; }
        .info-box p:last-child { margin-bottom: 0; }

        /* === FEATURE GRID === */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin: 28px 0;
        }
        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 20px;
            background: var(--c-surface);
            border-radius: var(--radius-md);
            border: 1px solid var(--c-border);
            transition: all 0.2s;
        }
        .feature-item:hover { box-shadow: var(--shadow-sm); }
        .feature-icon {
            width: 40px;
            height: 40px;
            background: var(--c-primary-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .feature-icon svg { width: 20px; height: 20px; }
        .feature-item h4 {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--c-text);
            margin-bottom: 4px;
        }
        .feature-item p { font-size: 0.85rem; margin: 0; color: var(--c-text-muted); }

        /* === STAT BOXES === */
        .stat-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            margin: 28px 0;
        }
        .stat-box {
            background: var(--c-surface);
            border: 1px solid var(--c-border);
            border-radius: var(--radius-md);
            padding: 24px;
            text-align: center;
            transition: all 0.2s;
        }
        .stat-box:hover { box-shadow: var(--shadow-sm); border-color: var(--c-primary); }
        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--c-primary);
            line-height: 1;
            margin-bottom: 6px;
        }
        .stat-label {
            font-size: 0.85rem;
            color: var(--c-text-muted);
            font-weight: 500;
        }

        /* === SECTION DIVIDER === */
        .section-visual {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 40px 0 20px;
        }

        /* === COVERAGE BAR === */
        .coverage-bar {
            background: var(--c-border-light);
            border-radius: 6px;
            height: 8px;
            width: 100%;
            overflow: hidden;
            margin: 4px 0;
        }
        .coverage-fill {
            height: 100%;
            border-radius: 6px;
            background: linear-gradient(90deg, var(--c-primary), #10b981);
        }

        /* === RESPONSIVE === */
        @media (max-width: 768px) {
            .nav-toggle { display: block; }
            .site-nav {
                display: none;
                position: absolute;
                top: 64px;
                left: 0;
                right: 0;
                background: var(--c-header-bg);
                flex-direction: column;
                padding: 8px 20px 16px;
                border-top: 1px solid rgba(255,255,255,0.08);
                box-shadow: 0 12px 24px rgba(0,0,0,0.3);
            }
            .site-nav.open { display: flex; }
            .hero { padding: 40px 20px 36px; }
            .hero h1 { font-size: 1.8rem; }
            .hero-visual { display: none; }
            .hero-inner { flex-direction: column; gap: 24px; }
            h1 { font-size: 1.7rem; }
            h2 { font-size: 1.3rem; }
            .container { padding: 28px 16px; }
            .card-grid { grid-template-columns: 1fr; }
            .stat-row { grid-template-columns: repeat(2, 1fr); }
            .operator-section { padding: 20px; }
        }
        @media (max-width: 480px) {
            .header-top { height: 56px; }
            .site-logo { font-size: 0.95rem; }
            .lang-switch a { font-size: 0.72rem; padding: 3px 8px; }
            h1 { font-size: 1.45rem; }
            h2 { font-size: 1.2rem; }
            .spec-table { font-size: 0.83rem; }
            .spec-table th, .spec-table td { padding: 10px 12px; }
            .stat-row { grid-template-columns: 1fr; }
            .feature-grid { grid-template-columns: 1fr; }
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
                    "email": "adam.henderson62464@gmail.com",
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
                "inLanguage": "<?php echo $lang; ?>",
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
        <div class="header-top">
            <a href="index.php" class="site-logo">
                <div class="logo-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L12 8M12 8L7 13M12 8L17 13" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 17C5 17 8 15 12 15C16 15 19 17 19 17" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="12" cy="4" r="2" fill="#fff" opacity="0.6"/>
                        <path d="M8 20C8 20 9.5 18 12 18C14.5 18 16 20 16 20" stroke="#fff" stroke-width="1.5" stroke-linecap="round" opacity="0.6"/>
                    </svg>
                </div>
                <?php echo $site_name; ?>
            </a>
            <div class="header-right">
                <nav class="site-nav">
                    <?php foreach ($nav_items as $file => $label): ?>
                        <a href="<?php echo $file; ?>"<?php echo ($current_page === $file) ? ' class="active"' : ''; ?>><?php echo $label; ?></a>
                    <?php endforeach; ?>
                </nav>
                <div class="lang-switch">
                    <a href="<?php echo $fr_link; ?>"<?php echo ($lang === 'fr') ? ' class="active-lang"' : ''; ?>>FR</a>
                    <a href="<?php echo $en_link; ?>"<?php echo ($lang === 'en') ? ' class="active-lang"' : ''; ?>>EN</a>
                    <a href="<?php echo $ar_link; ?>"<?php echo ($lang === 'ar') ? ' class="active-lang"' : ''; ?>>AR</a>
                </div>
                <button class="nav-toggle" aria-label="Menu" onclick="document.querySelector('.site-nav').classList.toggle('open')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main class="container">
