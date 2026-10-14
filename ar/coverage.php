<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'تغطية الشبكة حسب الجهات في المغرب — Telecom Maroc Guide';
$page_description = 'نظرة تفصيلية على تغطية شبكات الهاتف المحمول عبر الجهات الاثنتي عشرة في المغرب: البنية التحتية والتقنيات المتاحة في كل منطقة.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'تغطية الشبكة حسب الجهات في المغرب';
$breadcrumbs = [
    ['name' => 'الرئيسية', 'url' => 'https://maroctelecomguide.world/ar/index.php'],
    ['name' => 'التغطية', 'url' => 'https://maroctelecomguide.world/ar/coverage.php'],
];

require '../_header.php';
?>
<style>article,article *{direction:rtl;text-align:right}article .spec-table th,article .spec-table thead th{text-align:right}article .breadcrumb{flex-direction:row-reverse}article ul,article ol{padding-right:24px;padding-left:0}article .card-grid{direction:ltr}article .card{direction:rtl;text-align:right}article .feature-grid{direction:ltr}article .feature-item{direction:rtl;text-align:right}article .stat-row{direction:ltr}article .stat-box{direction:rtl}article .hero-inner{flex-direction:row-reverse}article .hero-text{text-align:right}article .coverage-bar{direction:ltr}</style>

<article>
    <nav class="breadcrumb">
        <a href="index.php">الرئيسية</a><span class="sep">/</span><span>التغطية الجهوية</span>
    </nav>

    <h1>تغطية الشبكة حسب الجهات في المغرب</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        آخر تحديث: أكتوبر 2026
    </p>

    <p>ينقسم المغرب إداريًا إلى 12 جهة. يتفاوت مستوى التغطية الشبكية بشكل ملحوظ من جهة لأخرى، تبعًا للكثافة السكانية والبنية التحتية المتوفرة والتضاريس الجغرافية. نستعرض فيما يلي واقع التغطية في كل جهة.</p>

    <div class="stat-row">
        <div class="stat-box">
            <div class="stat-number">12</div>
            <div class="stat-label">جهة إدارية</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">4G</div>
            <div class="stat-label">في المدن الكبرى</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">2G/3G</div>
            <div class="stat-label">في المناطق النائية</div>
        </div>
    </div>

    <h2>الجهات الساحلية الأطلسية — التغطية الأعلى كثافة</h2>

    <div class="card-grid">
        <div class="card">
            <div class="card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 3v18"/></svg>
            </div>
            <h3>الدار البيضاء-سطات</h3>
            <p>القطب الاقتصادي للمملكة. يتمتع بأكثف تغطية 4G في البلاد من جميع المشغّلين الثلاثة، مع توفر تقنية LTE-Advanced وتجارب الجيل الخامس. يضم مطار محمد الخامس الدولي.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>مستوى التغطية</span><span style="font-weight:600;color:var(--c-primary);">ممتاز</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:98%"></div></div>
            </div>
        </div>
        <div class="card">
            <div class="card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2" stroke-linecap="round"><path d="M3 21h18M5 21V7l8-4 8 4v14"/><path d="M9 21v-6h6v6"/></svg>
            </div>
            <h3>الرباط-سلا-القنيطرة</h3>
            <p>العاصمة الإدارية والسياسية. تغطية 4G شاملة في المراكز الحضرية مع بنية تحتية متقدّمة. تتضمن تجارب 5G في الحي الإداري بالرباط.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>مستوى التغطية</span><span style="font-weight:600;color:var(--c-primary);">ممتاز</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:96%"></div></div>
            </div>
        </div>
        <div class="card">
            <div class="card-icon" style="background:#fff3e0;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e65100" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <h3>طنجة-تطوان-الحسيمة</h3>
            <p>بوابة المغرب شمالًا ونقطة العبور نحو أوروبا. تغطية 4G قوية في طنجة وتطوان والشريط الساحلي. تتوفر خدمة 3G في المناطق الجبلية بالريف.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>مستوى التغطية</span><span style="font-weight:600;color:#e65100;">جيد جدًا</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:88%;background:linear-gradient(90deg,#f57c00,#e65100);"></div></div>
            </div>
        </div>
    </div>

    <h2>الجهات الداخلية — تغطية متوسطة إلى جيدة</h2>

    <table class="spec-table">
        <thead>
            <tr><th>الجهة</th><th>التغطية في المدن</th><th>التغطية الريفية</th><th>التقنيات السائدة</th></tr>
        </thead>
        <tbody>
            <tr><td>فاس-مكناس</td><td>4G مستقرة</td><td>3G / 2G</td><td>LTE في فاس ومكناس وإفران، 3G في البلدات الصغيرة</td></tr>
            <tr><td>مراكش-آسفي</td><td>4G مستقرة</td><td>3G / 2G</td><td>LTE قوية في مراكش والصويرة وآسفي، 3G في الأطراف</td></tr>
            <tr><td>بني ملال-خنيفرة</td><td>4G متاحة</td><td>2G / 3G</td><td>LTE في المراكز الحضرية، 2G في المناطق الجبلية</td></tr>
            <tr><td>درعة-تافيلالت</td><td>4G جزئية</td><td>2G</td><td>LTE في الرشيدية وورزازات، 2G في الواحات والقرى</td></tr>
            <tr><td>الشرق</td><td>4G متاحة</td><td>2G / 3G</td><td>LTE في وجدة والناظور، 2G/3G في الشريط الحدودي</td></tr>
        </tbody>
    </table>

    <h2>الجهات الجنوبية — تغطية أساسية</h2>

    <table class="spec-table">
        <thead>
            <tr><th>الجهة</th><th>التغطية في المدن</th><th>التغطية الريفية</th><th>التقنيات السائدة</th></tr>
        </thead>
        <tbody>
            <tr><td>سوس-ماسة</td><td>4G مستقرة</td><td>3G / 2G</td><td>LTE في أكادير وتزنيت وتارودانت، 3G في المناطق الريفية</td></tr>
            <tr><td>كلميم-واد نون</td><td>3G / 4G جزئية</td><td>2G</td><td>LTE في كلميم، 2G/3G في باقي المنطقة</td></tr>
            <tr><td>العيون-الساقية الحمراء</td><td>4G متاحة</td><td>2G</td><td>LTE في مدينة العيون، 2G في المساحات الصحراوية الشاسعة</td></tr>
            <tr><td>الداخلة-وادي الذهب</td><td>4G جزئية</td><td>2G</td><td>LTE في مدينة الداخلة، تغطية محدودة خارجها</td></tr>
        </tbody>
    </table>

    <div class="info-box">
        <p>يتمتع اتصالات المغرب بالتغطية الأوسع في المناطق الريفية والنائية. في حال التخطيط للسفر خارج المدن الكبرى، يُعدّ هذا المشغّل الخيار الأنسب من حيث استمرارية الإشارة.</p>
    </div>

    <h2>الوجهات السياحية والمطارات</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
                <h4>المدن السياحية</h4>
                <p>مراكش، فاس، شفشاون، الصويرة، أكادير — 4G مستقرة من كافة المشغّلين</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            </div>
            <div>
                <h4>المطارات الدولية</h4>
                <p>محمد الخامس (CMN)، المنارة (RAK)، ابن بطوطة (TNG) — 4G من جميع المشغّلين</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"/></svg>
            </div>
            <div>
                <h4>الطرق السيّارة</h4>
                <p>المحاور الرئيسية (الدار البيضاء–مراكش، الدار البيضاء–طنجة) — تغطية 4G/3G متواصلة</p>
            </div>
        </div>
    </div>
</article>

<?php require '../_footer.php'; ?>
