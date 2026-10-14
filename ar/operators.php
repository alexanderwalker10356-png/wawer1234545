<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'مشغّلو الهاتف المحمول في المغرب — Telecom Maroc Guide';
$page_description = 'عرض لمشغّلي الهاتف المحمول في المغرب: اتصالات المغرب، أورانج المغرب وإنوي — التاريخ، التغطية، التقنيات وخصائص الشبكة.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'مشغّلو الهاتف المحمول في المغرب';
$breadcrumbs = [
    ['name' => 'الرئيسية', 'url' => 'https://maroctelecomguide.world/ar/index.php'],
    ['name' => 'المشغّلون', 'url' => 'https://maroctelecomguide.world/ar/operators.php'],
];

require '../_header.php';
?>
<style>article,article *{direction:rtl;text-align:right}article .spec-table th,article .spec-table thead th{text-align:right}article .breadcrumb{flex-direction:row-reverse}article ul,article ol{padding-right:24px;padding-left:0}article .card-grid{direction:ltr}article .card{direction:rtl;text-align:right}article .feature-grid{direction:ltr}article .feature-item{direction:rtl;text-align:right}article .stat-row{direction:ltr}article .stat-box{direction:rtl}article .hero-inner{flex-direction:row-reverse}article .hero-text{text-align:right}article .coverage-bar{direction:ltr}</style>

