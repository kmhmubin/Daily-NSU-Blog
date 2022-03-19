<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/topics.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <!--Font awesome link-->
  <script src="https://kit.fontawesome.com/4e17d14c86.js" crossorigin="anonymous"></script>
  <!--Google fonts link-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <!--Custom CSS Styling-->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>NSUer's Blog</title>
</head>

<body>

  <!--header connection-->
  <?php
  include(ROOT_PATH . "/app/includes/header.php");
  include(ROOT_PATH . "/app/includes/messages.php");
  ?>

  <!--page wapper starts-->
  <div class="page-wrapper">
    <!--post slider-->
    <div class="container mtb-2">
      <h1 class="slider-title text-center">Discussion Board</h1>

      <div class="profile-articles">
        <!-- user posts -->
        <div class="user-post">
          <a href="discussion.php">
            <h2>News & Announcements</h2>
            <p>Latest news and updates!</p>
          </a>
        </div>
        <div class="user-post">
          <a href="discussion.php">
            <h2>General Discussion</h2>
            <p>Ask a question, post a suggestion, start a discussion</p>
          </a>
        </div>
        <div class="user-post">
          <a href="discussion.php">
            <h2>Course Review</h2>
            <p>Share your experience with the course</p>
          </a>
        </div>
      </div>
    </div>
    <!--post slider-->

    <!--content section starts-->
    <div class="content clearfix">
      <!--main-container-->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Post</h1>

        <div class="post clearfix">
          <img src="assets/images/convocation.jpg" alt="" class="post-img" />
          <div class="post-preview">
            <h2>
              <a href="single.php">25th Convocation Extended date of degree application</a>
            </h2>
            <i class="far fa-user"> MS. Kabir</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 7, 2022</i>
            <p class="preview-text">
              1. Students having completed all requires of their respective
              degree in or before the Fall-2021 semester and yet to submit
              degree application for graduation through online.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/convocation.jpg" alt="" class="post-img" />
          <div class="post-preview">
            <h2>
              <a href="single.php">25th Convocation Extended date of degree application</a>
            </h2>
            <i class="far fa-user"> MS. Kabir</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 7, 2022</i>
            <p class="preview-text">
              1. Students having completed all requires of their respective
              degree in or before the Fall-2021 semester and yet to submit
              degree application for graduation through online.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/convocation.jpg" alt="" class="post-img" />
          <div class="post-preview">
            <h2>
              <a href="single.php">25th Convocation Extended date of degree application</a>
            </h2>
            <i class="far fa-user"> MS. Kabir</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 7, 2022</i>
            <p class="preview-text">
              1. Students having completed all requires of their respective
              degree in or before the Fall-2021 semester and yet to submit
              degree application for graduation through online.
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>
      </div>
      <!--main-container-->
      <div class="sidebar">
        <div class="section scarch">
          <h2 class="section-title">Scarch</h2>
          <form action="index.php" method="post">
            <input type="text" name="scarch-term" class="text-input" placeholder="Scarch...." /><br />
          </form>
        </div>
        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $key => $topic) : ?>

              <li><a href=""><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>

          </ul>
        </div>
      </div>
    </div>
    <!--content section Ends-->
  </div>
  <!--page wapper ends-->

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

  <!--Jquary-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!--Slick corsousel-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!--custom scrip-->
  <script src="assets/js/scripts.js"></script>
</body>

</html>