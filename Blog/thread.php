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
        <textarea name="message" class="text-input contact-input" placeholder="Add your comment....."></textarea><br>
        <button type="submit" class="btn">
          <i class="fas fa-envelope"></i> Submit
        </button>
      </div>
      <div class="comment-container" id="first-comment">
        <!-- first comment card start-->
        <div class="comment-card">
          <h3 class="comment-title">The first comments</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus
            mollitia excepturi quidem! Autem, nemo veniam iste optio vel odit
            quae?
          </p>
          <div class="comment-footer">
            <div>Likes 123</div>
            <div>Dislikes 123</div>
            <div class="show-reply">Reply 2</div>
          </div>
          <!-- first comment card end -->
        </div>
        <!-- second comment card start-->
        <div class="comment-container" dataset="first-comment" id="first-reply">
          <!-- first comment reply card start-->
          <div class="comment-card">
            <h3 class="comment-title">The first reply</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus
              mollitia excepturi quidem! Autem, nemo veniam iste optio vel
              odit quae?
            </p>
            <div class="comment-footer">
              <div>Likes 123</div>
              <div>Dislikes 123</div>
              <div class="show-reply">Reply 2</div>
            </div>
            <!-- first comment reply card end -->
          </div>

          <div class="comment-container" dataset="first-reply" id="second-reply">
            <!-- first comment card start-->
            <div class="comment-card">
              <h3 class="comment-title">The second reply</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Natus mollitia excepturi quidem! Autem, nemo veniam iste optio
                vel odit quae?
              </p>
              <div class="comment-footer">
                <div>Likes 123</div>
                <div>Dislikes 123</div>
                <div class="show-reply">Reply 2</div>
              </div>
              <!-- first comment card end -->
            </div>
            <!-- second comment card start-->
            <div class="comment-container" dataset="first-comment" id="second-comment">
              <!-- first comment reply card start-->
              <div class="comment-card">
                <h3 class="comment-title">The first comments reply</h3>
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
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

</body>

</html>