@extends('layouts.app')
@section('title','Home-Page')
@section('content')

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

@endsection
