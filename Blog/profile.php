<!-- Define Root Path -->
<?php include('path.php'); ?>
<!-- include header -->
<?php include(ROOT_PATH . '/includes/_header.php'); ?>
<!-- include navbar -->
<?php include(ROOT_PATH . '/includes/_navbar.php'); ?>



<main class="container mtb-2">
  <section class="profile-container">
    <div class="profile-header">
      <!-- header container -->
      <div class="profile-header-container">
        <!-- user image -->
        <div class="profile-header-items">
          <figure>
            <img src="assets/image/avatar-profile-image.png" alt="user photo" width="144" height="144" />
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

<!-- footer -->
<?php include(ROOT_PATH . '/includes/_footer.php'); ?>