<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>زموږ تولیدات</title>

  <link rel="icon" href="./asset/logo.png" />
  <link rel="stylesheet" href="{{ asset('css/homePageStyle.css')}}">
  <link rel="stylesheet" href="{{ asset('css/productStyle.css')}}">
  

</head>
<body>

  <header>
    <div class="header-container">
      <div id="logo-and-text">
        <img src="./asset/logo.png" alt="د الحمزة شرکت لوګو" height="50" width="50"/>
        <p class="company-name">الحمزة الیکترونیکي شرکت</p>
        <img src="./asset/flag1.jpeg" id="flagOfImarat" alt="flagOfImart"  width="100px" height="auto">
      </div>
  
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" class="menu-icon">☰</label>
  
      <nav aria-label="Main Navigation">
        <ul>
          <li><a href="index" class="active">اصلي پاڼه</a></li>
          <li><a href="product">تولیدات</a></li>
          <li><a href="about">زموږ په اړه</a></li>
          <li class="auth-links">
            <a href="./login" class="btn-login">ننوتل</a>
            <a href="#" class="btn-register">نوی حساب</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
<header class="page-header">
  <h1>زموږ پرمختللي تولیدات</h1>
  <p>د لوړ کیفیت نظامي او دفاعي وسایل</p>
</header>

