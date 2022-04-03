<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateThreadComment.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// table name
$table = "thread_comments";

// Topics table fields
$id = "";
$thread_id = "";
$parent_comment_id = 1;
$body = "";
$published = "";


// Load all the posts
$threads = selectAll('threads');

// select all topics from database
$thread_comments = selectAll($table);



/**
 * Show data in the edit form
 */

if (isset($_GET['id'])) {
    $thread_comment = selectOne($table, ['id' => $_GET['id']]);
    $id = $thread_comment['id'];
    $thread_id = $thread_comment['thread_id'];
    $parent_comment_id = $thread_comment['parent_comment_id'];
    $body = $thread_comment['body'];
    $published = $thread_comment['published'];
    $update_at = $thread_comment['update_at'];
}




/**
 * Inset post into database
 * 
 */

if (isset($_POST['add-comment'])) {
    adminOnly();

    $errors = validateThreadComment($_POST);


    if (count($errors) === 0) {
        unset($_POST['add-comment']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['parent_comment_id'] = $_POST['parent_comment_id'] ?? 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $thread_comment_id = create($table, $_POST);
        $_SESSION['message'] = "Thread Comment added successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "admin/thread-comments/index.php");
        exit();
    } else {

        $body = $_POST['body'];
        $thread_id = $_POST['thread_id'];
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
    $errors = validateThreadComment($_POST);


    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-comment'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['parent_comment_id'] = $_POST['parent_comment_id'] ?? 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $thread_comment_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Thread Comment updated successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "admin/thread-comments/index.php");
        exit();
    } else {
        $body = $_POST['body'];
        $thread_id = $_POST['thread_id'];
        $parent_comment_id = $_POST['parent_comment_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


/**
 * Delete Thread Comment from database
 * 
 */
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Thread Comment deleted successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "admin/thread-comments/index.php");
    exit();
}


/**
 * publish or unpublish Thread Comment from the list
 */

if (isset($_GET['published']) && isset($_GET['tc_id'])) {
    adminOnly();
    $tc_id = $_GET['tc_id'];
    $published = $_GET['published'];
    $count = update($table, $tc_id, ['published' => $published]);
    $_SESSION['message'] = "Thread Comment published successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "admin/thread-comments/index.php");
    exit();
}
