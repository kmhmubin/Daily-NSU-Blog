<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/posts.php');

/**
 * Get the posts from the database
 */

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
  // output($post);
}

// Select all topics

$topics = selectAll('topics');

// Select all comments where post id same
$post_comments = selectAll('post_comments', ['post_id' => $post['id']]);
// Grab the User's data
$users = selectAll('users');
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
  <title> <?php echo $post['title']; ?> | NSUer's Blog</title>
</head>

<body>

  <!--header connection-->
  <?php include(ROOT_PATH . "/app/includes/header.php") ?>

  <!--page wapper starts-->
  <div class="page-wrapper">
    <!--content section starts-->
    <div class="content clearfix">
      <!--main-container-->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h2 class="post-title">
            <?php echo ucwords($post['title']); ?>
          </h2>
          <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
          </div>
          <!-- Comments section -->
          <section>
            <div>
              <h1>comments <span>( 3 )</span></h1>
            </div>

            <!-- Load comments data -->
            <div class="comment-container" id="comment-container">
              <input type="hidden" name="post_id" id="post_id" value="<?php echo $post['id']; ?>">

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
            <?php foreach ($topics as $topic) : ?>
              <li>
                <a href="<?php echo Base_URL . 'index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>">
                  <?php echo $topic['name']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>



        <div class="comment">
          <form>
            <div id="error_status"></div>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo $post["id"]; ?>">
            <textarea class="text-input contact-input" name="message" id="comment_textbox" rows="3" placeholder="Add your comment... "></textarea>
            <br>
            <button type="button" class="btn btn-big contact-btn" id="add_comment_button">Comment</button>
          </form>
        </div>
      </div>
      <!--sidebar section section ends -->
    </div>
    <!--content section Ends-->
  </div>
  <!--page wapper ends-->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/comment.js"></script>

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>


</body>

</html>