<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'بطاقة SIM في المغرب للمسافرين — ConnectMaroc';
$page_description = 'معلومات عملية حول الحصول على بطاقة SIM في المغرب: الإجراءات، الوثائق المطلوبة، إعدادات APN ونصائح للزوار.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'بطاقة SIM في المغرب للمسافرين';
$breadcrumbs = [
    ['name' => 'الرئيسية', 'url' => 'https://lamtelmorocco.world/ar/index.php'],
    ['name' => 'SIM', 'url' => 'https://lamtelmorocco.world/ar/sim-tourist.php'],
];

require '../_header.php';
?>
<style>article,article *{direction:rtl;text-align:right}article .spec-table th,article .spec-table thead th{text-align:right}article .breadcrumb{flex-direction:row-reverse}article ul,article ol{padding-right:24px;padding-left:0}article .card-grid{direction:ltr}article .card{direction:rtl;text-align:right}article .feature-grid{direction:ltr}article .feature-item{direction:rtl;text-align:right}article .stat-row{direction:ltr}article .stat-box{direction:rtl}article .hero-inner{flex-direction:row-reverse}article .hero-text{text-align:right}article .coverage-bar{direction:ltr}</style>

<article>
    <nav class="breadcrumb">
        <a href="index.php">الرئيسية</a><span class="sep">/</span><span>بطاقة SIM للمسافرين</span>
    </nav>

    <h1>بطاقة SIM في المغرب للمسافرين</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        آخر تحديث: أكتوبر 2026
    </p>

    <p>يُتيح المغرب للزوّار الأجانب الحصول على بطاقة SIM محلية بسهولة. تتوفر الشرائح لدى المشغّلين الثلاثة — اتصالات المغرب وأورانج المغرب وإنوي — وتُباع في المطارات والمحلات التجارية ونقاط البيع المعتمدة المنتشرة في المدن.</p>

    <h2>الإجراءات والوثائق المطلوبة</h2>

    <p>يستلزم القانون المغربي تسجيل كل شريحة SIM باسم حاملها. لذلك يتعيّن على المسافر تقديم الوثائق التالية عند نقطة البيع:</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 8h4M7 12h10"/></svg>
            </div>
            <div>
                <h4>جواز السفر</h4>
                <p>وثيقة هوية سارية المفعول — جواز السفر هو المستند المقبول عالميًا</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 8v4l3 3"/></svg>
            </div>
            <div>
                <h4>التفعيل الفوري</h4>
                <p>تُفعَّل البطاقة خلال دقائق بعد إتمام التسجيل لدى نقطة البيع</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="3"/><path d="M12 18h.01"/></svg>
            </div>
            <div>
                <h4>توافق الجهاز</h4>
                <p>تأكّد أن هاتفك غير مقفل (Unlocked) ويدعم الأحجام الثلاثة: Mini وMicro وNano SIM</p>
            </div>
        </div>
    </div>

    <div class="info-box">
        <p>يتوفر في صالات الوصول بالمطارات الدولية الرئيسية (محمد الخامس بالدار البيضاء، المنارة بمراكش، ابن بطوطة بطنجة) أكشاك لبيع شرائح SIM تعمل حتى ساعات متأخرة. يُنصح باقتناء البطاقة فور الوصول لتوفير الاتصال الفوري.</p>
    </div>

    <h2>إعدادات نقطة الوصول (APN)</h2>

    <p>في حال لم يتم ضبط إعدادات الإنترنت تلقائيًا على هاتفك، يمكنك إدخالها يدويًا وفق الجدول التالي:</p>

    <table class="spec-table">
        <thead><tr><th>المشغّل</th><th>اسم نقطة الوصول (APN)</th><th>ملاحظات</th></tr></thead>
        <tbody>
            <tr><td>اتصالات المغرب</td><td>internet1.iam</td><td>لا يتطلب اسم مستخدم أو كلمة مرور</td></tr>
            <tr><td>أورانج المغرب</td><td>internet.orange.ma</td><td>لا يتطلب اسم مستخدم أو كلمة مرور</td></tr>
            <tr><td>إنوي</td><td>internet1.inwi.ma</td><td>لا يتطلب اسم مستخدم أو كلمة مرور</td></tr>
        </tbody>
    </table>

    <h3>خطوات الضبط اليدوي</h3>

    <ul>
        <li>على أجهزة Android: الإعدادات ← الشبكة والإنترنت ← شبكة الهاتف ← أسماء نقاط الوصول ← إضافة نقطة وصول جديدة.</li>
        <li>على أجهزة iPhone (iOS): الإعدادات ← البيانات الخلوية ← شبكة البيانات الخلوية ← إدخال اسم APN في الحقل المخصص.</li>
    </ul>

    <h2>تقنية eSIM</h2>

    <p>بدأ بعض المشغّلين المغاربة بإتاحة شرائح eSIM الرقمية. تُناسب هذه التقنية الأجهزة الحديثة التي تدعم الشريحة المدمجة (مثل iPhone XS والأحدث، وأجهزة Samsung Galaxy S20 والأحدث، وGoogle Pixel 3 والأحدث).</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
            </div>
            <div>
                <h4>بدون شريحة مادية</h4>
                <p>يتم التفعيل عبر رمز QR دون الحاجة لزيارة نقطة بيع</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <div>
                <h4>خطّان في هاتف واحد</h4>
                <p>إمكانية الاحتفاظ بشريحتك الأصلية مع إضافة خط مغربي رقمي</p>
            </div>
        </div>
    </div>

    <h2>نصائح عملية للزوار</h2>

    <div class="card-grid">
        <div class="card">
            <div class="card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2" stroke-linecap="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"/></svg>
            </div>
            <h3>تحقّق من قفل الهاتف</h3>
            <p>تأكّد من أن هاتفك مفتوح القفل (Unlocked) قبل السفر. الأجهزة المقفلة على مشغّل أجنبي لن تقبل شريحة مغربية.</p>
        </div>
        <div class="card">
            <div class="card-icon" style="background:#fff3e0;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e65100" stroke-width="2" stroke-linecap="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            </div>
            <h3>احتفظ بوصل التسجيل</h3>
            <p>احفظ الإيصال الذي تتلقاه عند تسجيل الشريحة. قد تحتاجه في حالة فقدان البطاقة أو لاستبدالها.</p>
        </div>
        <div class="card">
            <div class="card-icon" style="background:#f3e5f5;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7b1fa2" stroke-width="2" stroke-linecap="round"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="#7b1fa2"/></svg>
            </div>
            <h3>شبكة Wi-Fi</h3>
            <p>تتوفر شبكات Wi-Fi في أغلب الفنادق والمقاهي بالمدن الكبرى. يمكن الاعتماد عليها كبديل مؤقت أو مكمّل للبيانات المحمولة.</p>
        </div>
    </div>

    <h2>صيغة الأرقام المغربية</h2>

    <p>تتبع الأرقام المغربية الصيغة الدولية <strong>+212</strong> متبوعة بتسعة أرقام. تبدأ أرقام الهاتف المحمول عادة بالأرقام 6 أو 7 بعد رمز البلد. مثال: +212 6XX XXX XXX.</p>

</article>

<?php require '../_footer.php'; ?>
