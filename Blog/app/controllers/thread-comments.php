<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateThreadComment.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// table name
$table = "thread_comments";

// Topics table fields


// select all topics from database
$thread_topics = selectAll($table);



/**
 * Grab the data from the form and add it to the database
 * check the form validation
 * Display a success message
 */



/**
 * Get the ID of the topic for read and update
 * show the data from the database on the edit form
 */



/**
 * Get the ID of the topic to be updated
 * Update the data from the database on the edit form
 * Display a success message
 * Redirect to the manage topics page
 */




/**
 * Get the ID of the topic to be deleted
 * Delete the data from the database
 * Display a success message
 * Redirect to the manage topics page
 */
