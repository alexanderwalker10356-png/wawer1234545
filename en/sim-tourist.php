<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Getting a SIM Card in Morocco — Traveler\'s Guide — ConnectMaroc';
$page_description = 'Practical guide to obtaining a SIM card in Morocco: process, documents, APN configuration and tips for international visitors.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Getting a SIM Card in Morocco';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://maroctelecomguide.world/en/index.php'],
    ['name' => 'SIM', 'url' => 'https://maroctelecomguide.world/en/sim-tourist.php'],
];

require '../_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Home</a><span class="sep">/</span><span>SIM for Travelers</span>
    </nav>

    <h1>Getting a SIM Card in Morocco</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Updated: October 2026
    </p>

    <p>International visitors to Morocco can acquire a local SIM card within minutes of landing. The process is straightforward, but it does require a valid identity document. This page covers the essentials: where to go, what to bring, how to configure your device, and a few practical pointers for staying connected during your trip.</p>

    <h2>Where to Obtain a SIM Card</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <div>
                <h4>Airport Kiosks</h4>
                <p>All major international airports — Mohammed V (Casablanca), Marrakech-Menara, Tangier Ibn Battuta, Fez-Saiss, Agadir Al Massira — have operator booths in the arrivals hall, typically open for every incoming flight.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M3 3h18v18H3zM3 9h18M9 21V9"/></svg>
            </div>
            <div>
                <h4>Branded Retail Stores</h4>
                <p>Each carrier runs its own network of shops in city centres and shopping malls. Staff can assist with activation and APN setup on the spot.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12l2 2 4-4"/></svg>
            </div>
            <div>
                <h4>Authorised Resellers</h4>
                <p>Small independent phone shops ("telecabines") in virtually every town sell SIM cards for all three carriers. Look for the operator's signage outside.</p>
            </div>
        </div>
    </div>

    <h2>Required Documentation</h2>

    <div class="info-box">
        <p>Under Moroccan regulations, every SIM card must be registered to a verified identity. Visitors need to present a valid passport at the point of sale. The seller records the passport number and activates the card on the spot. No other paperwork is required.</p>
    </div>

    <h2>Registration and Activation Steps</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            </div>
            <div>
                <h4>Step 1 — Identity Check</h4>
                <p>Hand over your passport. The seller scans or photographs the data page for the operator's registration database.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>
            </div>
            <div>
                <h4>Step 2 — SIM Installation</h4>
                <p>Insert the SIM (nano, micro, or standard — multi-format cards are common). Power cycle the phone if prompted.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0114.08 0M1.42 9a16 16 0 0121.16 0M8.53 16.11a6 6 0 016.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>Step 3 — Connectivity</h4>
                <p>The SIM should register on the carrier's network automatically. If mobile data does not work, configure the APN manually (see below).</p>
            </div>
        </div>
    </div>

    <h2>APN Configuration</h2>

    <p>Most modern smartphones download the correct access-point settings over the air. If yours does not, enter the values from the table below in your phone's mobile-network or cellular-data settings.</p>

    <table class="spec-table">
        <thead><tr><th>Carrier</th><th>APN</th><th>Additional notes</th></tr></thead>
        <tbody>
            <tr><td>Maroc Telecom</td><td>internet1.iam</td><td>Leave username and password blank</td></tr>
            <tr><td>Orange Maroc</td><td>internet.orange.ma</td><td>Leave username and password blank</td></tr>
            <tr><td>Inwi</td><td>internet1.inwi.ma</td><td>Leave username and password blank</td></tr>
        </tbody>
    </table>

    <div class="info-box">
        <p>On iPhones, navigate to Settings &gt; Cellular &gt; Cellular Data Network. On Android, go to Settings &gt; Connections &gt; Mobile networks &gt; Access Point Names. Create a new APN entry and fill in the address shown above; other fields can remain at their defaults.</p>
    </div>

    <h2>eSIM Availability</h2>

    <p>Morocco's carriers have begun introducing eSIM support. An eSIM is a digital profile downloaded directly to a compatible device, eliminating the need for a physical card. Availability varies by operator, and not every plan or account type supports it yet.</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="2" y="6" width="20" height="12" rx="2"/><path d="M6 10h4v4H6z"/><path d="M14 10h4"/><path d="M14 14h4"/></svg>
            </div>
            <div>
                <h4>Device Compatibility</h4>
                <p>eSIM works on recent iPhones (XS and later), Google Pixel (3a and later), Samsung Galaxy (S20 and later), and selected other models. Confirm that your device is carrier-unlocked.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 11-7.78 7.78 5.5 5.5 0 017.78-7.78zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>
            </div>
            <div>
                <h4>Activation Process</h4>
                <p>Scan a QR code provided by the operator or enter the activation details manually in your phone's eSIM settings. A data connection (Wi-Fi) is required during setup.</p>
            </div>
        </div>
    </div>

    <h2>Practical Tips for Visitors</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0112 2a8 8 0 018 8.2c0 7.3-8 11.8-8 11.8z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
                <h4>Ensure Your Phone Is Unlocked</h4>
                <p>Devices locked to a home carrier will not accept a Moroccan SIM. Contact your home operator before travelling to request an unlock if needed.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            </div>
            <div>
                <h4>Band Compatibility</h4>
                <p>Morocco uses European-standard frequencies. Phones sold in North America should support bands 3, 7, and 20 for 4G — verify your model's specifications before departure.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </div>
            <div>
                <h4>Keep Your Passport Handy</h4>
                <p>You may need it again if you want to register a second SIM or if the operator's system requires reverification during your stay.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
            </div>
            <div>
                <h4>Top-Up Methods</h4>
                <p>Prepaid credit can be added via scratch cards sold at corner shops and kiosks, through the carrier's own mobile application, or at ATMs of major Moroccan banks.</p>
            </div>
        </div>
    </div>
</article>

<?php require '../_footer.php'; ?>
