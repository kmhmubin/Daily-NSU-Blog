<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/topics.php');

$posts = array();
$postTitle = 'Recent Posts';
/***
 * Get  all posts from a single topic
 * Search posts
 * select all the published posts
 */

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postTitle = "Posts in '" . $_GET['name'] . "'";
} elseif (isset($_POST['search-term'])) {

  $posts = searchPosts($_POST['search-term']);
  $postTitle = "Search results for '" . $_POST['search-term'] . "'";
} else {
  $posts = getPublishedPosts();
}

// Select all Thread Topics
$thread_topics = selectAll('thread_topics');

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
        <?php foreach ($thread_topics as $key => $thread) : ?>

          <!-- user posts -->
          <div class="user-post">
            <a href="discussion.php?id=<?php echo $thread['id']; ?>">
              <h2><?php echo $thread['name']; ?></h2>
              <p><?php echo $thread['description']; ?></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!--post slider-->

    <!--content section starts-->
    <div class="content clearfix">
      <!--main-container-->
      <div class="main-content">
        <h1 class="recent-post-title">
          <?php echo $postTitle; ?>
        </h1>

        <?php foreach ($posts as $post) : ?>

          <div class="post clearfix">
            <img src="<?php echo Base_URL . 'assets/images/' . $post['image']; ?>" alt="" class="post-img" />
            <div class="post-preview">
              <h2>
                <a href="single.php?id=<?php echo $post['id']; ?>">
                  <?php echo $post['title']; ?>
                </a>
              </h2>
              <i class="far fa-user">
                <?php echo ucfirst($post['username']); ?>
              </i>
              &nbsp;
              <i class="far fa-calendar">
                <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
              </i>
              <!-- <p class="preview-text">
                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
              </p> -->
              <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
      <!--main-container-->
      <div class="sidebar">
        <div class="section scarch">
          <h2 class="section-title">Search</h2>

          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="search...." />
          </form>

        </div>
        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $key => $topic) : ?>

              <li>
                <a href="<?php echo Base_URL . 'index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>">
                  <?php echo $topic['name']; ?>
                </a>
              </li>

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