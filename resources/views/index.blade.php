<!DOCTYPE html>
<html lang="ps" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  
  <title>الحمزة الیکترونیکي اسلحو تولیدي شرکت</title>
  <meta name="description" content="الحمزة شرکت په افغانستان کې د پرمختللو دفاعي او اتوماتیک نظامي سیستمونو وړاندې کونکی دی.">
  <meta name="keywords" content=" نظامي وسایل، خیبر۱۳۳، الیکترونیکي وسلې، افغانستان">
  
  <link rel="icon" href="./asset/logo.png" />
  <link rel="stylesheet" href="{{ asset('css/homePageStyle.css')}}">

</head>

<body>

<header>
  <div class="header-container">
    <div id="logo-and-text">
      <!-- <img src="{{ asset('images/logo.png')}} alt="د الحمزة شرکت لوګو" height="50" width="50"/> -->
      <img src= "{{ asset('images/logo.png') }}" alt="logo of company" height="50" width="50"/> 
      <p class="company-name">الحمزة امارتي د اسلحود تولید شرکت</p>
      <!-- <img src="{{ asset('images/flag.jpg') }}" id="flagOfImarat" alt="flagOfImart"  width= "80" height="50"> -->
    </div>

    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">☰</label>

    <nav aria-label="Main Navigation">
      <ul>
        <li><a href="/index" class="active">اصلي پاڼه</a></li>
        <li><a href="/product">تولیدات</a></li>
        <li><a href="/about">زموږ په اړه</a></li>
        <li class="auth-links">
          <a href="login" class="btn-login">ننوتل</a>
          <a href="#" class="btn-register">نوی حساب</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<main>
  
  <section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>زموږ هدف په نظامي برخه کې په ځان بسیا کول دي</h1>
      <p>موږ د دفاعي او خودکاره سیستمونو په برخه کې پرمختللي اتومات وسایل وړاندې کوو.</p>
      <a href="#products" class="hero-btn">تولیدات وګورئ</a>
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section id="products" class="products-section">
    <div class="container">
      <h2 class="section-title">مشهور تولیدات</h2>
      <p class="section-subtitle">د لوړ کیفیت او پرمختللې ټیکنالوژۍ لرونکي وسایل</p>

      <div class="products-grid">

        <article class="products-card">
          <div class="img-box">
            <img src="./asset/wide rcws.png" alt="خیبر-۱۳۳">
          </div>
          <div class="card-info">
            <h3>خیبر-۱۳۳</h3>
            <p>د ځمکنیو عملیاتو لپاره پرمختللی او هوښیار سیسټم.</p>
            <div class="card-footer">
              <span class="liked">خوښ شوی</span>
              <span class="rating">1.9m ★★★★☆</span>
            </div>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="products-card">
          <div class="img-box">
            <img src="./asset/grenade rcws.jpg" alt="الفلاح-۳۵">
          </div>
          <div class="card-info">
            <h3>خیبر ۱۳۳ - ب</h3>
            <p>د ثقیله وسلو د کنټرول لپاره عصري ټیکنالوژي.</p>
            <div class="card-footer">
              <span class="liked">خوښ شوی</span>
              <span class="rating">2.1m ★★★★★</span>
            </div>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="products-card">
          <div class="img-box">
            <img src="./asset/huge rcws.webp" alt="فاتح-۳۲">
          </div>
          <div class="card-info">
            <h3>فاتح-۳۲</h3>
            <p>د شپې او ورځې عملیاتو لپاره ځانګړی ډیزاین.</p>
            <div class="card-footer">
              <span class="liked">خوښ شوی</span>
              <span class="rating">1.5m ★★★★☆</span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
</main>

<section class="testimonials">
  <h2>د هیوادوالو نظرونه</h2>
  <p class="subtitle">تاسو کولی سی زموږ د تولیداتو اړوند خپل نظرونه راسره شریک کړی</p>

  <div class="container">

    <div class="card">
      <img src="./asset/rohullah.jpeg">
      <p>
        “زه د الحمزة امارتي شرکت هلي ځلي د نظامي تولید په برخه
         کې ستایم او ور څخه مننه کوم چې په کمو امکاناتو يې ډېر پرمختللی وسایل تولید کړي او لا یې 
          هم ګړندی هلي ځلي رواني ساتلي دي د لا پر مختک په هیله یې یو.”
      </p>
      <h3>انجینر روح اللّه امین</h3>
      <span>۱۳۵ استخباراتو ریاست تخنیکي معاوین</span>
    </div>

    <div class="card">
      <img src="./asset/diplomat.jpeg">
      <p>
        “  الحمزة امارتي شرکت یو له عصري تولیدي شرکتونو له جملي څخه دی،
         جې نه یواځي دا چې په خپله برخه کې ساری نه لري بلکي د افغاني استعدادونو د جلب 
         یوازینی  منبع ده چې په زیاته اندازه افغاني کدرونه یې په کار ګمارلي دي.
      </p>
      <h3>ډیپلوماټ جاراللّه جاهد</h3>
      <span>د ننګرهار ولایت د والي مشاور</span>
    </div>

    <div class="card">
      <img src="./asset/Obaid.jpg">
      <p>
        “ زه د یو هیوادوال په حیث په خپل اسلامي نظام باندي باور لرم چې دوی به د ولس او نظام د ساتني او 
        لپاره هره ممکنه هڅه وکړي او د ولس په ملګرتیا به مو قافله د بریالیتوب تر سرحده رسوي رسوي.
         بیا هم له الحمزةامارتي شرکت څخه مننه کوم چې هیوادوالو ته د خپلو خدماتو څخه خبرداری ورکوي.
      </p>
      <h3>مولوي عبیداللّه عابد</h3>
      <span>یو تن دیني عالم</span>
    </div>

  </div>
</section>


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

