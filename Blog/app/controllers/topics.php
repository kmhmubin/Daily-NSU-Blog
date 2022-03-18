<?php

include(ROOT_PATH . "/app/database/db.php");

// table name
$table = "topics";

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