<main class="products-container">
  
  <aside class="filters">
  <section class="products-grid">
    
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS8.jpg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>Light RCWS</h3>
        <p>یو سپک ریموټ کنټرول وسلو سیستم دی چې عموماً پر کوچنیو نظامي وسایطو نصب کېږي.
           دا ډول سیستم د ښاري عملیاتو او ګزمې لپاره ډېر مناسب دی ځکه وزن یې کم وي او په اسانۍ سره حرکت کولی شي
           توانایي:
           د نږدې واټن هدفونو لپاره اغېزناک وي او چټک عکس‌العمل لري.
           ځانګړنې:
           کم وزن او ساده ډیزاین
           لږه انرژي مصرف
           د چټک نصب او لرې کولو وړتیا
           د اسانه کنټرول سیستم
          </p>
        <div class="product-actions">
          <a href="./products/pr1.html"><button class="btn-detail">توضیحات</button></a>
        </div>
      </div>
    </article>

    <!-- محصول ۲ -->
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS3.jpeg" alt="Product Name">
      </div>
      <div class="product-info">
        
        <h3>Medium RCWS</h3>
        <p> د سپک او دروند سیستم تر منځ یو متوازن انتخاب دی. دا سیستم عموماً په زغره‌والو وسایطو کې کارول کېږي او د مختلفو ماموریتونو لپاره مناسب دی.
          توانایي:
          منځنی واټن او ښه دقت لري، هم د دفاع او هم محدود حملوي عملیاتو لپاره کارول کېږي.
          ځانګړنې:
          متوازن وزن او ځواک
          د څو ماموریتونو لپاره مناسب
          ښه ثبات (stability)
          پرمختللی کنټرول سیستم</p>
        <div class="product-actions">
          <a href="./products/pr2.html"><button class="btn-detail">توضیحات</button></a>
        
        </div>
      </div>
    </article>

    <!-- محصول ۳ -->
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS2.jpg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>Heavy RCWS</h3>
        <p>
          Heavy RCWS یو دروند او قوي سیستم دی چې د لویو نظامي وسایطو لپاره ډیزاین شوی. دا د جګړې په اصلي ساحو کې کارول کېږي.
          توانایي:
          لوړ ځواک، اوږد واټن، او قوي هدف ویشتلو وړتیا لري.
          ځانګړنې:
          قوي جوړښت او لوړ مقاومت
          د سختو شرایطو لپاره مناسب
          اوږد عملیاتي واټن
          لوړ دقت
        </p>

        <div class="product-actions">
          <a href="./products/pr3.html"><button class="btn-detail">توضیحات</button></a>
          
        </div>
      </div>
    </article>
    <!-- محصول ۳ -->
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS4.jpeg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>Anti-UAV</h3>
        <p> 

        دا یو پرمختللی سیستم دی چې د مصنوعي ذکاوت (AI) مرسته کاروي ترڅو هدفونه په چټک ډول وپېژني او تعقیب کړي.
        توانایي:
        د چټک تحلیل او دقیق تعقیب وړتیا لري.
        ځانګړنې:
        هوښیار هدف پېژندنه
        اتومات تعقیب
        د معلوماتو چټک پروسس
        د انساني کنټرول ملاتړ
        </p>
        <div class="product-actions">
          <a href="./products/pr4.html"><button class="btn-detail">توضیحات</button></a>
          
        </div>
      </div>
    </article>
    <!-- محصول ۳ -->
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS5.jpg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>Naval RCWS</h3>
        <p>
          په سمندري چاپېریال کې د کار لپاره ځانګړی شوی. دا سیستم په کښتیو او جنګي بېړیو کې نصب کېږي.
          توانایي:
          د سمندر پر سطحه او نږدې ګواښونو پر وړاندې مؤثر دفاع کوي.
          ځانګړنې:
          د اوبو او زنګ پر وړاندې مقاومت
          ثبات حتی د څپو په وخت کې
          د سمندري شرایطو لپاره ځانګړی ډیزاین
          دوامداره عملیات
        </p>

        <div class="product-actions">
          <a href="./products/pr5.html"><button class="btn-detail">توضیحات</button></a>
          
        </div>
      </div>
    </article>
    <!-- محصول ۳ -->
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS6.jpeg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>Anti-Air RCWS</h3>
        <p>دا سیستم د هوايي هدفونو لپاره جوړ شوی، لکه ټیټ ارتفاع الوتونکي وسایل.
          توانایي:
          چټک حرکت کوونکي هدفونه تعقیب او هدف ګرځولی شي.
          ځانګړنې:
          لوړ سرعت تعقیب (tracking)
          دقیق هدف نیونه
          د حرکت وړ سیستم
          د هوايي دفاع لپاره مناسب</p>

        <div class="product-actions">
          <a href="./products/pr6.html"><button class="btn-detail">توضیحات</button></a>
          
        </div>
      </div>
    </article>
    <!-- محصول ۳ -->
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS7.jpeg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>Stabilized RCWS</h3>
        <p> داسې ډیزاین شوی چې حتی د وسایطو د حرکت پر مهال هم خپل هدف ثابت وساتي.
          توانایي:
          په حرکت کې لوړ دقت ساتي او هدف له لاسه نه ورکوي.
          ځانګړنې:
          اتومات ثبات (stabilization)
          د حرکت پر مهال دقیق هدف
          د کمپن کمول
          پرمختللې کنټرول ټکنالوژي
          </p>

        <div class="product-actions">
          <a href="./products/pr7.html"><button class="btn-detail">توضیحات</button></a>
          
        </div>
      </div>
    </article>
    <!-- محصول ۳ -->
    <article class="product-card">
      <div class="product-image">
        <img src="./asset/RCWS1.jpeg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>AI-Assisted RCWS</h3>
        <p> 

        دا یو پرمختللی سیستم دی چې د مصنوعي ذکاوت (AI) مرسته کاروي ترڅو هدفونه په چټک ډول وپېژني او تعقیب کړي.
        توانایي:
        د چټک تحلیل او دقیق تعقیب وړتیا لري.
        ځانګړنې:
        هوښیار هدف پېژندنه
        اتومات تعقیب
        د معلوماتو چټک پروسس
        د انساني کنټرول ملاتړ
        </p>

        <div class="product-actions">
          <a href="./products/pr9.html"><button class="btn-detail">توضیحات</button></a>
          
        </div>
      </div>
    </article>
    <!-- product 9 -->
    <article class="product-card">
      <div class=" Dual-Weapon RCWS">
        <img src="./asset/RCWS9.jpg" alt="Product Name">
      </div>
      <div class="product-info">
        <h3>Sensor-Integrated RCWS</h3>
        <p>
          دا سیستم پرمختللي سنسرونه لري چې هدف پېژندنه اسانه کوي، حتی په شپه یا خرابو شرایطو کې.
          توانایي:
          په هر ډول چاپېریال کې ښه کار کوي (ورځ/شپه).
          ځانګړنې:
          حرارتي او نوري سنسرونه
          د شپې لید (night vision)
          د هدف پېژندنه
          لوړ دقت
        </p>

        <div class="product-actions">
          <a href="./products/pr8.html"><button class="btn-detail">توضیحات</button></a>
          
        </div>
      </div>
    </article>
  </section>
</main>
<footer class="main-footer">
  <div class="footer-container">

    <div class="footer-box">
      <h3>اړیکه</h3>
      <p>📍 کابل، افغانستان</p>
      <p>📞 0700748864</p>
      <p>📧 info@alhamza.com</p>
    </div>

      <div class="footer-box">
      <h3>ټولنیزې پاڼې</h3>
      <div class="social-icons">
        <a href="#">Facebook 📘 </a>
        <a href="#">Twitter 🕊️</a>
        <a href="#">Instagram 📸</a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy 2026 الحمزة الیکترونیکي شرکت - ټول حقوق خوندي دي.</p>
  </div>
</footer>
</body>
</html>

