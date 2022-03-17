<?php

// import db connection
include_once(ROOT_PATH . "/app/database/db.php");

// import validation functions
include(ROOT_PATH . "/app/helpers/validateUsers.php");

// error array
$errors = array();

// assign variables
$username = $email = $password = $passwordConf = "";

// table name
$table = "users";


/**
 * Check if the signup form is submitted
 * If it is, then check if the form has errors
 * If yes, then covert the password to hash
 * If yes, then insert the user data into the database
 */

if (isset($_POST['signup-btn'])) {

    $errors = validateUser($_POST);

    if (count($errors) == 0) {
        unset($_POST['signup-btn'], $_POST['passwordConf']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}
