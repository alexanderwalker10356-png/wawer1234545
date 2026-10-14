<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Mobile Infrastructure and Standards in Morocco — ConnectMaroc';
$page_description = 'Detailed look at Morocco\'s mobile infrastructure: 2G/3G/4G/5G frequency bands, international standards, roaming and connectivity.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Mobile Infrastructure and Standards in Morocco';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://maroctelecomguide.world/en/index.php'],
    ['name' => 'Technologies', 'url' => 'https://maroctelecomguide.world/en/technology.php'],
];

require '../_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Home</a><span class="sep">/</span><span>Technologies</span>
    </nav>

    <h1>Mobile Infrastructure and Standards in Morocco</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Updated: October 2026
    </p>

    <p>Morocco's wireless networks are built on globally recognised protocols, which means almost any handset manufactured for the European, Middle Eastern, or African market will function seamlessly inside the kingdom.</p>

    <h2>2G — GSM</h2>

    <p>The second-generation network was the first digital mobile system deployed in Morocco, going live during the mid-1990s. It continues to serve as the foundational layer of national wireless connectivity. Two frequency ranges are in use:</p>

    <table class="spec-table">
        <thead><tr><th>Spectrum band</th><th>Frequency range</th><th>Role</th></tr></thead>
        <tbody>
            <tr><td>GSM 900</td><td>890 – 960 MHz</td><td>Backbone band offering long range and strong building penetration</td></tr>
            <tr><td>GSM 1800</td><td>1710 – 1880 MHz</td><td>Capacity band deployed in densely populated areas</td></tr>
        </tbody>
    </table>

    <p>Voice calls and SMS messages travel over these GSM channels throughout Morocco, from the Mediterranean coastline down to the remote valleys of the Anti-Atlas.</p>

    <h2>3G — UMTS / HSPA+</h2>

    <p>Third-generation connectivity arrived in Morocco in 2007, employing the UMTS protocol on the 2100 MHz band (3GPP Band 1). Successive upgrades have lifted maximum data rates considerably:</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6M9 13h4"/></svg>
            </div>
            <div>
                <h4>UMTS (Release 99)</h4>
                <p>First rollout — peak throughput around 384 Kbit/s</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>HSDPA</h4>
                <p>Enhanced downlink — ceiling near 14.4 Mbit/s</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>HSPA+</h4>
                <p>Dual-carrier mode — theoretical limit of 42 Mbit/s</p>
            </div>
        </div>
    </div>

    <p>3G currently blankets the majority of inhabited areas and acts as the primary fallback layer whenever a device moves beyond 4G range.</p>

    <h2>4G — LTE / LTE-Advanced</h2>

    <p>Morocco's three carriers launched commercial LTE service in April 2015. Each holds licences across three frequency bands:</p>

    <table class="spec-table">
        <thead><tr><th>Frequency</th><th>3GPP designation</th><th>Properties</th></tr></thead>
        <tbody>
            <tr><td>800 MHz</td><td>Band 20</td><td>Low-frequency spectrum with deep penetration and wide reach. Ideal for suburban and rural deployment.</td></tr>
            <tr><td>1800 MHz</td><td>Band 3</td><td>Mid-frequency spectrum balancing capacity against range. The workhorse LTE band in most cities.</td></tr>
            <tr><td>2600 MHz</td><td>Band 7</td><td>High-frequency spectrum delivering maximum throughput within a shorter radius. Aimed at crowded venues and dense business districts.</td></tr>
        </tbody>
    </table>

    <p>By aggregating two or three of these bands simultaneously (Carrier Aggregation), operators can push real-world download speeds to between 100 and 150 Mbit/s in major metropolitan centres.</p>

    <div class="info-box">
        <p>LTE-Advanced Pro — sometimes marketed as 4.5G — is progressively being switched on, raising peak capacity and trimming latency. Pilot cells are already active in parts of Casablanca and Rabat.</p>
    </div>

    <h2>5G — Where Things Stand</h2>

    <p>Fifth-generation wireless is still in its infancy in Morocco. The ANRT has set aside spectrum for NR trials, centred on three bands:</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M2 20h20M6 16h12M10 12h4M12 8V4"/></svg>
            </div>
            <div>
                <h4>3.5 GHz (n78)</h4>
                <p>Core mid-band for metropolitan 5G buildout</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M1.42 9a16 16 0 0 1 21.16 0M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-accent)"/></svg>
            </div>
            <div>
                <h4>700 MHz (n28)</h4>
                <p>Sub-1 GHz layer for broad rural and indoor reach</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>26 GHz (n258)</h4>
                <p>Millimetre-wave spectrum for extreme bandwidth in localised cells</p>
            </div>
        </div>
    </div>

    <p>Experimental sites are active in Casablanca's financial district and the administrative quarter of Rabat. A phased commercial launch is anticipated as the regulatory framework matures.</p>

    <h2>Roaming for Incoming Visitors</h2>

    <p>Morocco participates in the worldwide GSM roaming framework. All three domestic operators hold bilateral agreements with hundreds of foreign networks.</p>

    <h3>What Happens on Arrival</h3>

    <p>As soon as a visitor's device powers on in Morocco, it searches for a compatible network and registers automatically. Because the kingdom's frequency plan mirrors European conventions, handsets sourced from Europe, the Middle East, or Asia rarely encounter compatibility problems.</p>

    <h3>Layer-by-Layer Availability</h3>

    <ul>
        <li>2G (GSM) roaming — operational across virtually the entire national territory.</li>
        <li>3G (UMTS) roaming — available in cities, towns, and along principal highways.</li>
        <li>4G (LTE) roaming — depends on the bilateral agreement between the home and visited operator.</li>
        <li>VoLTE roaming — supported by a limited number of operator pairs.</li>
    </ul>

    <div class="info-box">
        <p>To roam successfully, activate "Data Roaming" in your device settings and leave network selection set to automatic. Manual selection can lock you onto a network that does not have a roaming agreement with your home carrier.</p>
    </div>

    <h2>Complete Frequency Reference</h2>

    <table class="spec-table">
        <thead>
            <tr><th>Generation</th><th>Protocol</th><th>Frequency</th><th>3GPP Band</th></tr>
        </thead>
        <tbody>
            <tr><td>2G</td><td>GSM</td><td>900 MHz</td><td>—</td></tr>
            <tr><td>2G</td><td>GSM</td><td>1800 MHz</td><td>—</td></tr>
            <tr><td>3G</td><td>UMTS / HSPA+</td><td>2100 MHz</td><td>Band 1</td></tr>
            <tr><td>4G</td><td>LTE</td><td>800 MHz</td><td>Band 20</td></tr>
            <tr><td>4G</td><td>LTE</td><td>1800 MHz</td><td>Band 3</td></tr>
            <tr><td>4G</td><td>LTE</td><td>2600 MHz</td><td>Band 7</td></tr>
            <tr><td>5G</td><td>NR</td><td>3500 MHz</td><td>n78</td></tr>
            <tr><td>5G</td><td>NR</td><td>700 MHz</td><td>n28</td></tr>
        </tbody>
    </table>
</article>

<?php require '../_footer.php'; ?>
