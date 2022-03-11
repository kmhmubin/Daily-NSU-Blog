<!-- Define Root Path -->
<?php include('path.php'); ?>
<!-- include header -->
<?php include(ROOT_PATH . '/includes/_header.php'); ?>
<!-- include navbar -->
<?php include(ROOT_PATH . '/includes/_navbar.php'); ?>


<!--page wapper starts-->
<div class="page-wrapper">
  <!--post slider-->
  <div class="container mtb-2">
    <h1 class="slider-title">Discussion Board</h1>

    <div class="profile-articles">
      <!-- user posts -->
      <div class="user-post">
        <a href="<?php echo BASE_URL . "threadlist.php" ?>">
          <h2>News & Announcements</h2>
          <p>Latest news and updates!</p>
        </a>
      </div>
      <div class="user-post">
        <a href="<?php echo BASE_URL . "threadlist.php" ?>">
          <h2>General Discussion</h2>
          <p>Ask a question, post a suggestion, start a discussion</p>
        </a>
      </div>
      <div class="user-post">
        <a href="<?php echo BASE_URL . "threadlist.php" ?>">
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
        <img src="assets/image/convocation.jpg" alt="" class="post-img" />
        <div class="post-preview">
          <h2>
            <a href="<?php echo BASE_URL . "single.php" ?>">25th Convocation Extended date of degree application</a>
          </h2>
          <i class="far fa-user"> MS. Kabir</i>
          &nbsp;
          <i class="far fa-calendar"> Mar 7, 2022</i>
          <p class="preview-text">
            1. Students having completed all requires of their respective
            degree in or before the Fall-2021 semester and yet to submit
            degree application gor graduation through online to join the
            next convocation are requested to submit their degree
            application with in 15 March 2022.
          </p>
          <a href="<?php echo BASE_URL . "single.php" ?>" class="btn read-more">Read More</a>
        </div>
      </div>

      <div class="post clearfix">
        <img src="assets/image/convocation.jpg" alt="" class="post-img" />
        <div class="post-preview">
          <h2>
            <a href="<?php echo BASE_URL . "single.php" ?>">25th Convocation Extended date of degree application</a>
          </h2>
          <i class="far fa-user"> MS. Kabir</i>
          &nbsp;
          <i class="far fa-calendar"> Mar 7, 2022</i>
          <p class="preview-text">
            1. Students having completed all requires of their respective
            degree in or before the Fall-2021 semester and yet to submit
            degree application gor graduation through online to join the
            next convocation are requested to submit their degree
            application with in 15 March 2022.
          </p>
          <a href="<?php echo BASE_URL . "single.php" ?>" class="btn read-more">Read More</a>
        </div>
      </div>

      <div class="post clearfix">
        <img src="assets/image/convocation.jpg" alt="" class="post-img" />
        <div class="post-preview">
          <h2>
            <a href="<?php echo BASE_URL . "single.php" ?>">25th Convocation Extended date of degree application</a>
          </h2>
          <i class="far fa-user"> MS. Kabir</i>
          &nbsp;
          <i class="far fa-calendar"> Mar 7, 2022</i>
          <p class="preview-text">
            1. Students having completed all requires of their respective
            degree in or before the Fall-2021 semester and yet to submit
            degree application gor graduation through online to join the
            next convocation are requested to submit their degree
            application with in 15 March 2022.
          </p>
          <a href="<?php echo BASE_URL . "single.php" ?>" class="btn read-more">Read More</a>
        </div>
      </div>
    </div>
    <!--main-container-->
    <div class="sidebar">
      <div class="section scarch">
        <h2 class="section-title">Scarch</h2>
        <form action="home-page.html" method="post">
          <input type="text" name="scarch-term" class="text-input" placeholder="Scarch...." /><br />
        </form>
      </div>
      <div class="section topics">
        <h2 class="section-title">Topics</h2>
        <ul>
          <li><a href="">Academic</a></li>
          <li><a href="">Examinations</a></li>
          <li><a href="">Noties</a></li>
          <li><a href="">Rescarch</a></li>
          <li><a href="">Campus Job</a></li>
          <li><a href="">Motivation</a></li>
          <li><a href="">Life lessom</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--content section Ends-->
</div>
<!--page wapper ends-->

<!-- footer -->
<?php include(ROOT_PATH . '/includes/_footer.php'); ?>