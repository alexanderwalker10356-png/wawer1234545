<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Frequently Asked Questions About Telecoms in Morocco — ConnectMaroc';
$page_description = 'Answers to common questions about mobile telecoms in Morocco: phone compatibility, eSIM, emergency numbers, roaming, number format and rural connectivity.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Frequently Asked Questions About Telecoms in Morocco';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://lamtelmorocco.world/en/index.php'],
    ['name' => 'FAQ', 'url' => 'https://lamtelmorocco.world/en/faq.php'],
];

require '../_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Home</a><span class="sep">/</span><span>FAQ</span>
    </nav>

    <h1>Frequently Asked Questions About Telecoms in Morocco</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Updated: October 2026
    </p>

    <p>Below you will find answers to the questions most commonly raised by visitors and residents regarding mobile telecommunications in Morocco.</p>

    <h2>Phone Compatibility</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>
            </div>
            <div>
                <h4>Will my phone work in Morocco?</h4>
                <p>Morocco employs the same GSM/UMTS/LTE standards used across Europe, the Middle East, and most of Asia. Phones manufactured for those regions will work without any modification. Devices sold in the Americas should support LTE bands 3, 7, and 20 — check your handset's specification sheet before travelling.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            </div>
            <div>
                <h4>How do I unlock my phone for use abroad?</h4>
                <p>Contact your home carrier and request a network unlock before you leave. Most operators will release the lock free of charge once the device's instalment plan is complete. Without an unlock, a Moroccan SIM card will be rejected by the handset.</p>
            </div>
        </div>
    </div>

    <h2>eSIM</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="2" y="6" width="20" height="12" rx="2"/><path d="M6 10h4v4H6z"/><path d="M14 10h4"/><path d="M14 14h4"/></svg>
            </div>
            <div>
                <h4>Is eSIM available in Morocco?</h4>
                <p>Moroccan operators have started rolling out eSIM support for compatible devices. Availability varies by carrier and may depend on the type of account. You can set up an eSIM by scanning a QR code provided at an operator's retail location or through their application, provided your device is unlocked and eSIM-capable.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            </div>
            <div>
                <h4>Which phones support eSIM?</h4>
                <p>Recent iPhones (XS onward), Google Pixel (3a onward), Samsung Galaxy (S20 onward), and selected Motorola, Huawei, and Xiaomi models. Always verify that your specific variant (regional hardware editions can differ) includes eSIM hardware.</p>
            </div>
        </div>
    </div>

    <h2>Wi-Fi Calling</h2>

    <div class="info-box">
        <p>Wi-Fi calling allows your phone to route voice calls over a wireless internet connection instead of the cellular network. Support in Morocco depends on your home operator's agreements. If your carrier has enabled Wi-Fi calling internationally, it should work from any Moroccan Wi-Fi network. Check your device settings under "Phone" or "Connections" to confirm the feature is active.</p>
    </div>

    <h2>Emergency Numbers</h2>

    <p>Morocco's emergency services are reachable from any phone — including those without a SIM card — by dialling the numbers listed below.</p>

    <table class="spec-table">
        <thead>
            <tr><th>Number</th><th>Service</th><th>Notes</th></tr>
        </thead>
        <tbody>
            <tr><td><strong>15</strong></td><td>SAMU (medical emergencies)</td><td>Ambulance dispatch and urgent medical assistance</td></tr>
            <tr><td><strong>19</strong></td><td>Police (Surete Nationale)</td><td>Urban law enforcement; operates in cities and towns</td></tr>
            <tr><td><strong>177</strong></td><td>Gendarmerie Royale</td><td>Rural law enforcement and highway patrol</td></tr>
            <tr><td><strong>150</strong></td><td>Fire brigade (Protection Civile)</td><td>Fire, rescue and natural disaster response</td></tr>
            <tr><td><strong>112</strong></td><td>European-standard emergency</td><td>Redirects to local services; works from any GSM phone</td></tr>
        </tbody>
    </table>

    <h2>Rural and Remote Connectivity</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M18 10h-4V4h-4v6H6l6 8 6-8z"/><path d="M4 20h16"/></svg>
            </div>
            <div>
                <h4>What signal can I expect in rural Morocco?</h4>
                <p>Large parts of the Atlas Mountains, the eastern borderlands, and the Saharan south are served only by 2G (GSM), with 3G available along main roads and in market towns. 4G coverage thins out rapidly beyond the coast and the inland urban centres.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0114.08 0M1.42 9a16 16 0 0121.16 0M8.53 16.11a6 6 0 016.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>Is satellite internet an option?</h4>
                <p>Satellite-based broadband services are gradually reaching the Moroccan market, though regulatory approval and availability are still evolving. For most travellers, a Moroccan SIM on the dominant local carrier will provide the most reliable connectivity outside cities.</p>
            </div>
        </div>
    </div>

    <h2>Number Format</h2>

    <div class="info-box">
        <p>Morocco's international dialling code is <strong>+212</strong>. Domestic mobile numbers are ten digits long, beginning with 06 or 07. When calling from abroad, drop the leading zero: a number such as 06 12 34 56 78 becomes +212 6 12 34 56 78. Landline numbers start with 05.</p>
    </div>

    <h2>Roaming</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            </div>
            <div>
                <h4>Will my home SIM card roam in Morocco?</h4>
                <p>Almost certainly. Morocco's three carriers maintain roaming agreements with hundreds of operators worldwide. Your phone will automatically register on a local network when it detects a signal. Enable "Data Roaming" in your settings if you need mobile data.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
            </div>
            <div>
                <h4>Which network generation is available while roaming?</h4>
                <p>2G roaming is available nationwide. 3G roaming covers cities and highways. 4G roaming depends on the specific bilateral agreement between your home carrier and the Moroccan host network. VoLTE roaming is supported by only a handful of operator pairs.</p>
            </div>
        </div>
    </div>

    <h2>Other Common Questions</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <div>
                <h4>Can I use VoIP apps (WhatsApp calls, FaceTime, etc.)?</h4>
                <p>VoIP applications function over Moroccan mobile data and Wi-Fi networks. WhatsApp, Telegram, and similar messaging platforms are widely used throughout the country.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0112 2a8 8 0 018 8.2c0 7.3-8 11.8-8 11.8z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
                <h4>Is public Wi-Fi common?</h4>
                <p>Free Wi-Fi is available in most hotels, riads, cafes, and airport terminals. Quality varies; for a reliable connection, a local SIM card with a data allowance is the safer bet.</p>
            </div>
        </div>
    </div>
</article>

<?php require '../_footer.php'; ?>
