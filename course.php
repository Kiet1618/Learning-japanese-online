<!DOCTYPE html>
<html lang="en">
  <?php session_start() ?>
<?php 
include 'header.php' 
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/course.css" />
    <title>Document</title>
  </head>
  <body>
    <section class="header">
      <nav>
        <a href="index.php"
          ><img
            src="https://img.icons8.com/fluent/2x/homer-simpson.png"
            alt="logo"
        /></a>
        <div class="navBar">
          <a href="course.php">course</a>
          <a href="quizz_main.php">quiz</a>
          <a href="anime.php">anime</a>
          <a href="">contest</a>
          <a href="">forum</a>
         
        </div>
        <div class="right">
        <?php if(isset($_SESSION['login_id'])): ?>
                <div class ="right">
            <button><?php echo ucwords($_SESSION['login_firstname']) ?></button>   
            <button onclick="location.href='ajax.php?action=logout'">Đăng xuất</button></div>
            <?php else: ?>
                <div class ="right"><button onclick="location.href='http:login.php'">Đăng nhập</button></div>
            <?php endif; ?>
        </div>
      </nav>
    </section>
    <div class="middle">
      <div class="intro__course">
        <h1 class="intro__tiltle">Course</h1>
      </div>
    </div>
    <div class="container">
      <div class="heading">
        <h2>Choose a course to start</h2>
        </div>
      <div class="course__group">
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a>
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a>
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a>
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a> 
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a>
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a> 
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a> 
        <a href="">
          <div class="course">
            <img class="course__img" src="./img/course__img1.jpeg" alt="" />
            <span class="course__name">Alphabet Course</span>
          </div>
        </a>
        
        
        
      </div>
    </div>
    
    <script src="./app.js"></script>
  </body>
</html>
