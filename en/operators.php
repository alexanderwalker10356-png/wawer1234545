<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Morocco\'s Mobile Network Operators — ConnectMaroc';
$page_description = 'Detailed profiles of Morocco\'s three mobile operators: Maroc Telecom, Orange Maroc and Inwi — background, network reach and technical capabilities.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Morocco\'s Mobile Network Operators';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://maroctelecomguide.world/en/index.php'],
    ['name' => 'Operators', 'url' => 'https://maroctelecomguide.world/en/operators.php'],
];

require '../_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Home</a><span class="sep">/</span><span>Operators</span>
    </nav>

    <h1>Morocco's Mobile Network Operators</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Updated: October 2026
    </p>

    <p>Three carriers divide Morocco's mobile landscape. Each has developed its own network footprint, technical profile, and strategic focus over more than two decades of market competition.</p>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-iam">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M12 2v4M12 10v4M12 18v4"/><path d="M4 8h16"/><path d="M6 16h12"/></svg>
            </span>
            Maroc Telecom
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">Key Facts</th></tr></thead>
            <tr><th>Established</th><td>1998 (successor to the national postal and telegraph service, operational since 1956)</td></tr>
            <tr><th>Ownership</th><td>Etisalat Group (controlling stake), Government of Morocco</td></tr>
            <tr><th>Network standards</th><td>2G (GSM 900/1800), 3G (UMTS 2100), 4G LTE (800/1800/2600 MHz), 5G experimental</td></tr>
            <tr><th>4G population reach</th><td>Above 90%</td></tr>
        </table>

        <p>As the direct descendant of Morocco's state-run telecommunications monopoly, Maroc Telecom carries the legacy of the country's earliest telephone and telegraph lines. When the 1998 liberalisation statute restructured the sector, the operator was reconstituted as a publicly traded corporation and later saw a portion of its equity acquired by the UAE-based Etisalat group.</p>

        <p>No other Moroccan carrier matches its geographic reach. Maroc Telecom's base stations span the High Atlas passes, the arid plateaux east of the Moulouya, and the coastal strips of the Saharan provinces. Its 4G LTE grid blankets every sizeable town and major road artery in the kingdom.</p>

        <p>The firm is currently running experimental 5G NR equipment in parts of Casablanca and the capital, Rabat. In addition to wireless services, it operates Morocco's largest fixed-line telephony and broadband backbone.</p>
    </div>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-orange">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
            </span>
            Orange Maroc
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">Key Facts</th></tr></thead>
            <tr><th>Established</th><td>2000 (originally Medi Telecom; rebranded as Orange Maroc in 2016)</td></tr>
            <tr><th>Ownership</th><td>Orange S.A. (France), Atlas Merchant Capital</td></tr>
            <tr><th>Network standards</th><td>2G (GSM 900/1800), 3G (UMTS 2100), 4G LTE (800/1800/2600 MHz), 5G trials</td></tr>
            <tr><th>4G population reach</th><td>Above 85%</td></tr>
        </table>

        <p>Orange Maroc began operations in 2000 under the Medi Telecom banner, representing the first credible challenge to the incumbent monopoly. Initially backed by Spanish and Moroccan investors, the company transitioned to the French Orange group's control in 2010 and completed its full rebrand six years later.</p>

        <p>Its network strategy has concentrated on the Atlantic corridor and high-density metropolitan zones. Residents of Casablanca, Rabat, Marrakech, Fez, Tangier, Agadir, Meknes, and numerous secondary cities can access its 4G services.</p>

        <p>Recent investments have focused on deploying Carrier Aggregation across congested cells, combining multiple LTE bands to deliver higher throughput during peak hours.</p>
    </div>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-inwi">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </span>
            Inwi
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">Key Facts</th></tr></thead>
            <tr><th>Established</th><td>2009 (mobile licence; parent Wana Corporate formed in 2007)</td></tr>
            <tr><th>Ownership</th><td>Al Mada (Moroccan investment holding company)</td></tr>
            <tr><th>Network standards</th><td>2G (GSM 900/1800), 3G (UMTS 2100), 4G LTE (800/1800/2600 MHz), 5G trials</td></tr>
            <tr><th>4G population reach</th><td>Above 75%</td></tr>
        </table>

        <p>Inwi is the most recently licensed mobile operator in Morocco. Its parent entity, Wana Corporate, had previously offered fixed wireless broadband built on CDMA technology before obtaining a full mobile licence in 2009.</p>

        <p>Although it entered the race almost a decade after its rivals, Inwi expanded its user base quickly by concentrating resources on the most densely inhabited regions: Casablanca-Settat, Rabat-Sale-Kenitra, Marrakech-Safi, and Tangier-Tetouan-Al Hoceima.</p>

        <p>Outside those metropolitan clusters, Inwi's reach is largely confined to 3G. The company is participating in the ANRT-supervised 5G testing programme alongside its two competitors.</p>
    </div>

    <h2>Side-by-Side Overview</h2>

    <table class="spec-table">
        <thead>
            <tr><th>Criterion</th><th>Maroc Telecom</th><th>Orange Maroc</th><th>Inwi</th></tr>
        </thead>
        <tbody>
            <tr><td>Launch year</td><td>1998</td><td>2000</td><td>2009</td></tr>
            <tr><td>2G (GSM)</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td></tr>
            <tr><td>3G (UMTS)</td><td>2100 MHz</td><td>2100 MHz</td><td>2100 MHz</td></tr>
            <tr><td>4G LTE</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td></tr>
            <tr><td>4G population reach</td><td>&gt; 90%</td><td>&gt; 85%</td><td>&gt; 75%</td></tr>
            <tr><td>5G status</td><td>Experimental zones</td><td>Lab and field trials</td><td>Lab and field trials</td></tr>
            <tr><td>Rural footprint</td><td>Widest</td><td>Moderate</td><td>Narrow</td></tr>
        </tbody>
    </table>
</article>

<?php require '../_footer.php'; ?>
