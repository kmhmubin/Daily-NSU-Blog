<?php

include(ROOT_PATH . "/app/database/db.php");

// table name
$table = "topics";

// Topics table fields
$id = $name = $description = "";

// select all topics from database
$topics = selectAll($table);

/**
 * Grab the data from the form and add it to the database
 * Display a success message
 */

if (isset($_POST['add-topic'])) {
    unset($_POST['add-topic']);
    $topic_id = create($table, $_POST);
    $_SESSION['message'] = "Topic added successfully";
    $_SESSION['type'] = "success";
    header("location: " . Base_URL . "admin/topic/index.php");
    exit();
}

/**
 * Get the ID of the topic to be edited
 * show the data from the database on the edit form
 */

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ["id" => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}


/**
 * Get the ID of the topic to be updated
 * Update the data from the database on the edit form
 * Display a success message
 * Redirect to the manage topics page
 */

if (isset($_POST['update_topic'])) {
    unset($_POST['update_topic']);
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = "Topic updated successfully";
    $_SESSION['type'] = "success";
    header("location: " . Base_URL . "admin/topic/index.php");
    exit();
}


/**
 * Get the ID of the topic to be deleted
 * Delete the data from the database
 * Display a success message
 * Redirect to the manage topics page
 */

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Topic deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . Base_URL . "admin/topic/index.php");
    exit();
}
