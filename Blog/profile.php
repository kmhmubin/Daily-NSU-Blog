<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/users.php');
// grab the info from the database
if (isset($_GET['id'])) {
  $user = selectOne('users', ['id' => $_GET['id']]);

  $full_name = $user['first_name'] . ' ' . $user['last_name'];
}

// grab the posts from the database where the user id is the same as the user id
$posts = selectAll('posts', ['user_id' => $user['id']]);

userOnly();
?>


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
  <title> <?php echo ucwords($full_name); ?> | NSUer's Blog</title>
</head>

<body>

  <!--header connection-->
  <?php
  include(ROOT_PATH . "/app/includes/header.php");
  include(ROOT_PATH . "/app/includes/messages.php");
  ?>

  <main class="container mtb-2">
    <section class="profile-container">
      <div class="profile-header">
        <!-- header container -->
        <div class="profile-header-container">
          <!-- user image -->
          <div class="profile-header-items">
          </div>
          <!-- User name and taglines -->
          <div class="profile-header-items">
            <h2><?php echo ucwords($full_name); ?></h2>
            <h3><?php echo ucfirst($user['profile_tagline']) ?></h3>
            <p>
              Location: <?php echo ucwords($user['location']); ?>
            </p>
            <p>
              Joined: <?php echo date('F j, Y', strtotime($user['created_at'])); ?>
            </p>
          </div>
          <!-- edit button with icon -->
          <div class="profile-header-items">
            <a href="edit-profile.php?id=<?php echo $user['id']; ?>" class="btn" role="button">
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
          <h4>Socila Media Links</h4>
          <ul>
            <li>
              <a href="<?php echo $user['fb_link'] ?>" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="<?php echo $user['tw_link'] ?>" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="<?php echo $user['lk_link'] ?>" target="_blank">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="<?php echo $user['yt_link'] ?>" target="_blank">
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
            <?php echo html_entity_decode($user['about_me']); ?>
          </p>
        </div>
        <div></div>
      </div>
      <!-- User published article section -->
      <div class="profile-articles">
        <div>
          <h3>Articles</h3>
          <hr />
        </div>
        <?php foreach ($posts as $post) : ?>
          <!-- user posts -->
          <div class="user-post">
            <a href="single.php?id=<?php echo $post['id']; ?>">
              <h2> <?php echo $post['title']; ?></h2>
            </a>
          </div>
        <?php endforeach; ?>
      </div>

    </section>
  </main>

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>


</body>

</html>