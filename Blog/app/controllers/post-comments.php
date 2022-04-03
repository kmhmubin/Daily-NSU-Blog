<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePostComment.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// table name
$table = "comments";

// Topics table fields
$id = "";
$post_id = "";
$parent_comment_id = 1;
$body = "";
$published = "";

// Load all the posts
$posts = selectAll('posts');


// select all commentss from database
$comments = selectAll($table);



/**
 * Show data in the edit form
 */

if (isset($_GET['id'])) {
    $comment = selectOne($table, ['id' => $_GET['id']]);
    $id = $comment['id'];
    $post_id = $comment['post_id'];
    $parent_comment_id = $comment['parent_comment_id'];
    $body = $comment['body'];
    $published = $comment['published'];
    $update_at = $comment['update_at'];
}




/**
 * Inset post into database
 * 
 */

if (isset($_POST['add-comment'])) {
    adminOnly();

    $errors = validatePostComment($_POST);


    if (count($errors) === 0) {
        unset($_POST['add-comment']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['parent_comment_id'] = $_POST['parent_comment_id'] ?? 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $comment_id = create($table, $_POST);
        $_SESSION['message'] = "Comment added successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "admin/post-comment/index.php");
        exit();
    } else {

        $body = $_POST['body'];
        $post_id = $_POST['post_id'];
        $parent_comment_id = $_POST['parent_comment_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


/**
 * Update post into database
 * 
 */

if (isset($_POST['update-comment'])) {
    adminOnly();
    $errors = validatePostComment($_POST);


    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-comment'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['parent_comment_id'] = $_POST['parent_comment_id'] ?? 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $comment_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Comment updated successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "admin/post-comment/index.php");
        exit();
    } else {
        $body = $_POST['body'];
        $post_id = $_POST['post_id'];
        $parent_comment_id = $_POST['parent_comment_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


/**
 * Delete post from database
 * 
 */
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Comment deleted successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "admin/post-comment/index.php");
    exit();
}


/**
 * publish or unpublish post from the list
 */

if (isset($_GET['published']) && isset($_GET['pc_id'])) {
    adminOnly();
    $pc_id = $_GET['pc_id'];
    $published = $_GET['published'];
    $count = update($table, $pc_id, ['published' => $published]);
    $_SESSION['message'] = "Comment published successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "admin/post-comment/index.php");
    exit();
}
