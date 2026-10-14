<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'سياسة حماية البيانات — ConnectMaroc';
$page_description = 'سياسة حماية البيانات الخاصة بموقع ConnectMaroc: أنواع المعلومات المُعالَجة، الكوكيز، صلاحيات المستخدم، الامتثال للائحة GDPR وقانون CCPA.';
$page_type = 'website';
$schema_type = 'WebSite';
$breadcrumbs = [
    ['name' => 'الرئيسية', 'url' => 'https://lamtelmorocco.world/ar/index.php'],
    ['name' => 'حماية البيانات', 'url' => 'https://lamtelmorocco.world/ar/privacy.php'],
];

require '../_header.php';
?>
<style>article,article *{direction:rtl;text-align:right}article .spec-table th,article .spec-table thead th{text-align:right}article .breadcrumb{flex-direction:row-reverse}article ul,article ol{padding-right:24px;padding-left:0}article .card-grid{direction:ltr}article .card{direction:rtl;text-align:right}article .feature-grid{direction:ltr}article .feature-item{direction:rtl;text-align:right}article .stat-row{direction:ltr}article .stat-box{direction:rtl}article .hero-inner{flex-direction:row-reverse}article .hero-text{text-align:right}article .coverage-bar{direction:ltr}</style>

<article>
    <nav class="breadcrumb">
        <a href="index.php">الرئيسية</a><span class="sep">/</span><span>حماية البيانات</span>
    </nav>

    <h1>سياسة حماية البيانات</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        تاريخ النفاذ: 15 سبتمبر 2025
    </p>

    <p>توضّح هذه الوثيقة الأسلوب الذي يتّبعه موقع ConnectMaroc (يُشار إليه لاحقًا بـ«الموقع» أو «نحن») في التعامل مع البيانات التي يُتيحها الزائر (يُشار إليه لاحقًا بـ«أنت» أو «المستخدم») أثناء تصفّح الموقع، وكيفية توظيفها وتأمينها.</p>

    <h2>1. طبيعة البيانات المُجمّعة</h2>
    <p>الموقع ذو طابع معلوماتي بحت ولا يستلزم إنشاء حساب أو تسجيل دخول أو إدخال معلومات شخصية للاطلاع على محتواه. قد تُجمع تلقائيًا البيانات التقنية الآتية:</p>
    <ul>
        <li>عنوان بروتوكول الإنترنت (IP) الخاص بالزائر.</li>
        <li>نوع متصفّح الويب وإصداره.</li>
        <li>نظام تشغيل الجهاز المُستخدَم.</li>
        <li>الصفحات التي جرت زيارتها وتوقيت كل زيارة.</li>
        <li>الموقع الذي أُحيل منه الزائر (Referrer).</li>
    </ul>
    <p>تُوظَّف هذه البيانات حصرًا في ضمان الأداء السليم للموقع وفي إعداد إحصائيات إجمالية غير شخصية لحركة الزوار.</p>

    <h2>2. الكوكيز (ملفات تعريف الارتباط)</h2>
    <p>قد يستعين الموقع بملفات كوكيز ذات وظيفة تقنية صرفة لضمان استقرار التشغيل. لا نلجأ إلى أي كوكيز ذات طابع إعلاني أو تتبّعي أو صادرة عن أطراف خارجية.</p>
    <ul>
        <li>مُعرّف الجلسة اللازم لعمل الخادم بشكل سليم.</li>
        <li>تفضيلات العرض (حيثما ينطبق ذلك).</li>
    </ul>
    <p>بإمكانك إلغاء تنشيط الكوكيز عبر إعدادات المتصفّح. لن يُؤثّر ذلك على قدرتك على الوصول إلى مضامين الموقع.</p>

    <h2>3. أوجه استخدام البيانات</h2>
    <ul>
        <li>الحفاظ على وظائف الموقع وسلامته الأمنية.</li>
        <li>تجميع إحصائيات إجمالية عن حركة التصفّح.</li>
        <li>رصد الأعطال التقنية والوقاية منها.</li>
    </ul>
    <p>لا نقوم ببيع البيانات الشخصية أو تحويلها أو الإفصاح عنها لأي طرف ثالث، ما لم يُلزمنا القانون بذلك.</p>

    <h2>4. صلاحيات المستخدم وفق اللائحة الأوروبية لحماية البيانات (GDPR)</h2>
    <p>إذا كنت مقيمًا داخل الاتحاد الأوروبي أو المنطقة الاقتصادية الأوروبية، فلك الصلاحيات التالية:</p>
    <ul>
        <li><strong>صلاحية الاطلاع</strong> — الحصول على تفاصيل البيانات المُعالَجة المتعلقة بك.</li>
        <li><strong>صلاحية التعديل</strong> — تصويب أي معلومة غير صحيحة.</li>
        <li><strong>صلاحية الحذف</strong> — طلب إزالة بياناتك الشخصية.</li>
        <li><strong>صلاحية تقييد المعالجة</strong> — الحدّ من معالجة بياناتك في ظروف معيّنة.</li>
        <li><strong>صلاحية نقل البيانات</strong> — استلام بياناتك بصيغة مُنظّمة.</li>
        <li><strong>صلاحية الرفض</strong> — الاعتراض على معالجة بياناتك.</li>
    </ul>
    <p>لتفعيل أي من هذه الصلاحيات: adam.henderson62464@gmail.com.</p>

    <h2>5. صلاحيات المستخدم وفق قانون خصوصية المستهلك في كاليفورنيا (CCPA)</h2>
    <p>إذا كنت مقيمًا في ولاية كاليفورنيا الأمريكية:</p>
    <ul>
        <li>صلاحية معرفة أصناف البيانات الشخصية التي يتم تجميعها.</li>
        <li>صلاحية المطالبة بحذف البيانات الشخصية المحفوظة.</li>
        <li>صلاحية رفض بيع البيانات الشخصية. نحن لا نتاجر بالبيانات الشخصية.</li>
        <li>صلاحية عدم التعرّض للتمييز جرّاء ممارسة حقوقك.</li>
    </ul>
    <p>لتفعيل أي من هذه الصلاحيات: adam.henderson62464@gmail.com.</p>

    <h2>6. تأمين البيانات</h2>
    <p>نعتمد إجراءات تقنية وتنظيمية ملائمة لحماية المعلومات التي نتعامل معها. غير أنه لا يوجد أسلوب نقل عبر الإنترنت أو وسيلة تخزين رقمية يمكن اعتبارها محصّنة بالكامل.</p>

    <h2>7. الإحالات إلى مواقع أخرى</h2>
    <p>لا يتضمّن الموقع حاليًا أي إحالات إلى مواقع خارجية. في حال إدراج مثل هذه الإحالات مستقبلًا، لن نتحمّل المسؤولية عن ممارسات حماية البيانات المُتّبعة لدى تلك المواقع.</p>

    <h2>8. تعديل هذه الوثيقة</h2>
    <p>نحتفظ بحق تحديث هذه السياسة. تظلّ النسخة السارية متاحة دومًا على هذه الصفحة.</p>

    <h2>9. بيانات التواصل</h2>
    <p>لأي استفسار يخصّ سياسة حماية البيانات: adam.henderson62464@gmail.com.</p>
</article>

<?php require '../_footer.php'; ?>
