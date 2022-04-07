<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/threads.php');

/**
 * Get the posts from the database
 */

if (isset($_GET['id'])) {
  $thread = selectOne('threads', ['id' => $_GET['id']]);
  // output($post);
}


// Select all topics

$topics = selectAll('thread_topics');

// Grab the User's data
$user = selectOne('users', ['id' => $thread['user_id']]);

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
  <title> <?php echo $thread['title']; ?> | NSUer's Blog</title>
</head>

<body>

  <!--header connection-->
  <?php include(ROOT_PATH . "/app/includes/header.php") ?>

  <main class="container">
    <!-- thread details section -->
    <section class="mtb-2">
      <!-- thread title -->
      <div class="mb-2">
        <h1><?php echo ucwords($thread['title']); ?></h1>
      </div>
      <!-- thread body -->
      <article class="flex-container thread-body">
        <div class="flex-items">
          <!-- thread author image -->
          <div>
            <img src="assets/images/avatar.png" alt="avatar" width="64" height="64" />
          </div>
        </div>
        <div class="flex-items">
          <!-- Author name and thread date -->
          <div class="inline-flex">
            <div>

              <h5><?php echo ucfirst($user['username']); ?></h5>

            </div>
            <div>
              <h5>|</h5>
            </div>
            <div>
              <h5>
                <span class="text-muted">
                  <i class="far fa-clock"></i>
                  <time> <?php echo date('F j, Y', strtotime($thread['update_at'])); ?>
                  </time>
                </span>
              </h5>
            </div>
          </div>
          <!-- thread content -->
          <div>
            <?php echo html_entity_decode($thread['body']); ?>
          </div>
        </div>
      </article>
      <hr />
    </section>
    <!-- Discussion section -->
    <section class="mtb-2">
      <div>
        <h1>Discussion <span>( 3 )</span></h1>
      </div>
      <div class="comment">
        <form>
          <div id="error_status"></div>
          <input type="hidden" name="thread_id" id="thread_id" value="<?php echo $thread["id"]; ?>">
          <textarea class="text-input contact-input" name="message" id="comment_textbox" rows="3" placeholder="Add your comment... "></textarea>
          <br>
          <button type="button" class="btn btn-big contact-btn" id="add_comment_button">Comment</button>
        </form>
      </div>


      <!-- Load comments data -->
      <div class="comment-container" id="comment-container">
        <input type="hidden" name="thread_id" id="thread_id" value="<?php echo $thread['id']; ?>">

      </div>
    </section>
  </main>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/thread-comment.js"></script>

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

</body>

</html>