<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'en';
$page_title = 'Privacy Policy — Telecom Maroc Guide';
$page_description = 'Privacy Policy of Telecom Maroc Guide: personal data processing, cookies, user rights, GDPR and CCPA.';
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
        <a href="index.php">Home</a><span class="sep">/</span><span>Privacy Policy</span>
    </nav>

    <h1>Privacy Policy</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Effective date: September 15, 2025
    </p>

    <p>This Privacy Policy describes how the Telecom Maroc Guide website (hereinafter "the Site", "we") collects, uses, and protects information that users (hereinafter "you") provide when visiting the Site.</p>

    <h2>1. Information We Collect</h2>
    <p>The Site is an informational resource and does not require registration or account creation. We may automatically collect the following technical information:</p>
    <ul>
        <li>Visitor's IP address.</li>
        <li>Browser type and version.</li>
        <li>Device operating system.</li>
        <li>Pages visited and time of visit.</li>
        <li>Referrer URL.</li>
    </ul>
    <p>This information is used exclusively to ensure proper Site operation and to analyse traffic in aggregate form.</p>

    <h2>2. Cookies</h2>
    <p>The Site may use technically necessary cookies. We do not use advertising, tracking, or third-party cookies.</p>
    <ul>
        <li>Session identifier for server-side operation.</li>
        <li>Display settings (where applicable).</li>
    </ul>
    <p>Disabling cookies will not affect access to the Site's content.</p>

    <h2>3. Use of Information</h2>
    <ul>
        <li>Ensure the functionality and security of the Site.</li>
        <li>Analyse traffic in aggregate form.</li>
        <li>Detect and prevent technical issues.</li>
    </ul>
    <p>We do not sell, transfer, or disclose personal data to third parties, except as required by law.</p>

    <h2>4. User Rights Under GDPR</h2>
    <p>If you are a resident of the European Union or the EEA:</p>
    <ul>
        <li><strong>Right of access</strong> — information about what data concerning you is being processed.</li>
        <li><strong>Right to rectification</strong> — correction of inaccurate data.</li>
        <li><strong>Right to erasure</strong> — deletion of your personal data.</li>
        <li><strong>Right to restriction of processing</strong> — limitation of processing in certain cases.</li>
        <li><strong>Right to data portability</strong> — data in a structured format.</li>
        <li><strong>Right to object</strong> — objection to the processing of your data.</li>
    </ul>
    <p>To exercise these rights: adam.henderson62464@gmail.com.</p>

    <h2>5. User Rights Under CCPA</h2>
    <p>If you are a resident of California:</p>
    <ul>
        <li>Right to know what categories of data are collected.</li>
        <li>Right to deletion of collected data.</li>
        <li>Right to opt out of the sale of data. We do not sell data.</li>
        <li>Right to non-discrimination.</li>
    </ul>
    <p>To exercise these rights: adam.henderson62464@gmail.com.</p>

    <h2>6. Data Protection</h2>
    <p>We take reasonable technical and organizational measures to protect the information we process. However, no method of data transmission over the Internet is completely secure.</p>

    <h2>7. Links to Third-Party Resources</h2>
    <p>The Site does not contain links to third-party resources. Should such links be added in the future, we shall not be responsible for the privacy policies of third-party websites.</p>

    <h2>8. Changes to This Policy</h2>
    <p>We reserve the right to amend this Privacy Policy. The current version is always available on this page.</p>

    <h2>9. Contact Information</h2>
    <p>For any questions: adam.henderson62464@gmail.com.</p>
</article>

<?php require '../_footer.php'; ?>
