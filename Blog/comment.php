<?php
include('path.php');
include(ROOT_PATH . "/app/database/db.php");
// include(ROOT_PATH . "/app/helpers/validatePostComment.php");
// include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// table name
$table = "post_comments";

// Topics table fields
$id = "";
$post_id = "";
$message = "";

// Load all the posts
$posts = selectAll('posts');

// Load all the users
$users = selectAll('users');

// comment reply table
$reply_table = "post_comment_replys";



/**
 * Show comment data in the post page
 */



if (isset($_POST['load-comment'])) {
    $post_id = $_POST['post_id'];
    $comments_query = "SELECT * FROM $table WHERE post_id = $post_id ORDER BY created_at DESC";
    $query_run = mysqli_query($conn, $comments_query);

    $commentHTML = '';

    while ($comment = mysqli_fetch_assoc($query_run)) {
        $user_id = $comment['user_id'];
        $user_query = "SELECT * FROM users WHERE id = $user_id";
        $user_query_run = mysqli_query($conn, $user_query);
        $user_row = mysqli_fetch_assoc($user_query_run);

        $commentHTML .= '
        
        <div class="comment-card" id="reply-box">
                <div class="comment-title">
                  <h3>' . ucwords($user_row['username']) . '</h3>
                  <h4>
                    ' . date('F j, Y', strtotime($comment['commented_on'])) . '
                  </h4>
                </div>
                <div>
                  <p>' . html_entity_decode($comment['message']) . '</p>
                  <div class="comment-footer">
                    <div class="btn btn-small" id="relpy_btn" value=' . $comment['id'] . '>
                      Reply
                    </div>
                    <div class="btn btn-small" id="view_relpy_btn" value=' . $comment['id'] . '>
                    view relpy
                    </div>
                  </div>
                </div>
                <div class="mt-2 ml-2" id="reply-section"></div>
        </div>

        
        ';
    }
    echo $commentHTML;
}



/**
 * Insert Commnenet into database
 */

if (isset($_POST['add-comment'])) {
    $user_id = $_SESSION['id'];
    $post_id = $_POST['post_id'];
    $message = $_POST['message'];

    $query = "INSERT INTO $table (user_id, post_id, message) VALUES ('$user_id', '$post_id', '$message')";
    $result = mysqli_query($conn, $query);
}


/**
 * Add Reply to comment in database
 */

if (isset($_POST['add-reply'])) {
    $comment_id = mysqli_real_escape_string($conn, $_POST['comment_id']);
    $message = mysqli_real_escape_string($conn, $_POST['reply_message']);
    $user_id = $_SESSION['id'];

    $query = "INSERT INTO $reply_table (user_id, comment_id, reply_message) VALUES ('$user_id', '$comment_id', '$message')";
    $result = mysqli_query($conn, $query);
}


/**
 * Show reply comment in the post page
 */
if (isset($_POST['view-reply'])) {
    $reply_id = $_POST['reply_id'];
    $reply_query = "SELECT * FROM $reply_table WHERE comment_id = $reply_id ORDER BY created_at DESC";
    $query_run = mysqli_query($conn, $reply_query);

    $replyHTML = '';


    while ($reply = mysqli_fetch_assoc($query_run)) {
        $user_id = $reply['user_id'];
        $user_query = "SELECT * FROM users WHERE id = $user_id";
        $user_query_run = mysqli_query($conn, $user_query);
        $user_row = mysqli_fetch_assoc($user_query_run);

        $replyHTML .= '
        
        <div class="comment-card" id="reply-box">
                <div class="comment-title">
                  <h3>' . ucwords($user_row['username']) . '</h3>
                  <h4>
                    ' . date('F j, Y', strtotime($reply['commented_on'])) . '
                  </h4>
                </div>
                <div>
                  <p>' . html_entity_decode($reply['reply_message']) . '</p>
                  <div class="comment-footer">
                    <div class="btn btn-small" id="sub_relpy_btn" value=' . $reply['id'] . '>
                      Reply
                    </div>
                  </div>
                </div>
                <div class="mt-2 ml-2" id="reply-section"></div>
        </div>

        
        ';
    }
    echo $replyHTML;
}
