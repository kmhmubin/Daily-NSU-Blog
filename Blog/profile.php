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

    <main class="container mtb-2">
      <section class="profile-container">
        <div class="profile-header">
          <!-- header container -->
          <div class="profile-header-container">
            <!-- user image -->
            <div class="profile-header-items">
              <figure>
                <img
                  src="assets/images/avatar-profile-image.png"
                  alt="user photo"
                  width="144"
                  height="144"
                />
              </figure>
            </div>
            <!-- User name and taglines -->
            <div class="profile-header-items">
              <h2>John doubleval</h2>
              <h3>Useless Persona</h3>
              <p>
                <i class="fa-solid fa-location-dot"></i>
                Bangladesh
              </p>
              <p>
                <i class="fa-solid fa-calendar-day"></i>
                January 1, 2021
              </p>
            </div>
            <!-- edit button with icon -->
            <div class="profile-header-items">
              <a href="edit-profile.php" class="btn" role="button">
                <i class="fas fa-edit"></i>
                Edit Profile
              </a>
            </div>
          </div>
        </div>
        <!-- User About & Social section -->
        <div class="profile-body">
          <!-- social links -->
          <div class="social-media-list">
            <ul>
              <li>
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
          <hr />
          <!-- bio -->
          <div class="user-bio">
            <h4>About Me</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
              facilis similique vel nobis fuga placeat suscipit ullam maiores
              voluptates, alias quibusdam et iusto laborum quidem ratione est
              fugiat repellendus beatae!
            </p>
          </div>
        </div>
        <!-- User published article section -->
        <div class="profile-articles">
          <div>
            <h3>Articles</h3>
            <hr />
          </div>
          <!-- user posts -->
          <div class="user-post">
            <a href="#">
              <h2>How My Startup Was Almost Acquired by Facebook</h2>
            </a>
          </div>
          <div class="user-post">
            <a href="#">
              <h2>How My Startup Was Almost Acquired by Facebook</h2>
            </a>
          </div>
          <div class="user-post">
            <a href="#">
              <h2>How My Startup Was Almost Acquired by Facebook</h2>
            </a>
          </div>
          <div class="user-post">
            <a href="#">
              <h2>How My Startup Was Almost Acquired by Facebook</h2>
            </a>
          </div>
        </div>
      </section>
    </main>

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
    <script src="assets/js/scripts.js"></script>
  </body>
</html>
