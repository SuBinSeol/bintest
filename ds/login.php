<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SIGN UP</title>
        <link rel="stylesheet" href="css/components.css">
        <link rel="stylesheet" href="css/icons.css">
        <link rel="stylesheet" href="css/responsee.css">
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/lightcase.css">
        <link rel="stylesheet" href="css/main1.css">
        <link rel="stylesheet" href="css/template-style1.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript" src="js/navigation_bar.js"></script>
    </head>
<body class="size-1280">
  <header role="banner" class="position-absolute">
    <nav class="background-transparent background-primary-dott full-width sticky">
      <div class="logo hide-l hide-xl hide-xxl">
         <a href="index.html" class="logo">
          <img class="logo-dark" src="img/dream/logo123.PNG" alt="">
        </a>
      </div>
      <div id="login" style='float: right;'>
        <ul class="main1" style='position: absolute;left: 80%;top: 10%;'>
          <div class="loginlog" id="loginlog"></div>
          <script>cc();</script>
        </ul>
      </div>
      <div class="top-nav"> 
        <div class="top-nav left-menu">
          <ul class="right top-ul chevron">
             <li><a href="index.php">Home</a></li>
             <li><a href="about-us.php">About Us</a></li>
             <li><a href="contact.php">Request</a></li>
          </ul>
       </div>
        <ul class="logo-menu">
          <a href="index.php" class="logo">
            <img class="logo-white" src="img/dream/logo123.PNG" alt="">
            <img class="logo-dark" src="img/dream/logo123.PNG" alt="">
          </a>
        </ul>
        
        <div class="top-nav right-menu">
          <ul class="top-ul chevron">
             <li>
               <a href="#">Community</a>
               <ul>
                 <li><a href="story.php">Story</a></li>
                 <li><a href="member.php">Member</a></li>
               </ul>
             </li>
             <li><a href="gallery.php">Gallery</a></li>
             <li><a href="services.php">Location</a></li>
          </ul> 
       </div>
      </div>
    </nav>
  </header>

    <main role="main">
        <article>    
          <header class="section background-image text-center" style="background-image:url(img/dream/backg.jpg)">
            <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
              Login
            </h1>
            <p class="animated-element text-white">로그인</p>
            <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
          </header>
          <div class="s-12 m-12 l-3 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>로그인</b></h3>
            <form class="customform text-white" action="/ds/php/login_ok.php" method="post">
                <input type="text" name="id" id="id" placeholder="ID">
                <br>
                <input type="password" name="pw" id="pw" placeholder="Password"><br>
                <button class="button border-radius text-white background-primary" name="button" id="button" type="submit">로그인</button>
                <br>
                <a href="signup.html" style="color: #333;">회원가입</a>
                <a style="text-decoration:none" >&nbspㅣ</a>
                <a href="id_find.php" style="color: #333;">&nbspID/ 찾기</a>
                <a style="text-decoration:none">&nbspㅣ</a>
                <a href="pw_find.php" style="color: #333;">PW 찾기</a>
            </form>
            </br></br></br>
          </div> 
          <footer>
            <section class="padding-2x background-dark full-width">
              <div class="s-18 l-10">
                <img class="logo-menu" src="img/dream/logo123.PNG" alt="">
                <br>
                <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 주소 : 부산광역시 부산진구 가야3동 엄광로 176 동의대학교 건윤관(21번 건물)</p>
                <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 이용시간 : 월 ~ 금 9:00 ~ 17:00</p>
                <p class="text-size-18">&nbsp&nbsp&nbsp&nbsp 이용문의 : 051-890-4375~4376</p>
              </div>  
            </section>
          </footer>
        </article>
      </main>
    
</body>

</html>