<article>
    <nav class="breadcrumb">
        <a href="index.php">الرئيسية</a><span class="sep">/</span><span>المشغّلون</span>
    </nav>

    <h1>مشغّلو الهاتف المحمول في المغرب</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        آخر تحديث: أكتوبر 2026
    </p>

    <p>يتمحور سوق الهاتف المحمول المغربي منذ أكثر من عقدين حول ثلاثة مشغّلين. يحتل كلٌّ منهم مكانته الخاصة، ويمتلك بنيته التحتية الشبكية ومنطقة تغطيته. فيما يلي الخصائص التفصيلية لكل مشغّل.</p>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-iam">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M12 2v4M12 10v4M12 18v4"/><path d="M4 8h16"/><path d="M6 16h12"/></svg>
            </span>
            اتصالات المغرب (Itissalat al-Maghrib)
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">البطاقة التقنية</th></tr></thead>
            <tr><th>التأسيس</th><td>1998 (انبثق من المشغّل الحكومي النشط منذ 1956)</td></tr>
            <tr><th>المساهم</th><td>مجموعة اتصالات (حصة الأغلبية)، الدولة المغربية</td></tr>
            <tr><th>التقنيات</th><td>2G (GSM 900/1800)، 3G (UMTS 2100)، 4G LTE (800/1800/2600 ميغاهرتز)، 5G تجريبي</td></tr>
            <tr><th>تغطية 4G</th><td>أكثر من 90% من السكان</td></tr>
        </table>

        <p>اتصالات المغرب هو تاريخيًا أول وأكبر مشغّل للاتصالات في المغرب. تعود أصول الشركة إلى خدمة البريد والبرق الحكومية التي أُنشئت منذ استقلال البلاد. بعد إصلاح 1998، أُعيد هيكلة المشغّل كشركة مساهمة ثم خُصخص جزئيًا.</p>

        <p>يمتلك اتصالات المغرب اليوم البنية التحتية الأكثر اتساعًا في البلاد. مُثبّتة محطاته القاعدية حتى في المناطق الجبلية الوعرة في الأطلس وأطراف الصحراء. شبكة الجيل الرابع LTE منتشرة في جميع المدن الكبرى والمتوسطة، وعلى طول الطرق السريعة الرئيسية.</p>

        <p>تُشارك الشركة بنشاط في مشاريع الجيل الخامس التجريبية بالدار البيضاء والرباط. إلى جانب خدمات الهاتف المحمول، تمتلك اتصالات المغرب شبكة ثابتة واسعة وتُعدّ المزوّد الأول لخدمات الإنترنت في البلاد.</p>
    </div>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-orange">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
            </span>
            أورانج المغرب
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">البطاقة التقنية</th></tr></thead>
            <tr><th>التأسيس</th><td>2000 (باسم ميدي تيليكوم، أُعيدت تسميتها أورانج المغرب في 2016)</td></tr>
            <tr><th>المساهم</th><td>Orange S.A. (فرنسا)، Atlas Merchant Capital</td></tr>
            <tr><th>التقنيات</th><td>2G (GSM 900/1800)، 3G (UMTS 2100)، 4G LTE (800/1800/2600 ميغاهرتز)، اختبارات 5G</td></tr>
            <tr><th>تغطية 4G</th><td>أكثر من 85% من السكان</td></tr>
        </table>

        <p>دخلت أورانج المغرب السوق عام 2000 تحت اسم ميدي تيليكوم، لتصبح أول منافس للاحتكار الحكومي. أسّسها مستثمرون إسبان ومغاربة قبل أن ينتقل التحكم إلى المجموعة الفرنسية أورانج في 2010.</p>

        <p>ركّز المشغّل تطوير شبكته على الساحل الأطلسي والتجمعات الحضرية الرئيسية. تتوفر تغطية الجيل الرابع في الدار البيضاء والرباط ومراكش وفاس وطنجة وأكادير ومكناس وعشرات المدن الأخرى.</p>

        <p>تستثمر أورانج المغرب في تحديث الشبكة الأساسية وتوسيع سعة LTE في المناطق ذات الكثافة السكانية العالية. تستخدم الشركة تقنية تجميع الحاملات (Carrier Aggregation) لزيادة سرعة النقل.</p>
    </div>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-inwi">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </span>
            إنوي
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">البطاقة التقنية</th></tr></thead>
            <tr><th>التأسيس</th><td>2009 (رخصة الهاتف المحمول؛ وانا كوربوريت تأسست في 2007)</td></tr>
            <tr><th>المساهم</th><td>المدى (مجموعة استثمارية مغربية)</td></tr>
            <tr><th>التقنيات</th><td>2G (GSM 900/1800)، 3G (UMTS 2100)، 4G LTE (800/1800/2600 ميغاهرتز)، اختبارات 5G</td></tr>
            <tr><th>تغطية 4G</th><td>أكثر من 75% من السكان</td></tr>
        </table>

        <p>إنوي هو أحدث مشغّل للهاتف المحمول في المغرب، دخل السوق عام 2009 بعد الحصول على الرخصة الثالثة. سبق ذلك تقديم الشركة الأم وانا كوربوريت لخدمات الهاتف الثابت والإنترنت اللاسلكي عبر تقنية CDMA.</p>

        <p>رغم دخوله المتأخر، نمت قاعدة مشتركي إنوي وبنيته التحتية بسرعة. يستهدف المشغّل الأسواق الحضرية، مركّزًا استثماراته في المناطق الأكثر اكتظاظًا: الدار البيضاء-سطات، الرباط-سلا-القنيطرة، مراكش-آسفي، وطنجة-تطوان-الحسيمة.</p>

        <p>في المناطق الأقل كثافة سكانية، تقتصر تغطية إنوي بشكل رئيسي على شبكات الجيل الثالث. يُشارك إنوي أيضًا في برامج اختبار الجيل الخامس تحت إشراف الوكالة الوطنية لتقنين الاتصالات (ANRT).</p>
    </div>

    <h2>مقارنة المشغّلين</h2>

    <table class="spec-table">
        <thead>
            <tr><th>المعيار</th><th>اتصالات المغرب</th><th>أورانج المغرب</th><th>إنوي</th></tr>
        </thead>
        <tbody>
            <tr><td>سنة الانطلاق</td><td>1998</td><td>2000</td><td>2009</td></tr>
            <tr><td>2G (GSM)</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td></tr>
            <tr><td>3G (UMTS)</td><td>2100 MHz</td><td>2100 MHz</td><td>2100 MHz</td></tr>
            <tr><td>4G LTE</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td></tr>
            <tr><td>تغطية 4G</td><td>&gt; 90%</td><td>&gt; 85%</td><td>&gt; 75%</td></tr>
            <tr><td>5G (الحالة)</td><td>مناطق تجريبية</td><td>اختبارات</td><td>اختبارات</td></tr>
            <tr><td>التغطية الريفية</td><td>الأوسع</td><td>متوسطة</td><td>محدودة</td></tr>
        </tbody>
    </table>
</article>

<?php require '../_footer.php'; ?>
