<?php

// import db connection
include_once(ROOT_PATH . "/app/database/db.php");

/**
 * Check if the signup form is submitted
 * If yes, then check if the confirm password is the same as the password
 * If yes, then covert the password to hash
 * If yes, then insert the user data into the database
 */

if (isset($_POST['signup-btn'])) {
    unset($_POST['signup-btn'], $_POST['passwordConf']);
    $_POST['admin'] = 0;

    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_id = create('users', $_POST);
    $user = selectOne('users', ['id' => $user_id]);
    output($_POST);
    die();
}
