<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>الحمزة الیکترونیکي اسلحو تولیدي شرکت</title>
    <meta name="description" content="الحمزة شرکت په افغانستان کې د پرمختللو دفاعي او اتوماتیک نظامي سیستمونو وړاندې کونکی دی.">
    <meta name="keywords" content=" نظامي وسایل، خیبر۱۳۳، الیکترونیکي وسلې، افغانستان">
    
    <link rel="icon" href="{{ asset('images/logo.png')}}"/>
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
            @yield('content')
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