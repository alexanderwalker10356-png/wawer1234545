<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'البنية التحتية ومعايير الاتصال في المغرب — ConnectMaroc';
$page_description = 'تحليل مفصّل للبنية التحتية المتنقلة في المغرب: نطاقات الترددات 2G/3G/4G/5G، المعايير الدولية، التجوال والاتصال.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'البنية التحتية ومعايير الاتصال في المغرب';
$breadcrumbs = [
    ['name' => 'الرئيسية', 'url' => 'https://maroctelecomguide.world/ar/index.php'],
    ['name' => 'التقنيات', 'url' => 'https://maroctelecomguide.world/ar/technology.php'],
];

require '../_header.php';
?>
<style>article,article *{direction:rtl;text-align:right}article .spec-table th,article .spec-table thead th{text-align:right}article .breadcrumb{flex-direction:row-reverse}article ul,article ol{padding-right:24px;padding-left:0}article .card-grid{direction:ltr}article .card{direction:rtl;text-align:right}article .feature-grid{direction:ltr}article .feature-item{direction:rtl;text-align:right}article .stat-row{direction:ltr}article .stat-box{direction:rtl}article .hero-inner{flex-direction:row-reverse}article .hero-text{text-align:right}article .coverage-bar{direction:ltr}</style>

<article>
    <nav class="breadcrumb">
        <a href="index.php">الرئيسية</a><span class="sep">/</span><span>التقنيات</span>
    </nav>

    <h1>البنية التحتية ومعايير الاتصال في المغرب</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        آخر تحديث: أكتوبر 2026
    </p>

    <p>ترتكز منظومة الاتصالات المتنقلة في المغرب على المواصفات الدولية المعترف بها عالميًا، ما يكفل توافقًا واسعًا مع الأجهزة المصمّمة للأسواق الأوروبية والشرق أوسطية والأفريقية.</p>

    <h2>الطبقة الثانية — معيار GSM</h2>

    <p>دخلت شبكات GSM الخدمة في المغرب مع منتصف عقد التسعينيات، ولا تزال تؤدي دور القاعدة الصلبة للمنظومة اللاسلكية. يعمل هذا المعيار على نطاقين تردديين:</p>

    <table class="spec-table">
        <thead><tr><th>النطاق</th><th>المجال الترددي</th><th>الوظيفة</th></tr></thead>
        <tbody>
            <tr><td>GSM 900</td><td>890–960 ميغاهرتز</td><td>النطاق الأولي الذي يوفر امتدادًا جغرافيًا واسعًا بفضل قدرته على النفاذ عبر العوائق</td></tr>
            <tr><td>GSM 1800</td><td>1710–1880 ميغاهرتز</td><td>نطاق داعم يُعزّز الاستيعاب في المراكز الحضرية المكتظة</td></tr>
        </tbody>
    </table>

    <p>تُتيح شبكات GSM إجراء المكالمات الصوتية وتبادل الرسائل النصية القصيرة على كامل الرقعة المغربية، شاملةً مناطق الأطلس النائية والأطراف الصحراوية.</p>

    <h2>الطبقة الثالثة — معيار UMTS / HSPA+</h2>

    <p>دخل الجيل الثالث المبني على بروتوكول UMTS حيّز التنفيذ بالمغرب سنة 2007، مستخدمًا النطاق 2100 ميغاهرتز (Band 1).</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6M9 13h4"/></svg>
            </div>
            <div>
                <h4>UMTS (R99)</h4>
                <p>المرحلة الأولى — معدّل نقل أقصى يبلغ 384 كيلوبت/ثانية</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>HSDPA</h4>
                <p>تعزيز قناة التنزيل — معدّل أقصى يصل إلى 14.4 ميغابت/ثانية</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>HSPA+</h4>
                <p>ترقية متقدّمة — معدّل نظري يصل إلى 42 ميغابت/ثانية</p>
            </div>
        </div>
    </div>

    <p>تمتد شبكات الجيل الثالث حاليًا إلى غالبية المناطق المأهولة بالسكان في المغرب، وتبقى خطّ الدعم الأساسي حيثما لا تصل تغطية الجيل الرابع.</p>

    <h2>الطبقة الرابعة — LTE / LTE-Advanced</h2>

    <p>انطلق التشغيل التجاري لشبكات الجيل الرابع بالمغرب في أبريل 2015. حاز المشغّلون الثلاثة رخصًا لتشغيل عدة نطاقات ترددية:</p>

    <table class="spec-table">
        <thead><tr><th>التردد</th><th>تصنيف 3GPP</th><th>السمات</th></tr></thead>
        <tbody>
            <tr><td>800 ميغاهرتز</td><td>Band 20</td><td>تردد منخفض ذو قدرة نفاذ ممتازة داخل المباني ومدى جغرافي واسع. ملائم للمناطق شبه الحضرية والريفية.</td></tr>
            <tr><td>1800 ميغاهرتز</td><td>Band 3</td><td>تردد متوسط يجمع بين طاقة الاستيعاب ونطاق التغطية. الحامل الرئيسي لخدمة LTE في المدن.</td></tr>
            <tr><td>2600 ميغاهرتز</td><td>Band 7</td><td>تردد مرتفع يتيح أعلى سعة لكن بمدى محدود. مخصص لأحياء الأعمال والتجمّعات الكبيرة.</td></tr>
        </tbody>
    </table>

    <p>يلجأ المشغّلون بكثافة إلى تقنية تجميع الحاملات (Carrier Aggregation)، بدمج نطاقين أو ثلاثة لمضاعفة سرعة نقل البيانات. ونتيجة ذلك، يمكن أن تتراوح السرعة الفعلية للإنترنت المتنقل في المدن الرئيسية بين 100 و150 ميغابت/ثانية.</p>

    <div class="info-box">
        <p>يسعى المشغّلون إلى نشر تقنية LTE-Advanced Pro (4.5G) بغرض تعظيم السرعات وتقليص زمن الاستجابة. تُعدّ هذه خطوة تمهيدية للعبور نحو الجيل الخامس الكامل، وهي متاحة فعلًا في أحياء محدّدة من الدار البيضاء والرباط.</p>
    </div>

    <h2>الطبقة الخامسة — الوضع الحالي والتطلّعات</h2>

    <p>لا يزال نشر شبكات الجيل الخامس بالمغرب في طوره التأسيسي. رصدت الوكالة الوطنية لتقنين الاتصالات (ANRT) حزمًا ترددية مخصّصة لهذه التقنية. أبرز النطاقات المرشّحة:</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M2 20h20M6 16h12M10 12h4M12 8V4"/></svg>
            </div>
            <div>
                <h4>3.5 غيغاهرتز (n78)</h4>
                <p>النطاق المحوري لتغطية الجيل الخامس داخل المدن</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M1.42 9a16 16 0 0 1 21.16 0M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-accent)"/></svg>
            </div>
            <div>
                <h4>700 ميغاهرتز (n28)</h4>
                <p>تردد منخفض مُعدّ لتغطية جغرافية موسّعة في الأرياف والضواحي</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>26 غيغاهرتز (n258)</h4>
                <p>حزمة الموجات المليمترية لسرعات استثنائية ضمن رقعة محدودة</p>
            </div>
        </div>
    </div>

    <p>تجري اختبارات ميدانية للجيل الخامس في الأحياء التجارية بالدار البيضاء والحي الإداري بالرباط. ومن المنتظر أن يتمّ الإطلاق التجاري الشامل على مراحل متتالية.</p>

    <h2>التجوال عبر الحدود</h2>

    <p>ينتمي المغرب إلى المنظومة الدولية للتجوال (الرومينغ). ولدى المشغّلين الثلاثة عقود تجوال مُبرمة مع مئات الشركاء في مختلف أنحاء العالم.</p>

    <h3>آلية عمل التجوال داخل المغرب</h3>

    <p>فور دخول المسافر الأراضي المغربية، يلتقط هاتفه تلقائيًا إشارة أحد المشغّلين المحليين. ولأن المغرب يتبنّى المواصفات الأوروبية، فإن الأجهزة المقتناة من أوروبا أو الشرق الأوسط أو غالبية آسيا تعمل دون أي مشكلة توافقية.</p>

    <h3>الجوانب الفنية للتجوال</h3>

    <ul>
        <li>تجوال 2G (GSM) — متوفر على معظم الرقعة الجغرافية.</li>
        <li>تجوال 3G (UMTS) — المدن الرئيسية والطرق السريعة.</li>
        <li>تجوال 4G (LTE) — يتوقف على وجود اتفاق بين المشغّلَين.</li>
        <li>تجوال VoLTE (المكالمات الصوتية عبر LTE) — مقتصر على عدد قليل من الثنائيات بين المشغّلين.</li>
    </ul>

    <div class="info-box">
        <p>لضمان سلاسة التجوال، يُستحسن تفعيل خيار «بيانات التجوال» في إعدادات الهاتف والتأكد من ضبط إعدادات APN آليًا. كما يُفضّل إبقاء وضع اختيار الشبكة على «تلقائي».</p>
    </div>

    <h2>المخطط الترددي للمغرب</h2>

    <table class="spec-table">
        <thead>
            <tr><th>الجيل</th><th>البروتوكول</th><th>التردد</th><th>تصنيف 3GPP</th></tr>
        </thead>
        <tbody>
            <tr><td>2G</td><td>GSM</td><td>900 ميغاهرتز</td><td>—</td></tr>
            <tr><td>2G</td><td>GSM</td><td>1800 ميغاهرتز</td><td>—</td></tr>
            <tr><td>3G</td><td>UMTS / HSPA+</td><td>2100 ميغاهرتز</td><td>Band 1</td></tr>
            <tr><td>4G</td><td>LTE</td><td>800 ميغاهرتز</td><td>Band 20</td></tr>
            <tr><td>4G</td><td>LTE</td><td>1800 ميغاهرتز</td><td>Band 3</td></tr>
            <tr><td>4G</td><td>LTE</td><td>2600 ميغاهرتز</td><td>Band 7</td></tr>
            <tr><td>5G</td><td>NR</td><td>3500 ميغاهرتز</td><td>n78</td></tr>
            <tr><td>5G</td><td>NR</td><td>700 ميغاهرتز</td><td>n28</td></tr>
        </tbody>
    </table>
</article>

<?php require '../_footer.php'; ?>
