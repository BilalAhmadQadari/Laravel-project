<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <link rel="icon" href="./asset/logo.png" />
  <link rel="stylesheet" href="{{ asset('css/homePageStyle.css')}}">
  <link rel="stylesheet" href="{{ asset('css/about.css')}}">
  

</head>
<body>

  <!-- HEADER START -->
 
  <header>
    <div class="header-container">
      <div id="logo-and-text">
        <img src="./asset/logo.png" alt="د الحمزة شرکت لوګو" height="50" width="50"/>
        <p class="company-name">الحمزة د الیکترونیکي اسلحو تولیدي شرکت</p>
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
            <a href="login" class="btn-login">ننوتل</a>
            <a href="#" class="btn-register">نوی حساب</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- ABOUT SECTION -->
  <section class="about">
    <div class="container">

      <h1>زموږ منشور</h1>

      <p>
        الحمزة امارتي شرکت یو دولتي شرکت دی چې په کال ۱۴۰۰ کې په فعالیت پیل کړی دی.
        الحمزةامارتي شرکت یو له پرمختللو شرکتونو له جملې څخه دی، او د نړۍ له مختلفو نړیوالو شرکتونو سره 
        په تفاهم باندي د پرمختګ ستر پړاوونه تیر کړي دي.

      </p>

      <p>
        دا چې په اوس وخت کې د ټیکنالوژۍ اهمیت او ماهیت د ژوند په هره برخه کې څرکند دی،
         په خاص ډول بیا په نظامي برخه کې نو په همدې اساس الحمزةامارتي شرکت 
          د ټیکنالوژۍ په ډګر کې د نظامي پر ځان بسیایني له لپاره کار پیل کړ 
          او همدا یې له خپلو اولویتونو څخه وګرڅول
      </p>
      <h2>زموږ اهداف</h2>
      <ul>
        
        <li>د نظامي صنعت ته وده ور کول</li>
        <li>د نظام داستحکام په موخه د مختلفو دفاعي وسایلو تولیدول</li>
        <li>د افغان کدرونو جلب او د استعدادونو وده</li>
      </ul>

    </div>
  </section>


  <!-- FOOTER START -->
  <footer class="footer">
    <p>© 2026 MyWebsite. All rights reserved.</p>
  </footer>
  <!-- FOOTER END -->

</body>
</html>
