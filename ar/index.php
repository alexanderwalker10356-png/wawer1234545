<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'ar';
$page_title = 'شبكات الهاتف المحمول في المغرب: نظرة شاملة — Telecom Maroc Guide';
$page_description = 'نظرة شاملة على الاتصالات المتنقلة في المغرب: تاريخ السوق، المشغلون، التقنيات والمعايير، التغطية الإقليمية.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'شبكات الهاتف المحمول في المغرب: نظرة شاملة';
$breadcrumbs = [
    ['name' => 'الرئيسية', 'url' => 'https://maroctelecomguide.world/ar/index.php'],
];

require '../_header.php';
?>
<style>article,article *{direction:rtl;text-align:right}article .spec-table th,article .spec-table thead th{text-align:right}article .breadcrumb{flex-direction:row-reverse}article ul,article ol{padding-right:24px;padding-left:0}article .card-grid{direction:ltr}article .card{direction:rtl;text-align:right}article .feature-grid{direction:ltr}article .feature-item{direction:rtl;text-align:right}article .stat-row{direction:ltr}article .stat-box{direction:rtl}article .hero-inner{flex-direction:row-reverse}article .hero-text{text-align:right}article .coverage-bar{direction:ltr}</style>

<div class="hero">
    <div class="hero-inner">
        <div class="hero-text">
            <h1>شبكات الهاتف المحمول في المغرب</h1>
            <p>دليل معلوماتي شامل حول المشغّلين والتقنيات وتغطية الاتصالات المتنقلة في المغرب.</p>
        </div>
        <div class="hero-visual">
            <svg width="220" height="180" viewBox="0 0 220 180" fill="none">
                <rect x="95" y="20" width="30" height="120" rx="4" fill="rgba(255,255,255,0.08)"/>
                <rect x="100" y="30" width="20" height="100" rx="2" fill="rgba(16,185,129,0.3)"/>
                <circle cx="110" cy="18" r="6" fill="#10b981" opacity="0.8"/>
                <circle cx="110" cy="18" r="14" stroke="#10b981" stroke-width="1.5" opacity="0.4"/>
                <circle cx="110" cy="18" r="24" stroke="#10b981" stroke-width="1" opacity="0.2"/>
                <circle cx="110" cy="18" r="36" stroke="#10b981" stroke-width="0.5" opacity="0.1"/>
                <path d="M60 150 Q85 130 110 140 Q135 150 160 130" stroke="rgba(212,168,67,0.4)" stroke-width="2" fill="none"/>
                <path d="M40 160 Q80 140 110 150 Q140 160 180 140" stroke="rgba(212,168,67,0.2)" stroke-width="2" fill="none"/>
                <rect x="30" y="148" width="16" height="22" rx="3" fill="rgba(255,255,255,0.06)"/>
                <rect x="55" y="152" width="12" height="18" rx="2" fill="rgba(255,255,255,0.06)"/>
                <rect x="155" y="144" width="18" height="26" rx="3" fill="rgba(255,255,255,0.06)"/>
                <rect x="180" y="150" width="14" height="20" rx="2" fill="rgba(255,255,255,0.06)"/>
                <path d="M85 85 L72 95 M135 80 L148 90" stroke="rgba(16,185,129,0.35)" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M90 65 L76 72 M130 60 L144 67" stroke="rgba(16,185,129,0.25)" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </div>
    </div>
</div>

