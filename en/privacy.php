<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Data Protection Policy — ConnectMaroc';
$page_description = 'Data Protection Policy of ConnectMaroc: how we handle visitor information, cookie usage, individual rights under GDPR and CCPA.';
$page_type = 'website';
$schema_type = 'WebSite';
$breadcrumbs = [
    ['name' => 'Home', 'url' => 'https://maroctelecomguide.world/en/index.php'],
    ['name' => 'Privacy', 'url' => 'https://maroctelecomguide.world/en/privacy.php'],
];

require '../_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Home</a><span class="sep">/</span><span>Data Protection Policy</span>
    </nav>

    <h1>Data Protection Policy</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Effective date: September 15, 2025
    </p>

    <p>This document explains how the ConnectMaroc website (hereafter referred to as "the Website" or "we") gathers, processes, and safeguards data associated with individuals who access its pages (hereafter "you" or "the visitor").</p>

    <h2>1. Data We Gather</h2>
    <p>The Website serves a purely informational purpose and does not ask visitors to create accounts or log in. The following technical data points may be recorded automatically:</p>
    <ul>
        <li>Network address (IP) of the visitor.</li>
        <li>Name and version of the web browser in use.</li>
        <li>Operating system running on the visitor's device.</li>
        <li>URLs of pages viewed and the timestamp of each visit.</li>
        <li>Address of the page that directed the visitor to us (referrer).</li>
    </ul>
    <p>These data points serve solely to maintain the Website's technical health and to compile anonymised traffic statistics.</p>

    <h2>2. Cookie Usage</h2>
    <p>The Website may set cookies that are strictly necessary for its operation. No advertising cookies, behavioural trackers, or third-party cookies are employed.</p>
    <ul>
        <li>A session token required for server-side functionality.</li>
        <li>Display preferences, where applicable.</li>
    </ul>
    <p>Blocking cookies in your browser will not prevent you from accessing any content on the Website.</p>

    <h2>3. How We Use the Information</h2>
    <ul>
        <li>Maintain the security and proper functioning of the Website.</li>
        <li>Generate aggregated, non-identifying traffic reports.</li>
        <li>Identify and resolve technical incidents.</li>
    </ul>
    <p>We neither sell nor share personal data with outside parties, unless a legal obligation compels disclosure.</p>

    <h2>4. Rights of Individuals Under GDPR</h2>
    <p>Visitors who reside in the European Union or the European Economic Area may exercise the following rights:</p>
    <ul>
        <li><strong>Access</strong> — obtain confirmation of whether personal data is being processed and request a copy.</li>
        <li><strong>Rectification</strong> — ask for inaccurate or incomplete data to be corrected.</li>
        <li><strong>Erasure</strong> — request the deletion of personal data held about you.</li>
        <li><strong>Restriction</strong> — limit the scope of processing under specific circumstances.</li>
        <li><strong>Portability</strong> — receive your data in a commonly used, machine-readable format.</li>
        <li><strong>Objection</strong> — oppose processing that is based on legitimate interest.</li>
    </ul>
    <p>To exercise any of these rights, contact: adam.henderson62464@gmail.com.</p>

    <h2>5. Rights of Individuals Under CCPA</h2>
    <p>If you are a California resident, the following provisions apply:</p>
    <ul>
        <li>You may ask which categories of data have been gathered about you.</li>
        <li>You may request that gathered data be deleted.</li>
        <li>You may direct us not to sell your data. Note: we do not engage in the sale of personal data.</li>
        <li>Exercising any of these rights will not result in discriminatory treatment.</li>
    </ul>
    <p>To exercise any of these rights, contact: adam.henderson62464@gmail.com.</p>

    <h2>6. Safeguarding Measures</h2>
    <p>We apply reasonable technical and organisational precautions to protect the data we handle. That said, no transmission method over the internet can be guaranteed to be entirely secure.</p>

    <h2>7. External Websites</h2>
    <p>The Website does not link to external websites. Should outbound links be introduced in the future, we accept no liability for the data-handling practices of those third-party destinations.</p>

    <h2>8. Revisions to This Policy</h2>
    <p>We may update this Data Protection Policy from time to time. The most recent version will always be published on this page.</p>

    <h2>9. How to Reach Us</h2>
    <p>For enquiries related to this policy or your personal data, write to: adam.henderson62464@gmail.com.</p>
</article>

<?php require '../_footer.php'; ?>
