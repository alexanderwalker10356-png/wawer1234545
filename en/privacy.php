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
    <p class="last-updated">Effective date: September 15, 2025</p>

    <p>This Privacy Policy describes how the Telecom Maroc Guide website (hereinafter "the Site", "we") collects, uses, and protects information that users (hereinafter "you", "the user") provide when visiting the Site.</p>

    <h2>1. Information We Collect</h2>
    <p>The Site is an informational resource and does not require registration, account creation, or provision of personal data to access content. We may automatically collect the following technical information:</p>
    <ul>
        <li>Visitor's IP address.</li>
        <li>Browser type and version.</li>
        <li>Device operating system.</li>
        <li>Site pages visited and time of visit.</li>
        <li>Referrer URL.</li>
    </ul>
    <p>This information is used exclusively to ensure proper Site operation and to analyse traffic in aggregate form.</p>

    <h2>2. Cookies</h2>
    <p>The Site may use technically necessary cookies to ensure proper operation. We do not use advertising cookies, tracking cookies, or third-party cookies.</p>
    <p>Technically necessary cookies may include:</p>
    <ul>
        <li>Session identifier for proper server-side operation.</li>
        <li>Display settings (where applicable).</li>
    </ul>
    <p>You can disable cookies in your browser settings. Disabling cookies will not affect access to the Site's content.</p>

    <h2>3. Use of Information</h2>
    <p>Collected technical information may be used to:</p>
    <ul>
        <li>Ensure the functionality and security of the Site.</li>
        <li>Analyse traffic in aggregate form.</li>
        <li>Detect and prevent technical issues.</li>
    </ul>
    <p>We do not sell, transfer, or disclose personal data to third parties, except as required by law.</p>

    <h2>4. User Rights Under GDPR</h2>
    <p>If you are a resident of the European Union or the European Economic Area, you have the following rights regarding your personal data:</p>
    <ul>
        <li><strong>Right of access</strong> — you may request information about what data about you is being processed.</li>
        <li><strong>Right to rectification</strong> — you may request correction of inaccurate data.</li>
        <li><strong>Right to erasure</strong> — you may request deletion of your personal data.</li>
        <li><strong>Right to restriction of processing</strong> — you may request limitation of processing of your data in certain cases.</li>
        <li><strong>Right to data portability</strong> — you may request your data in a structured format.</li>
        <li><strong>Right to object</strong> — you may object to the processing of your data.</li>
    </ul>
    <p>To exercise these rights, send your request to adam.henderson62464@gmail.com.</p>

    <h2>5. User Rights Under CCPA</h2>
    <p>If you are a resident of the State of California (USA), the California Consumer Privacy Act (CCPA) grants you the following rights:</p>
    <ul>
        <li>Right to know what categories of personal data are collected and for what purpose.</li>
        <li>Right to deletion of collected personal data.</li>
        <li>Right to opt out of the sale of personal data. We do not sell personal data.</li>
        <li>Right to non-discrimination in exercising your rights.</li>
    </ul>
    <p>To exercise these rights, send your request to adam.henderson62464@gmail.com.</p>

    <h2>6. Data Protection</h2>
    <p>We take reasonable technical and organizational measures to protect the information we process. However, no method of data transmission over the Internet or electronic storage method is completely secure.</p>

    <h2>7. Links to Third-Party Resources</h2>
    <p>The Site does not contain links to third-party resources. Should such links be added in the future, we shall not be responsible for the privacy policies of third-party websites.</p>

    <h2>8. Changes to This Policy</h2>
    <p>We reserve the right to amend this Privacy Policy. The current version is always available on this page. The date of the last update is indicated at the beginning of the document.</p>

    <h2>9. Contact Information</h2>
    <p>For questions regarding this Privacy Policy, you may contact us by email: adam.henderson62464@gmail.com.</p>
</article>

<?php require '../_footer.php'; ?>
