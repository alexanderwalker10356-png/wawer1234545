<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'الفاعلون في شبكة الهاتف المحمول بالمغرب — ConnectMaroc';
$page_description = 'ملفات تعريفية مفصّلة لمشغّلي الهاتف المحمول الثلاثة في المغرب: اتصالات المغرب وأورانج المغرب وإنوي — المسار والشبكة والبنية التحتية.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'الفاعلون في شبكة الهاتف المحمول بالمغرب';
$breadcrumbs = [
    ['name' => 'الرئيسية', 'url' => 'https://lamtelmorocco.world/ar/index.php'],
    ['name' => 'المشغّلون', 'url' => 'https://lamtelmorocco.world/ar/operators.php'],
];

require '../_header.php';
?>
<style>article,article *{direction:rtl;text-align:right}article .spec-table th,article .spec-table thead th{text-align:right}article .breadcrumb{flex-direction:row-reverse}article ul,article ol{padding-right:24px;padding-left:0}article .card-grid{direction:ltr}article .card{direction:rtl;text-align:right}article .feature-grid{direction:ltr}article .feature-item{direction:rtl;text-align:right}article .stat-row{direction:ltr}article .stat-box{direction:rtl}article .hero-inner{flex-direction:row-reverse}article .hero-text{text-align:right}article .coverage-bar{direction:ltr}</style>