</main>
<main class="container">
<article>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        آخر تحديث: أكتوبر 2026
    </p>

    <p>يُعدّ المغرب من أكثر الدول الأفريقية تقدّمًا في مجال البنية التحتية للاتصالات. ويبلغ عدد سكان المملكة نحو 37 مليون نسمة، مع نسبة اختراق للهاتف المحمول تتجاوز 130%، ما يعني أنّ عدد بطاقات SIM النشطة يفوق بشكل ملحوظ عدد السكان.</p>

    <div class="stat-row">
        <div class="stat-box">
            <div class="stat-number">37M</div>
            <div class="stat-label">سكان</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">+130%</div>
            <div class="stat-label">اختراق</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">3</div>
            <div class="stat-label">مشغّلين</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">4G/5G</div>
            <div class="stat-label">تقنيات</div>
        </div>
    </div>

    <h2>تاريخ سوق الاتصالات في المغرب</h2>

    <p>شهد سوق الاتصالات المغربي تحولًا عميقًا خلال العقود الثلاثة الأخيرة. حتى نهاية التسعينيات، كان القطاع خاضعًا بالكامل لسيطرة الدولة. وكانت المرحلة الحاسمة إصلاح عام 1998، الذي تضمّن اعتماد قانون تحرير الاتصالات وإنشاء هيئة تنظيمية مستقلة: الوكالة الوطنية لتقنين الاتصالات (ANRT). فتح هذا الإصلاح السوق أمام الاستثمارات الخاصة والمنافسة.</p>

    <p>كان المشغّل الأول والوحيد آنذاك هو اتصالات المغرب، المنبثق عن الاحتكار الحكومي السابق. في عام 1999، استُحوذ على جزء من أسهمه من قِبل مستثمر دولي، مما أطلق مسار خصخصة القطاع. وفي عام 2000، مُنحت الرخصة الثانية للهاتف المحمول لشركة ميدي تيليكوم، التي أُعيدت تسميتها لاحقًا أورانج المغرب. أما المشغّل الثالث، وانا كوربوريت، الذي يعمل تحت علامة إنوي، فقد حصل على رخصته في 2009.</p>

    <h2>المشغّلون الرئيسيون</h2>

    <div class="card-grid">
        <div class="card">
            <div class="card-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2" stroke-linecap="round"><path d="M12 2v4M12 10v4M12 18v4"/><path d="M4 8h16"/><path d="M6 16h12"/></svg>
            </div>
            <h3>اتصالات المغرب</h3>
            <p>أكبر مشغّل في البلاد، يعود تاريخه إلى خدمة البريد والبرق الحكومية. يمتلك البنية التحتية الأكثر اتساعًا ويتواجد في جميع مناطق المغرب، بما فيها المناطق الريفية النائية.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>تغطية 4G</span><span style="font-weight:600;color:var(--c-primary);">&gt; 90%</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:90%"></div></div>
            </div>
        </div>
        <div class="card">
            <div class="card-icon" style="background:#fff3e0;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e65100" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
            </div>
            <h3>أورانج المغرب</h3>
            <p>ثاني أكبر مشغّل، ينتمي إلى مجموعة أورانج الدولية. تغطي شبكته جميع المدن الكبرى والممرات الرئيسية للنقل. يطوّر بنشاط قطاع الجيل الرابع والخدمات الرقمية.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>تغطية 4G</span><span style="font-weight:600;color:#e65100;">&gt; 85%</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:85%;background:linear-gradient(90deg,#f57c00,#e65100);"></div></div>
            </div>
        </div>
        <div class="card">
            <div class="card-icon" style="background:#f3e5f5;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7b1fa2" stroke-width="2" stroke-linecap="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <h3>إنوي</h3>
            <p>أحدث المشغّلين الثلاثة، مملوك لمجموعة المدى الاستثمارية. رغم دخوله المتأخر للسوق، حقّقت الشركة تغطية ملحوظة في التجمعات الحضرية والمناطق السياحية.</p>
            <div style="margin-top:12px;">
                <div style="display:flex;justify-content:space-between;font-size:0.82rem;color:var(--c-text-muted);margin-bottom:4px;"><span>تغطية 4G</span><span style="font-weight:600;color:#7b1fa2;">&gt; 75%</span></div>
                <div class="coverage-bar"><div class="coverage-fill" style="width:75%;background:linear-gradient(90deg,#9c27b0,#7b1fa2);"></div></div>
            </div>
        </div>
    </div>

    <h2>التقنيات ومعايير الاتصالات</h2>

    <p>نشر المغرب تباعًا جميع الأجيال الرئيسية لشبكات الهاتف المحمول. أُنشئت شبكات GSM (الجيل الثاني) في التسعينيات، وجرى الانتقال إلى الجيل الثالث في 2007-2008، وأُطلقت شبكات الجيل الرابع LTE تجاريًا في 2015.</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="2" y="6" width="20" height="14" rx="2"/><path d="M6 10v6M10 8v8M14 10v6M18 12v4"/></svg>
            </div>
            <div>
                <h4>2G — GSM</h4>
                <p>900 / 1800 ميغاهرتز — تغطية وطنية</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M2 20h20M6 16h12M10 12h4"/></svg>
            </div>
            <div>
                <h4>3G — UMTS / HSPA+</h4>
                <p>2100 ميغاهرتز — المناطق المأهولة</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>4G — LTE / LTE-A</h4>
                <p>800 / 1800 / 2600 ميغاهرتز — المدن والطرق السريعة</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>5G — NR</h4>
                <p>3500 / 700 ميغاهرتز — مشاريع تجريبية</p>
            </div>
        </div>
    </div>

    <div class="info-box">
        <p>يستخدم المغرب المعايير الأوروبية للاتصالات المتنقلة: GSM 900/1800 ميغاهرتز للجيل الثاني، وUMTS 2100 ميغاهرتز للجيل الثالث، ونطاقات 800/1800/2600 ميغاهرتز لتقنية LTE. وهذا يضمن التوافق مع معظم الأجهزة المحمولة المباعة في أوروبا وآسيا.</p>
    </div>

    <h2>التغطية الإقليمية</h2>

    <p>تتركّز البنية التحتية الأكثر كثافة على طول الساحل الأطلسي، في مناطق الدار البيضاء-سطات، والرباط-سلا-القنيطرة، وطنجة-تطوان-الحسيمة. يوفّر المشغّلون الثلاثة تغطية مستقرة بالجيل الرابع مع سرعات عالية.</p>

    <p>تستفيد المناطق الداخلية — فاس-مكناس، مراكش-آسفي، بني ملال-خنيفرة — أيضًا من تغطية الجيل الرابع، وإن كانت قد تقتصر على الجيل الثالث في البلدات الصغيرة. أما المناطق الجنوبية والشرقية، بما فيها الأطلس والصحراء والمناطق الحدودية، فتخدمها بشكل رئيسي شبكات الجيلين الثاني والثالث.</p>

    <p>تتمتع الوجهات السياحية — مراكش، أكادير، شفشاون، فاس، الصويرة — بتغطية مستقرة بالجيل الرابع من جميع المشغّلين. كما تتوفر تغطية الجيل الرابع في المطارات الدولية: محمد الخامس (الدار البيضاء)، مراكش-المنارة، وطنجة ابن بطوطة.</p>
</article>

<?php require '../_footer.php'; ?>
