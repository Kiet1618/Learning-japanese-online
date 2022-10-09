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
    <link rel="stylesheet" href="styles/anime.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
                <h1 class="intro__tiltle">Learn Words from Anime</h1>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h2>Choose a course to start</h2>
                <div class="quiz__search">
                    <div class="search">Search</div>
                    <input type="text" aria-label="text">
                </div>
            </div>
            <div class="quiz__group">



                <table class="table">
                    <tr>

                        <th>Quiz</th>
                        <th>Link</th>
                    </tr>
                    <tr>
                        <td>Learn Words from Demon Slayer</td>
                        <td class="circle">
                            <a href="#">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Kaguya-sama: Love is War</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Attack on Titan</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Fullmetal Alchemist</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Haikyuu!!</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Gintama</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from My Hero Academia</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Hunter x Hunter</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Naruto</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Yuki Yuna is a Hero</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Learn Words from Black Clover</td>
                        <td class="circle">
                            <a href="">Start</a>
                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>

    <div class="darkmode">
        <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
        <!-- <i class="fa-solid fa-sun" id="toggleDark"></i> -->
        <!-- onclick="handleDarkMode(this)" -->
    </div>
    <script src="anime.js"></script>
</body>

</html>