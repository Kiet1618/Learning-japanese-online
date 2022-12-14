<!DOCTYPE html>
<html lang="en">
    <?php session_start() ?>
    <?php 
    include 'header.php' 
    ?>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/quizz.css">
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
   
    <div id="content">
        <div class="middle">
            <div class="intro__course">
                <h1 class="intro__tiltle">Quiz</h1>
            </div>
            <div class="quiz-container" id="quiz">
                <div class="quiz-header">
                  <h2 id="question">Question text</h2>
                  <ul>
                    <li>
                        <div class="option">
                            <input type="radio" name="answer"  id="a" class="answer">
                            <label for="a" id="a_text">Question</label>
        
                        </div>
                    </li>
          
                    <li>
                        <div class="option">
                            <input type="radio" name="answer" id="b" class="answer">
                            <label for="b" id="b_text">Question</label>
                        </div>
                     
                    </li>
          
                    <li>
                        <div class="option">
                            <input type="radio" name="answer" id="c" class="answer">
                            <label for="c" id="c_text">Question</label>
                        </div>
                    </li>
          
                    <li>
                        <div class="option">
                            <input type="radio" name="answer" id="d" class="answer">
                            <label for="d" id="d_text">Question</label>
                        </div>
                    </li>
                  </ul>
                </div>
                <button id="submit">Submit</button>
                <script src="./quizz.js"></script>
            </div>

        </div>
        
    </div>

   
    
</body>
</html>