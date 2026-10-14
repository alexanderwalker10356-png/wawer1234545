<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Mobile Network in Morocco: Complete Overview — Telecom Maroc Guide';
$page_description = 'Complete overview of mobile telecommunications in Morocco: market history, operators, technologies and standards, regional coverage.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Mobile Network in Morocco: Complete Overview';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://maroctelecomguide.world/en/index.php'],
];

require '../_header.php';
?>

<div class="hero">
    <div class="hero-inner">
        <div class="hero-text">
            <h1>Mobile Network in Morocco</h1>
            <p>Comprehensive informational guide to operators, technologies and coverage of mobile telecommunications in Morocco.</p>
        </div>
        <div class="hero-visual">
            <svg width="220" height="180" viewBox="0 0 220 180" fill="none">
                <rect x="95" y="20" width="30" height="120" rx="4" fill="rgba(255,255,255,0.08)"/>
                <rect x="100" y="30" width="20" height="100" rx="2" fill="rgba(16,185,129,0.3)"/>
                <circle cx="110" cy="18" r="6" fill="#10b981" opacity="0.8"/>
                <circle cx="110" cy="18" r="14" stroke="#10b981" stroke-width="1.5" opacity="0.4"/>
                <circle cx="110" cy="18" r="24" stroke="#10b981" stroke-width="1" opacity="0.2"/>
                <circle cx="110" cy="18" r="36" stroke="#10b981" stroke-width="0.5" opacity="0.1"/>
                <path d="M60 150 Q85 130 110 140 Q135 150 160 130" stroke="rgba(212,168,67,0.4)" stroke-width="2" fill="none"/>
                <path d="M40 160 Q80 140 110 150 Q140 160 180 140" stroke="rgba(212,168,67,0.2)" stroke-width="2" fill="none"/>
                <rect x="30" y="148" width="16" height="22" rx="3" fill="rgba(255,255,255,0.06)"/>
                <rect x="55" y="152" width="12" height="18" rx="2" fill="rgba(255,255,255,0.06)"/>
                <rect x="155" y="144" width="18" height="26" rx="3" fill="rgba(255,255,255,0.06)"/>
                <rect x="180" y="150" width="14" height="20" rx="2" fill="rgba(255,255,255,0.06)"/>
                <path d="M85 85 L72 95 M135 80 L148 90" stroke="rgba(16,185,129,0.35)" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M90 65 L76 72 M130 60 L144 67" stroke="rgba(16,185,129,0.25)" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </div>
    </div>
</div>

</main>
<main class="container">
<article>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Updated: October 2026
    </p>

    <p>Morocco ranks among the most advanced African countries in terms of telecommunications infrastructure. The kingdom has a population of approximately 37 million, with a mobile penetration rate exceeding 130%, meaning the number of active SIM cards significantly surpasses the total population.</p>

    <div class="stat-row">
        <div class="stat-box">
            <div class="stat-number">37M</div>
            <div class="stat-label">Population</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">130%+</div>
            <div class="stat-label">Mobile penetration</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">3</div>
            <div class="stat-label">Operators</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">4G/5G</div>
            <div class="stat-label">Technologies</div>
        </div>
    </div>

    <h2>Telecom Market History</h2>

    <p>The Moroccan telecommunications market has undergone a profound transformation over the past three decades. Until the late 1990s, the sector was entirely state-controlled. The decisive milestone was the 1998 reform, which introduced the liberalization law and established an independent regulator: the National Telecommunications Regulatory Agency (ANRT).</p>

    <p>The first and sole operator at the time was Maroc Telecom, formed from the state monopoly. In 1999, a portion of its shares was acquired by an international investor, marking the beginning of privatization. In 2000, the second mobile licence was granted to Medi Telecom, later rebranded as Orange Maroc. The third operator, Wana Corporate, operating under the Inwi brand, obtained its licence in 2009.</p>

    <h2>Major Operators</h2>

    <div class="card-grid">
        <div class="card">
            <div class="card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2" stroke-linecap="round"><path d="M12 2v4M12 10v4M12 18v4"/><path d="M4 8h16"/><path d="M6 16h12"/></svg>
            </div>
            <h3>Maroc Telecom</h3>
            <p>The largest operator in the country, heir to the state postal and telegraph service. Most extensive infrastructure, present in all regions including remote rural areas.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>4G Coverage</span><span style="font-weight:600;color:var(--c-primary);">&gt; 90%</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:90%"></div></div>
            </div>
        </div>
        <div class="card">
            <div class="card-icon" style="background:#fff3e0;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e65100" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
            </div>
            <h3>Orange Maroc</h3>
            <p>Second operator, member of the international Orange group. Network covering all major cities and transport corridors. Active development of 4G and digital services.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>4G Coverage</span><span style="font-weight:600;color:#e65100;">&gt; 85%</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:85%;background:linear-gradient(90deg,#f57c00,#e65100);"></div></div>
            </div>
        </div>
        <div class="card">
            <div class="card-icon" style="background:#f3e5f5;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7b1fa2" stroke-width="2" stroke-linecap="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <h3>Inwi</h3>
            <p>The most recent of the three operators, owned by the Al Mada group. Significant coverage in urban and tourist areas despite a later market entry.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>4G Coverage</span><span style="font-weight:600;color:#7b1fa2;">&gt; 75%</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:75%;background:linear-gradient(90deg,#9c27b0,#7b1fa2);"></div></div>
            </div>
        </div>
    </div>

    <h2>Technologies and Standards</h2>

    <p>Morocco has successively deployed all major generations of mobile networks. GSM (2G) networks were established in the 1990s, the transition to 3G occurred in 2007-2008, and commercial 4G LTE networks launched in 2015.</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="2" y="6" width="20" height="14" rx="2"/><path d="M6 10v6M10 8v8M14 10v6M18 12v4"/></svg>
            </div>
            <div>
                <h4>2G — GSM</h4>
                <p>900 / 1800 MHz — nationwide coverage</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M2 20h20M6 16h12M10 12h4"/></svg>
            </div>
            <div>
                <h4>3G — UMTS / HSPA+</h4>
                <p>2100 MHz — populated areas</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>4G — LTE / LTE-A</h4>
                <p>800 / 1800 / 2600 MHz — cities and highways</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>5G — NR</h4>
                <p>3500 / 700 MHz — pilot projects</p>
            </div>
        </div>
    </div>

    <div class="info-box">
        <p>Morocco uses European standards: GSM 900/1800 MHz for 2G, UMTS 2100 MHz for 3G, and 800/1800/2600 MHz bands for LTE. This ensures compatibility with most devices sold in Europe and Asia.</p>
    </div>

    <h2>Regional Coverage</h2>

    <p>The densest infrastructure is concentrated along the Atlantic coast, in the regions of Casablanca-Settat, Rabat-Sale-Kenitra, and Tangier-Tetouan-Al Hoceima. All three operators provide stable 4G coverage with high throughput in these areas.</p>

    <p>Interior regions — Fez-Meknes, Marrakech-Safi, Beni Mellal-Khenifra — also have 4G coverage, though in smaller settlements it may be limited to 3G. Southern and eastern regions are primarily served by 2G and 3G networks.</p>

    <p>Tourist destinations — Marrakech, Agadir, Chefchaouen, Fez, Essaouira — enjoy stable 4G coverage from all operators. 4G coverage is also available at international airports: Mohammed V (Casablanca), Marrakech-Menara, and Tangier Ibn Battuta.</p>
</article>

<?php require '../_footer.php'; ?>
