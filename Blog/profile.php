<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Front awesome link-->
    <script
      src="https://kit.fontawesome.com/4e17d14c86.js"
      crossorigin="anonymous"
    ></script>
    <!--Google fonts link-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Trirong"
    />
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="css/style.css" />
    <title>NSU Blogs</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <h1 class="logo-text"><span>NSUer's</span> Blogs</h1>
      </div>
      <i class="fa fa-bars menu-shift"></i>
      <ul class="nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Service</a></li>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            User Name
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <main class="container mtb-2">
      <section class="profile-container">
        <div class="profile-header">
          <!-- header container -->
          <div class="profile-header-container">
            <!-- user image -->
            <div class="profile-header-items">
              <figure>
                <img
                  src="image/avatar-profile-image.png"
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
              <a href="edit-profile.html" class="btn" role="button">
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

    <!--footer starts-->
    <div class="footer">
      <div class="footer-content">
        <div class="footer-section about">
          <h1 class="logo-text"><span>NSUer's</span> Blogs</h1>
          <p>
            This website is only for NSU student. On this platfrom students a
            free to share their various ideas and post their blogs.
          </p>
          <div class="contact">
            <span>North South University</span><br />
            <span
              ><i class="fa-solid fa-location-dot"></i> Bashundhara, Dhaka-1229,
              Bangladesh</span
            ><br />
            <span><i class="fas fa-phone"></i> +880-2-55668200</span><br />
            <span
              ><i class="fas fa-envelope"></i> registrar@northsouth.edu</span
            >
          </div>
        </div>
        <br />
        <div class="footer-section links">
          <h2>Quick Links</h2>
          <br />
          <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a
          ><br /><br />
          <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a
          ><br /><br />
          <a href="#"><i class="fa-brands fa-instagram-square"></i> Instagram</a
          ><br /><br />
          <a href="#"><i class="fab fa-youtube"></i> Youtube</a>
        </div>
        <div class="footer-section contact-form">
          <h2>Contact Us</h2>
          <br />
          <form action="home-page.html" method="post">
            <input
              type="email"
              name="email"
              class="text-input contact-input"
              placeholder="Your email Address...."
            /><br />
            <textarea
              name="message"
              class="text-input contact-input"
              placeholder="Your message...."
            ></textarea
            ><br />
            <button type="submit" class="btn btn-big">
              <i class="fas fa-envelope"></i> Send
            </button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        &copy;All Rights Reserved. Designed By
        <a href="#"><b>CSE482 Project Team</b></a>
      </div>
    </div>

    <!--footer ends-->
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
    <script src="js/scripts.js"></script>
  </body>
</html>
