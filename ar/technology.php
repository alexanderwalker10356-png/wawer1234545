<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'تقنيات ومعايير الاتصالات في المغرب — Telecom Maroc Guide';
$page_description = 'عرض مفصّل لتقنيات الهاتف المحمول في المغرب: ترددات 2G/3G/4G/5G، المعايير، تغطية LTE، التجوال الدولي وآفاق التطوير.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'تقنيات ومعايير الاتصالات في المغرب';
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

    <h1>تقنيات ومعايير الاتصالات في المغرب</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        آخر تحديث: أكتوبر 2026
    </p>

    <p>تستند البنية التحتية للاتصالات في المغرب إلى المعايير الدولية المعتمدة، مما يضمن التوافق مع الغالبية العظمى من الأجهزة المحمولة المُصنّعة للأسواق الأوروبية والشرق أوسطية والأفريقية.</p>

    <h2>الجيل الثاني — GSM</h2>

    <p>نُشرت شبكات الجيل الثاني في المغرب في منتصف التسعينيات ولا تزال تُشكّل ركيزة البنية التحتية للهاتف المحمول. يعمل معيار GSM على نطاقي تردد:</p>

    <table class="spec-table">
        <thead><tr><th>النطاق</th><th>الترددات</th><th>الاستخدام</th></tr></thead>
        <tbody>
            <tr><td>GSM 900</td><td>890–960 ميغاهرتز</td><td>النطاق الرئيسي الذي يوفر تغطية واسعة بفضل اختراق جيد للإشارة</td></tr>
            <tr><td>GSM 1800</td><td>1710–1880 ميغاهرتز</td><td>نطاق تكميلي لزيادة السعة في المناطق الحضرية</td></tr>
        </tbody>
    </table>

    <p>توفر شبكات GSM الاتصالات الصوتية وإرسال الرسائل القصيرة عبر كامل التراب المغربي، بما في ذلك المناطق النائية في جبال الأطلس وأطراف الصحراء.</p>

    <h2>الجيل الثالث — UMTS / HSPA+</h2>

    <p>أُطلق الجيل الثالث القائم على معيار UMTS في المغرب عام 2007، ويعمل على نطاق 2100 ميغاهرتز (Band 1).</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6M9 13h4"/></svg>
            </div>
            <div>
                <h4>UMTS (R99)</h4>
                <p>النشر الأولي — سرعة تصل إلى 384 كيلوبت/ثانية</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>HSDPA</h4>
                <p>تحسين قناة التحميل — سرعة تصل إلى 14.4 ميغابت/ثانية</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>HSPA+</h4>
                <p>تحسين إضافي — سرعة نظرية تصل إلى 42 ميغابت/ثانية</p>
            </div>
        </div>
    </div>

    <p>تغطي شبكات الجيل الثالث حاليًا معظم المناطق المأهولة في المغرب. وتظل مستوى احتياطيًا مهمًا في المناطق التي لا تتوفر فيها تغطية الجيل الرابع.</p>

    <h2>الجيل الرابع — LTE / LTE-Advanced</h2>

    <p>أُطلقت شبكات الجيل الرابع تجاريًا في المغرب في أبريل 2015. حصل المشغّلون الثلاثة على تراخيص لاستخدام عدة نطاقات ترددية:</p>

    <table class="spec-table">
        <thead><tr><th>النطاق</th><th>نطاق 3GPP</th><th>الخصائص</th></tr></thead>
        <tbody>
            <tr><td>800 ميغاهرتز</td><td>Band 20</td><td>نطاق منخفض التردد مع اختراق ممتاز للمباني ومدى واسع. المناطق شبه الحضرية والريفية.</td></tr>
            <tr><td>1800 ميغاهرتز</td><td>Band 3</td><td>نطاق متوسط، توازن بين السعة والتغطية. التردد الرئيسي لعمل LTE في المدن.</td></tr>
            <tr><td>2600 ميغاهرتز</td><td>Band 7</td><td>نطاق عالي التردد بسعة قصوى لكن بمدى محدود. مراكز المدن الكبرى وأماكن التجمّعات.</td></tr>
        </tbody>
    </table>

    <p>يستخدم المشغّلون بنشاط تقنية تجميع الحاملات (Carrier Aggregation)، حيث يجمعون نطاقين أو ثلاثة لزيادة سرعة نقل البيانات. ونتيجة لذلك، يمكن أن تصل السرعة الفعلية للإنترنت المحمول في المدن الكبرى إلى 100-150 ميغابت/ثانية.</p>

    <div class="info-box">
        <p>يُنشر المشغّلون تقنية LTE-Advanced Pro (4.5G) لرفع السرعات القصوى وخفض زمن الاستجابة. وتُعدّ مرحلة انتقالية نحو الجيل الخامس الكامل، وهي متاحة بالفعل في بعض أحياء الدار البيضاء والرباط.</p>
    </div>

    <h2>الجيل الخامس — الوضع الراهن والآفاق</h2>

    <p>يمر نشر شبكات الجيل الخامس في المغرب بمراحله الأولى. خصّصت الوكالة الوطنية لتقنين الاتصالات (ANRT) موارد ترددية للجيل الخامس. النطاقات الرئيسية المدروسة:</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M2 20h20M6 16h12M10 12h4M12 8V4"/></svg>
            </div>
            <div>
                <h4>3.5 غيغاهرتز (n78)</h4>
                <p>النطاق الرئيسي للتغطية الحضرية بالجيل الخامس</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M1.42 9a16 16 0 0 1 21.16 0M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-accent)"/></svg>
            </div>
            <div>
                <h4>700 ميغاهرتز (n28)</h4>
                <p>نطاق منخفض التردد للتغطية الواسعة في المناطق الريفية وشبه الحضرية</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>26 غيغاهرتز (n258)</h4>
                <p>نطاق الموجات المليمترية لسرعات فائقة في مناطق محدودة</p>
            </div>
        </div>
    </div>

    <p>تُنفّذ مشاريع تجريبية للجيل الخامس في أحياء الأعمال بالدار البيضاء والمركز الإداري بالرباط. يُنتظر النشر التجاري الشامل بشكل تدريجي.</p>

    <h2>التجوال الدولي</h2>

    <p>المغرب مندمج في النظام العالمي للتجوال الدولي (الرومينغ). يمتلك المشغّلون الثلاثة اتفاقيات تجوال مع مئات المشغّلين حول العالم.</p>

    <h3>مبادئ عمل التجوال في المغرب</h3>

    <p>عند الدخول إلى البلاد، يُسجّل الجهاز المحمول تلقائيًا على شبكة أحد المشغّلين المغاربة. نظرًا لاستخدام المغرب المعايير الأوروبية، فإن الأجهزة المقتناة في أوروبا والشرق الأوسط ومعظم الدول الآسيوية متوافقة تمامًا.</p>

    <h3>الجوانب التقنية للتجوال</h3>

    <ul>
        <li>تجوال الجيل الثاني (GSM) — متاح على كامل التراب تقريبًا.</li>
        <li>تجوال الجيل الثالث (UMTS) — المدن الرئيسية والطرق السريعة.</li>
        <li>تجوال الجيل الرابع (LTE) — رهنًا باتفاقية بين المشغّلين.</li>
        <li>تجوال VoLTE (الصوت عبر LTE) — عدد محدود من أزواج المشغّلين.</li>
    </ul>

    <div class="info-box">
        <p>لعمل التجوال بشكل سليم، يُنصح بتفعيل خيار «بيانات التجوال» في إعدادات الجهاز والتحقق من ضبط إعدادات APN تلقائيًا. يُفضّل ترك وضع اختيار الشبكة على الوضع التلقائي.</p>
    </div>

    <h2>خريطة الترددات في المغرب</h2>

    <table class="spec-table">
        <thead>
            <tr><th>الجيل</th><th>المعيار</th><th>الترددات</th><th>نطاق 3GPP</th></tr>
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
