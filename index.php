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
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css" />
  </head>
  <body>
  
    <section class="header">
      <nav>
        <a href="index.html"
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
    <section class="suggest">
      <div class="root">
        <div class="container">
          <a href="https://mcbooks.vn/san-pham/28-ngay-tu-hoc-tieng-nhat/">
            <div class="card">
              <h1 class="card-title">học tiếng nhật mỗi ngày</h1>
              <div class="image">
                <img src="./img/hoc_tieng_nhat.png" alt="" />
              </div>

              <p class="card-content">
                Việc tự học ngoại ngữ nói chung và tự học tiếng Nhật nói riêng
                có một ưu điểm là giúp người học cảm thấy tự do, thoải mái với
                việc học và không gây sự gò bó, căng thẳng. Tuy nhiên, cũng bởi
                vậy mà nếu như không có một kế hoạch học tập cũng như định hướng
                cụ thể thì người học thường rất dễ chán nản, trì hoãn, lúng túng
                trong việc học và thậm chí là bỏ cuộc giữa chừng. Bởi vậy, việc
                có những cuốn sách, tài liệu học tập giúp bạn có một lộ trình
                học đúng đắn và chi tiết sẽ giúp rút ngắn thời gian cũng như
                nâng cao hiệu quả học tập. Một khi đã xây dựng được thói quen tự
                học và có một nền tảng kiến thức cơ bản thì việc học tiếng Nhật
                sẽ trở nên dễ dàng hơn rất nhiều và giúp bạn tiếp tục phát triển
                lên những level – trình độ cao hơn.
              </p>
            </div>
          </a>
          <a href="https://tokyodayroi.com/news/Tu-vung-tieng-Nhat-chuyen-nganh-cong-nghe-thong-tin-IT.500.html">
            <div class="card">
              <h1 class="card-title">tiếng nhật trong it</h1>
              <div class="image">
                <img src="./img/it.jpg" alt="" />
              </div>

              <p class="card-content">
                Tổng hợp từ vựng tiếng nhật chuyên ngành it cơ bản thường dùng
                trong công việc hàng ngày. Đây là vốn từ vựng tiếng Nhật về
                ngành công nghệ thông tin mà trong quá trình làm việc mình tích
                lũy được. Hy vọng sẽ có ích cho các bạn đang theo học ngành IT
                để sang Nhật làm việc.
              </p>
            </div>
          </a>

          <div class="card">
            <h1 class="card-title">bài hát tiếng nhật</h1>
            <div class="image">
              <img src="./img/bai_hat.jpg" alt="" />
            </div>

            <p class="card-content">
              Tháng 6 năm 2021, BTS đã phát hành album 23 bài hát bằng tiếng
              Nhật. Album đã được bán với số lượng kỷ lục 572,000 bản, fan BTS
              đang học...
            </p>
          </div>
          <div class="card">
            <h1 class="card-title">kinh nghiệm học tiếng nhật</h1>
            <div class="image">
              <img src="./img/kinh_nghiem.jpg" alt="" />
            </div>

            <p class="card-content">
              Dẫu biết rằng tiếng Nhật rất quan trọng nhưng làm sao để có thể
              tiếp thu tốt kiến thức và nhanh chóng áp dụng vào thực tiễn mới là
              vấn đề đáng quan tâm. Nếu bạn vẫn đang cảm thấy lo lắng vì chưa
              biết cách làm sao để có thể nói thông, viết thạo tiếng Nhật thì
              đừng nên bỏ qua những chia sẻ về phương pháp học tiếng Nhật hiệu
              quả mà chúng tôi cung cấp sau đây.
            </p>
          </div>

          <div class="card">
            <h1 class="card-title">đề thi năng lực tiếng nhật</h1>
            <div class="image">
              <img src="./img/de_thi.jpg" alt="" />
            </div>

            <p class="card-content">
              Kỳ thi năng lực tiếng Nhật JLPT 7/2022 sẽ diễn ra vào ngày
              3/7/2022, và như mọi năm ngay sau khi có Đáp án Đề thi thì Cẩm
              Nang Nhật Bản sẽ cập nhật ngay cho các bạn tại đây nhanh nhất có
              thể
            </p>
          </div>
          

          <div class="card">
            <h1 class="card-title">văn hóa nhật bản</h1>
            <div class="image">
              <img src="./img/van_hoa.png" alt="" />
            </div>

            <p class="card-content">
              Việc tự học ngoại ngữ nói chung và tự học tiếng Nhật nói riêng có
              một ưu điểm là giúp người học cảm thấy tự do, thoải mái với việc
              học và không gây sự gò bó, căng thẳng. Tuy nhiên, cũng bởi vậy mà
              nếu như không có một kế hoạch học tập cũng như định hướng cụ thể
              thì người học thường rất dễ chán nản, trì hoãn, lúng túng trong
              việc học và thậm chí là bỏ cuộc giữa chừng. Bởi vậy, việc có những
              cuốn sách, tài liệu học tập giúp bạn có một lộ trình học đúng đắn
              và chi tiết sẽ giúp rút ngắn thời gian cũng như nâng cao hiệu quả
              học tập. Một khi đã xây dựng được thói quen tự học và có một nền
              tảng kiến thức cơ bản thì việc học tiếng Nhật sẽ trở nên dễ dàng
              hơn rất nhiều và giúp bạn tiếp tục phát triển lên những level –
              trình độ cao hơn.
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>