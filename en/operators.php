<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Mobile Operators in Morocco — Telecom Maroc Guide';
$page_description = 'Overview of mobile operators in Morocco: Maroc Telecom, Orange Maroc and Inwi — history, coverage, technologies and network characteristics.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Mobile Operators in Morocco';
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

    <h1>Mobile Operators in Morocco</h1>
    <p class="last-updated">Updated: October 2026</p>

    <p>Morocco's mobile market has been structured around three operators for over two decades. Each occupies its own niche, with its own network infrastructure and coverage area. Below are the detailed characteristics of each operator.</p>

    <div class="operator-section">
        <h2>Maroc Telecom (Itissalat al-Maghrib)</h2>
        <table class="spec-table">
            <tr><th>Founded</th><td>1998 (from the state operator active since 1956)</td></tr>
            <tr><th>Shareholder</th><td>Etisalat Group (majority), Kingdom of Morocco</td></tr>
            <tr><th>Technologies</th><td>2G (GSM 900/1800), 3G (UMTS 2100), 4G LTE (800/1800/2600 MHz), 5G pilot</td></tr>
            <tr><th>4G Coverage</th><td>Over 90% of population</td></tr>
        </table>
        <p>Maroc Telecom is historically the first and largest telecommunications operator in Morocco. The company traces its origins to the state postal and telegraph service, established since the country's independence. Following the 1998 reform, the operator was restructured as a joint-stock company and subsequently partially privatized.</p>
        <p>Today, Maroc Telecom has the most extensive network infrastructure in the country. Its base stations are installed even in the hard-to-reach mountain areas of the Atlas and on the fringes of the Sahara, where other operators have only a spotty presence. The 4G LTE network is deployed across all large and medium cities, as well as along the main highways connecting Casablanca, Rabat, Fez, Marrakech, Tangier, and Agadir.</p>
        <p>The company actively participates in 5G pilot projects, conducting tests in Casablanca and Rabat. Beyond mobile services, Maroc Telecom owns an extensive fixed-line network and is the country's leading internet provider. The operator has also expanded across the African continent by acquiring telecommunications companies in several West and Central African countries.</p>
    </div>

    <div class="operator-section">
        <h2>Orange Maroc</h2>
        <table class="spec-table">
            <tr><th>Founded</th><td>2000 (as Médi Télécom, rebranded Orange Maroc in 2016)</td></tr>
            <tr><th>Shareholder</th><td>Orange S.A. (France), Atlas Merchant Capital</td></tr>
            <tr><th>Technologies</th><td>2G (GSM 900/1800), 3G (UMTS 2100), 4G LTE (800/1800/2600 MHz), 5G testing</td></tr>
            <tr><th>4G Coverage</th><td>Over 85% of population</td></tr>
        </table>
        <p>Orange Maroc entered the market in 2000 under the name Médi Télécom, becoming the first competitor to the state monopoly. The company was founded by Spanish and Moroccan investors before control passed to the French group Orange in 2010, followed by a rebrand.</p>
        <p>The operator focused network development on the Atlantic coast and major urban areas. 4G coverage is available in Casablanca, Rabat, Marrakech, Fez, Tangier, Agadir, Meknes, and dozens of other cities. Major road links between these centres also benefit from fourth-generation connectivity.</p>
        <p>Orange Maroc invests in backbone network modernization and LTE capacity expansion in densely populated areas. The company uses Carrier Aggregation technology to increase throughput in high-density subscriber zones. In rural areas, coverage is provided mainly by 2G and 3G networks, though the operator is gradually extending LTE beyond cities.</p>
    </div>

    <div class="operator-section">
        <h2>Inwi</h2>
        <table class="spec-table">
            <tr><th>Founded</th><td>2009 (mobile licence; Wana Corporate established in 2007)</td></tr>
            <tr><th>Shareholder</th><td>Al Mada (Moroccan investment holding)</td></tr>
            <tr><th>Technologies</th><td>2G (GSM 900/1800), 3G (UMTS 2100), 4G LTE (800/1800/2600 MHz), 5G testing</td></tr>
            <tr><th>4G Coverage</th><td>Over 75% of population</td></tr>
        </table>
        <p>Inwi is the youngest mobile operator in Morocco, entering the market in 2009 after obtaining the third mobile licence. Previously, parent company Wana Corporate provided fixed-line and wireless internet services based on CDMA technology.</p>
        <p>Despite its late arrival, Inwi rapidly grew its subscriber base and infrastructure. The operator targets urban markets, concentrating investment in the most populated regions: Casablanca-Settat, Rabat-Salé-Kénitra, Marrakech-Safi, and Tangier-Tetouan-Al Hoceima. In these regions, Inwi's 4G network delivers competitive coverage quality.</p>
        <p>In less populated southern and eastern regions, Inwi's coverage is limited mainly to 3G networks, with selective LTE presence in provincial capitals. The operator compensates for its smaller territorial reach through active network capacity development in cities and investment in high-speed mobile internet. Inwi also participates in 5G testing programs supervised by the ANRT regulator.</p>
    </div>

    <h2>Operator Comparison</h2>
    <table class="spec-table">
        <thead>
            <tr><th>Parameter</th><th>Maroc Telecom</th><th>Orange Maroc</th><th>Inwi</th></tr>
        </thead>
        <tbody>
            <tr><td>Year launched</td><td>1998</td><td>2000</td><td>2009</td></tr>
            <tr><td>2G (GSM)</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td></tr>
            <tr><td>3G (UMTS)</td><td>2100 MHz</td><td>2100 MHz</td><td>2100 MHz</td></tr>
            <tr><td>4G LTE</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td></tr>
            <tr><td>4G Coverage</td><td>&gt; 90%</td><td>&gt; 85%</td><td>&gt; 75%</td></tr>
            <tr><td>5G (status)</td><td>Pilot zones</td><td>Testing</td><td>Testing</td></tr>
            <tr><td>Rural coverage</td><td>Most extensive</td><td>Moderate</td><td>Limited</td></tr>
        </tbody>
    </table>
</article>

<?php require '../_footer.php'; ?>
