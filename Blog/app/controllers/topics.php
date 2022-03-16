<?php

include (ROOT_PATH . "/app/database/db.php");


$table = "topics";

$id ='';
$name = '';
$description = '';

$topics = selectAll($table);


if(isset($_POST['add-topic'])) {
    unset($_POST['add-topic']);
    $topic_id = create ('topic',$_POST);
    $_SESSION['message'] = 'Topic has been created successfully';
    $_SESSION['type'] = 'Success';

    header('location:' . base_url . '/admin/topics/index.php');

    exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id => $id']);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if(isset($_POST['update-topic'])){
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table,$_id, $_POST);
    $_SESSION['message'] = 'Topic has been created successfully';
    $_SESSION['type'] = 'Success';
 
    header('location:' . base_url . '/admin/topics/index.php');
    exit();

}