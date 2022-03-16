<?php include('path.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Front awesome link-->
    <script src="https://kit.fontawesome.com/4e17d14c86.js" crossorigin="anonymous"></script>
    <!--Google fonts link-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NSU Blogs</title>
  </head>
  <body>

  <!--header connection-->
  <?php include(ROOT_PATH. "/app/include/header.php")?>
  
    <!--page wapper starts-->
    <div class="page-wrapper">
      <!--content section starts-->
      <div class="content clearfix">
        <!--main-container-->
        <div class="main-content-wrapper">
          <div class="main-content single">
            <h2 class="post-title">
              25th Convocation Extended date of degree application
            </h2>
            <div class="post-content">
              <p>
                1. Students having completed all requires of their respective
                degree in or before the Fall-2021 semester and yet to submit
                degree application gor graduation through online to join the
                next convocation are requested to submit their degree
                application with in 15 March 2022.
              </p>
              <p>
                1. Students having completed all requires of their respective
                degree in or before the Fall-2021 semester and yet to submit
                degree application gor graduation through online to join the
                next convocation are requested to submit their degree
                application with in 15 March 2022.
              </p>
              <p>
                1. Students having completed all requires of their respective
                degree in or before the Fall-2021 semester and yet to submit
                degree application gor graduation through online to join the
                next convocation are requested to submit their degree
                application with in 15 March 2022.
              </p>
              <p>
                1. Students having completed all requires of their respective
                degree in or before the Fall-2021 semester and yet to submit
                degree application gor graduation through online to join the
                next convocation are requested to submit their degree
                application with in 15 March 2022.
              </p>
            </div>
            <!-- Comments section -->
            <section>
              <div>
                <h1>comments <span>( 3 )</span></h1>
              </div>
              <div class="comment-container" id="first-comment">
                <!-- first comment card start-->
                <div class="comment-card">
                  <h3 class="comment-title">The first comments</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Natus mollitia excepturi quidem! Autem, nemo veniam iste
                    optio vel odit quae?
                  </p>
                  <div class="comment-footer">
                    <div>Likes 123</div>
                    <div>Dislikes 123</div>
                    <div class="show-reply">Reply 2</div>
                  </div>
                  <!-- first comment card end -->
                </div>
                <!-- second comment card start-->
                <div
                  class="comment-container"
                  dataset="first-comment"
                  id="first-reply"
                >
                  <!-- first comment reply card start-->
                  <div class="comment-card">
                    <h3 class="comment-title">The first reply</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Natus mollitia excepturi quidem! Autem, nemo veniam iste
                      optio vel odit quae?
                    </p>
                    <div class="comment-footer">
                      <div>Likes 123</div>
                      <div>Dislikes 123</div>
                      <div class="show-reply">Reply 2</div>
                    </div>
                    <!-- first comment reply card end -->
                  </div>

                  <div
                    class="comment-container"
                    dataset="first-reply"
                    id="second-reply"
                  >
                    <!-- first comment card start-->
                    <div class="comment-card">
                      <h3 class="comment-title">The second reply</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Natus mollitia excepturi quidem! Autem, nemo
                        veniam iste optio vel odit quae?
                      </p>
                      <div class="comment-footer">
                        <div>Likes 123</div>
                        <div>Dislikes 123</div>
                        <div class="show-reply">Reply 2</div>
                      </div>
                      <!-- first comment card end -->
                    </div>
                    <!-- second comment card start-->
                    <div
                      class="comment-container"
                      dataset="first-comment"
                      id="second-comment"
                    >
                      <!-- first comment reply card start-->
                      <div class="comment-card">
                        <h3 class="comment-title">The first comments reply</h3>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Natus mollitia excepturi quidem! Autem, nemo
                          veniam iste optio vel odit quae?
                        </p>
                        <div class="comment-footer">
                          <div>Likes 123</div>
                          <div>Dislikes 123</div>
                          <div class="show-reply">Reply 2</div>
                        </div>
                        <!-- first comment reply card end -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!--main-container-->

        <!--sidebar section section starts -->
        <div class="sidebar single">
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
          <div class="comment">
            <textarea name="message" class="text-input contact-input" placeholder="Add your comment....."></textarea><br>
            <button type="submit" class="btn btn-big contact-btn">
                <i class="fas fa-envelope"></i> Submit 
            </button>
        </div>
        </div>
        <!--sidebar section section ends -->
      </div>
      <!--content section Ends-->
    </div>
    <!--page wapper ends-->

  <!--footer connection-->
  <?php include(ROOT_PATH. "/app/include/footer.php")?>

    <!--Jquary-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!--Slick corsousel-->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <!--custom scrip-->
    <script src="asstes/js/scripts.js"></script>
  </body>
</html>