<article>
    <nav class="breadcrumb">
        <a href="index.php">الرئيسية</a><span class="sep">/</span><span>المشغّلون</span>
    </nav>

    <h1>الفاعلون في شبكة الهاتف المحمول بالمغرب</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        آخر تحديث: أكتوبر 2026
    </p>

    <p>يرتكز قطاع الهاتف المحمول في المغرب على ثلاثة فاعلين رئيسيين تتوزّع بينهم السوق منذ ما يزيد عن خمسة عشر عامًا. يتميّز كل منهم ببنية شبكية خاصة ونطاق جغرافي مختلف. نقدّم فيما يلي لمحة مفصّلة عن كل مشغّل.</p>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-iam">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M12 2v4M12 10v4M12 18v4"/><path d="M4 8h16"/><path d="M6 16h12"/></svg>
            </span>
            اتصالات المغرب (Itissalat al-Maghrib)
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">الملف التقني</th></tr></thead>
            <tr><th>بداية النشاط</th><td>1998 (وريث المؤسسة الحكومية للبريد والاتصالات القائمة منذ 1956)</td></tr>
            <tr><th>الملكية</th><td>مجموعة اتصالات الإماراتية (الحصة الأكبر)، الدولة المغربية</td></tr>
            <tr><th>المعايير التقنية</th><td>2G (GSM 900/1800)، 3G (UMTS 2100)، 4G LTE (800/1800/2600 MHz)، 5G تجريبي</td></tr>
            <tr><th>مدى تغطية 4G</th><td>يتخطى 90% من إجمالي السكان</td></tr>
        </table>

        <p>يُمثّل اتصالات المغرب العمود الفقري لقطاع الاتصالات في المملكة، إذ يرجع نشأته إلى المنظومة البريدية الحكومية التي رافقت البلاد منذ الاستقلال. وعقب الإصلاح التشريعي لسنة 1998، تحوّل إلى شركة مساهمة ودخل مسار الانفتاح على رؤوس الأموال الخاصة.</p>

        <p>يتفرّد هذا المشغّل بامتلاك أوسع شبكة محطات قاعدية تغطي حتى المرتفعات الأطلسية والهوامش الصحراوية. وتنتشر خدمة LTE في كافة الحواضر الكبرى والمتوسطة وعلى امتداد شبكة الطرق السيّارة.</p>

        <p>ينخرط اتصالات المغرب في المشاريع الاستكشافية للجيل الخامس داخل الدار البيضاء والرباط. وإلى جانب الهاتف المحمول، يُدير شبكة اتصالات ثابتة واسعة ويحتل الريادة في مجال خدمات الإنترنت على المستوى الوطني.</p>
    </div>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-orange">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
            </span>
            أورانج المغرب
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">الملف التقني</th></tr></thead>
            <tr><th>بداية النشاط</th><td>2000 (تأسّست بمسمّى ميدي تيليكوم، ثم تبنّت هوية أورانج في 2016)</td></tr>
            <tr><th>الملكية</th><td>Orange S.A. (فرنسا)، Atlas Merchant Capital</td></tr>
            <tr><th>المعايير التقنية</th><td>2G (GSM 900/1800)، 3G (UMTS 2100)، 4G LTE (800/1800/2600 MHz)، تجارب 5G</td></tr>
            <tr><th>مدى تغطية 4G</th><td>يتخطى 85% من إجمالي السكان</td></tr>
        </table>

        <p>انطلقت أورانج المغرب عام 2000 تحت مسمّى ميدي تيليكوم كأول منافس يكسر الاحتكار الحكومي للاتصالات. أسّسها رأسمال إسباني ومغربي مشترك، قبل أن تنتقل السيطرة إلى المجموعة الفرنسية أورانج عام 2010.</p>

        <p>ركّز هذا المشغّل استثماراته في بناء شبكة قوية على الواجهة الأطلسية وعبر المراكز الحضرية الكبرى. وتتاح تغطية الجيل الرابع في الدار البيضاء والرباط ومراكش وفاس وطنجة وأكادير ومكناس والعديد من المدن الأخرى.</p>

        <p>تضخّ أورانج المغرب موارد كبيرة في تحديث بنيتها الشبكية المركزية وتوسيع طاقة LTE في النقاط ذات الكثافة المرتفعة. وتعتمد تقنية تجميع الحاملات (Carrier Aggregation) بهدف رفع معدّلات سرعة النقل.</p>
    </div>

    <div class="operator-section">
        <h2>
            <span class="op-badge op-badge-inwi">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </span>
            إنوي
        </h2>

        <table class="spec-table">
            <thead><tr><th colspan="2">الملف التقني</th></tr></thead>
            <tr><th>بداية النشاط</th><td>2009 (حصل على رخصة المحمول؛ الشركة الأم وانا كوربوريت تأسست عام 2007)</td></tr>
            <tr><th>الملكية</th><td>مجموعة المدى (شركة استثمارية مغربية)</td></tr>
            <tr><th>المعايير التقنية</th><td>2G (GSM 900/1800)، 3G (UMTS 2100)، 4G LTE (800/1800/2600 MHz)، تجارب 5G</td></tr>
            <tr><th>مدى تغطية 4G</th><td>يتخطى 75% من إجمالي السكان</td></tr>
        </table>

        <p>يُعتبر إنوي آخر الداخلين إلى سوق الهاتف المحمول بالمغرب، حيث نال الترخيص الثالث عام 2009. وقد سبق ذلك تقديم الشركة الأم وانا كوربوريت لخدمات الخط الثابت والإنترنت اللاسلكي المبني على تقنية CDMA.</p>

        <p>على الرغم من التحاقه المتأخّر، شهدت قاعدة مستخدمي إنوي وبنيته التحتية نموًا متسارعًا. ويوجّه المشغّل طاقاته نحو الأسواق الحضرية، مركّزًا إنفاقه على الجهات الأكثر كثافة: الدار البيضاء-سطات، الرباط-سلا-القنيطرة، مراكش-آسفي، وطنجة-تطوان-الحسيمة.</p>

        <p>في الأقاليم ذات الكثافة المنخفضة، يعتمد إنوي بشكل رئيسي على شبكة الجيل الثالث. ويساهم كذلك في التجارب المعملية للجيل الخامس تحت إشراف الوكالة الوطنية لتقنين الاتصالات (ANRT).</p>
    </div>

    <h2>جدول مقارن بين المشغّلين</h2>

    <table class="spec-table">
        <thead>
            <tr><th>العنصر</th><th>اتصالات المغرب</th><th>أورانج المغرب</th><th>إنوي</th></tr>
        </thead>
        <tbody>
            <tr><td>سنة الإطلاق</td><td>1998</td><td>2000</td><td>2009</td></tr>
            <tr><td>2G (GSM)</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td><td>900 / 1800 MHz</td></tr>
            <tr><td>3G (UMTS)</td><td>2100 MHz</td><td>2100 MHz</td><td>2100 MHz</td></tr>
            <tr><td>4G LTE</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td><td>800 / 1800 / 2600 MHz</td></tr>
            <tr><td>نطاق تغطية 4G</td><td>&gt; 90%</td><td>&gt; 85%</td><td>&gt; 75%</td></tr>
            <tr><td>5G (الوضع)</td><td>مناطق تجريبية</td><td>تجارب</td><td>تجارب</td></tr>
            <tr><td>الحضور الريفي</td><td>الأشمل</td><td>معتدل</td><td>محصور</td></tr>
        </tbody>
    </table>
</article>

<?php require '../_footer.php'; ?>
