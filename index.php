<?php require_once "UI/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Run Python, C/C++, Java, Php, html, css, javascript and other popular programming languages through our website.">
    <meta name="keywords" content="MEGA,MEGA Compiler, Compiler, Compiler Code, Code, Run, Run Code, Code Run, Online IDE, IDE, MEGA IDE, Online Code, Code Online, Java, Java Compiler, Php, Php Compiler, C++ Compiler, C++, C plus plus, C plus plus Compiler, C Compiler, Python Compiler, Python, Code Live, Live Code, Code Editor, Html Code Editor, Css Code Editor, Javascript Code Editor, Html, Css, Javascript Code Editor, js Code Editor.">
    <meta name="author" content="MEGA IDE">
    <link rel="stylesheet" href="UI/css/Home Page.css">
    <link rel="stylesheet" href="UI/css/Responsive Home Page.css">
    <link rel="stylesheet" href="UI/css/Sidebar Menu.css">
    <link rel="stylesheet" href="UI/css/Responsive Sidebar Menu.css">
    <link rel="stylesheet" href="UI/css/Mobile Bar.css">
    <link rel="stylesheet" href="UI/css/Responsive Mobile Bar.css">
    <link rel="shortcut icon" href="UI/asset/icon/logo.png">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- AOS Animation Link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JQuery CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <title>MEGA IDE | Home</title>
    <style>
        body{
          background: linear-gradient(#002729 , #00767a , #050c0c);
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        #preloader{
          background: rgba(0, 50, 64) url('asset/images/loading.gif') no-repeat center ;
          background-size: 50%;
          height: 100vh;
          width: 100%;
          position: fixed;
          z-index: 100;
        }
      </style>
</head>
<body>
    <div id="preloader"></div>
    <!-- Small Bar (Small Screen)-->
    <input type="checkbox" id="click" class="input10">
    <div class="navigation" data-aos="zoom-out">
        <a href="index.php">
          <img src="UI/asset/icon/home.png" alt="This is Home Logo">
        </a>
        <a href="UI/Delete Files.php" onclick="window.alert('Please login first?')">
          <img src="UI/asset/icon/layers.png" style="width: 30px; height: 30px;margin-top: 10px;" alt="This is Projects Logo">
        </a>
        <a href="UI/Html & Css & js Compiler.php" onclick="window.alert('Please login first?')">
          <img src="UI/asset/icon/code.png" alt="This is Html & Css & JS Logo">
        </a>
        <a href="UI/Java Compiler.php" onclick="window.alert('Please login first?')">
          <img src="UI/asset/icon/java.png" alt="This is Java Logo">
        </a>
        <a href="UI/C++ Compiler.php" onclick="window.alert('Please login first?')">
          <img src="UI/asset/icon/c plus plus.png" alt="This is C++ Logo">
        </a>
        <a href="UI/PHP Compiler.php" onclick="window.alert('Please login first?')">
          <img src="UI/asset/icon/php.png" alt="This is php Logo">
        </a>
        <a href="UI/Python Compiler.php" onclick="window.alert('Please login first?')">
          <img src="UI/asset/icon/python.png" alt="This is Python Logo">
        </a>
        <a href="UI/Contact US.php" onclick="window.alert('Please login first?')">
          <img src="UI/asset/icon/send.png" alt="This is Contact Logo">
        </a>
        <a href="UI/Login.php" onclick="window.alert('You are being redirected to the login page!')">
          <i class='bx bx-log-in' style="color: #00BFA6;font-size: 25px;margin-left: -5px;margin-top: 13px;" id="log_in"></i>
        </a>
        <label class="fas fa-plus" for="click"></label>
    </div>
    <!-- Large Bar (Large Screen) -->
<div class="sidebar">
    <div class="logo-details">
      <div class="icon">
        <img src="UI/asset/icon/logo.png" alt="" width="80" height="60">
      </div>
      <div class="logo_name">MEGA&nbsp;IDE</div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="index.php">
              <img src="UI/asset/icon/home.png" alt="This is Home Logo" style="margin-left: 8px;">
              <span class="links_name">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="UI/Delete Files.php" onclick="window.alert('Please login first?')">
              <img src="UI/asset/icon/layers.png" alt="This is Projects Logo" style="margin-left: 8px;scale: 0.8;">
              <span class="links_name">My Projects</span>
            </a>
            <span class="tooltip">My Projects</span>
        </li>
        <li>
            <a href="UI/Html & Css & js Compiler.php" onclick="window.alert('Please login first?')">
              <img src="UI/asset/icon/code.png" alt="This is Html & Css & JS Logo" style="margin-left: 8px;">
              <span class="links_name">Html / Css / Js Editor</span>
            </a>
            <span class="tooltip">Html / Css / Js Editor</span>
        </li>
        <li>
            <a href="UI/Java Compiler.php" onclick="window.alert('Please login first?')">
              <img src="UI/asset/icon/java.png" alt="This is Java Logo" style="margin-left: 8px;">
              <span class="links_name">Online Java Compiler</span>
            </a>
            <span class="tooltip">Online Java Compiler</span>
        </li>
        <li>
            <a href="UI/C++ Compiler.php" onclick="window.alert('Please login first?')">
              <img src="UI/asset/icon/c plus plus.png" alt="This is C++ Logo" style="margin-left: 8px;">
              <span class="links_name">Online C & C++ Compiler</span>
            </a>
            <span class="tooltip">Online C & C++ Compiler</span>
        </li>
        <li>
            <a href="UI/PHP Compiler.php" onclick="window.alert('Please login first?')">
              <img src="UI/asset/icon/php.png" alt="This is php Logo" style="margin-left: 8px;">
              <span class="links_name">Online PHP Compiler</span>
            </a>
            <span class="tooltip">Online PHP Compiler</span>
        </li>
        <li>
            <a href="UI/Python Compiler.php" onclick="window.alert('Please login first?')">
              <img src="UI/asset/icon/python.png" alt="This is Python Logo" style="margin-left: 8px;">
              <span class="links_name">Online Python Compiler</span>
            </a>
            <span class="tooltip">Online Python Compiler</span>
        </li>
        <li>
            <a href="UI/Contact US.php" onclick="window.alert('Please login first?')">
              <img src="UI/asset/icon/send.png" alt="This is Contact Logo" style="margin-left: 8px;">
              <span class="links_name">Contact US</span>
            </a>
            <span class="tooltip">Contact US</span>
        </li>
        <br><br><br><br>
        <li class="profile">
            <div class="profile-details">
              <i class='bx bx-user-circle' style='color:#ffffff;'></i>
                <div class="name_job">
                    <div class="name">MEGA IDE</div>
                <div class="job">Compiler Code</div>
                </div>
            </div>
               <a href="UI/Login.php" onclick="window.alert('You are being redirected to the login page!')"><i class='bx bx-log-in' style="color: #ffffff;" id="log_in"></i></a>
        </li>
    </ul>
</div>
<!-- Logo appear with Small Screen-->
<div class="logo5" 
    data-aos="fade-right"
    data-aos-offset="500"
    data-aos-easing="ease-in-sine">
    <img src="UI/asset/icon/logo.png" alt="" id="logo-img">
</div>
<!-- Main Page-->
<center>
<div class="home-page">
    <div class="first-page">
        <div class="article">
            <h1 class="title1">MEGA IDE<br>Compiler Code!</h1>
            <p class="paragraph">``Compiler Code Programmer's Second Home``</p>
            <h2 class="title2" data-text="Welcome...">Welcome...</h2>
            <button class="btn" onclick="myfunction();" id="Btn">Learn More</button>
            <p id="learn">Are tools typically used by programmers and web developers to write and edit code.<br>
            They are used for developing software and apps as well as other web development purposes.</p>
        </div>
        <div class="photo">
            <img src="UI/asset/icon/Hand coding-bro.png" alt="This is Code image" data-aos="zoom-in">
        </div>
    </div>
<!-- 01 Free To Use-->
    <h2 class="features">Features</h2>
    <div class="second-page">
        <div class="photo1">
            <img src="UI/asset/icon/Code typing-pana.png" alt="This is Code image" data-aos="zoom-in">
        </div>
        <div class="article1">
            <h1 class="main">01</h1>
            <h2>FREE TO USE</h2>
            <p>This website is completly free to use!</p>
            <p>You can compile your codes without having to pay anything!</p>
            <p>All you have to do is sign up then you are ready to go!</p>
        </div>
    </div>
<!-- 02 Organized-->
    <div class="third-page">
        <div class="article2">
            <h1 class="main">02</h1>
            <h2>ORGANIZED</h2>
            <p>You don't have to warry about organizing your work!</p>
            <p>We keep all of your work organized, we make it<br>easy for you to write/edit your codes!</p>
        </div>
        <div class="photo2">
            <img src="UI/asset/icon/Programmer.png" alt="This is Code image" data-aos="zoom-in">
        </div>
    </div>
<!-- 03 Languages-->
    <div class="forth-page">
        <div class="photo3">
            <img src="UI/asset/icon/Programmer-amico.png" alt="This is Code image" data-aos="zoom-in">
        </div>
        <div class="article3">
            <h1 class="main">03</h1>
            <h2>LANGUAGES</h2>
            <p>We support many languages!<br>Html, Css, Js, Java, C, C++, PHP, Python!</p>
        </div>
    </div>
<!-- 04 FAQs-->
<section>
    <h2 class="title">FAQs</h2>
    <div class="faq">
        <div class="question">
            <h3>What is this site and how do i use it ?</h3>
            <i class='bx bx-chevrons-down' style='color:#ffffff'  ></i>
        </div>
        <div class="answer">
            <p>This site provides you the ability to<span> Edit and Develop </span>a simple project, you call it a mini project.
                All you have to do so it register your account and create  a new workshop to start writing and editing
                your own codes!
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="question">
            <h3>Is this website free ?</h3>
            <i class='bx bx-chevrons-down' style='color:#ffffff'  ></i>
        </div>
        <div class="answer">
            <p>This answer is<span> Yes</span>, this website is completly free to use to all users, you don't have
                to pay anything to have free access to all of our features.
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="question">
            <h3>What languages do you support ?</h3>
            <i class='bx bx-chevrons-down' style='color:#ffffff'  ></i>
        </div>
        <div class="answer">
            <p>Our editor support a variety of languages, it supports<span> most </span>of the common programming languages,
                 such as Java, C, C++, Html, Css, Js, Python, PHP.
            </p>
        </div>
    </div>
    <div class="faq">
        <div class="question">
            <h3>Can i save and edit my project ?</h3>
            <i class='bx bx-chevrons-down' style='color:#ffffff'  ></i>
        </div>
        <div class="answer">
            <p><span>Yes. </span>All of your projects are saved and stored in our database, you can return to them
                 and edit them at any time you want.
            </p>
        </div>
    </div>
</section>
<!-- Footer Page -->
<footer>
    <h3>CopyRight <span style="color: #ffe600;">&copy;</span> 2023 by MEGA IDE<br>All rights reserved</h3>
</footer>
</div>
</center>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="UI/javascript/Sidebar Menu.js"></script>
<Script src="UI/javascript/Preloader.js"></Script>
<script src="UI/javascript/FAQs.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>