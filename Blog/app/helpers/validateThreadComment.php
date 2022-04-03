<?php

/**
 * Validate the comment form
 */


function validateThreadComment($comment)
{
    $errors = array();
    if (empty($comment['body'])) {
        array_push($errors, 'Body is required');
    }
    if (empty($comment['thread_id'])) {
        array_push($errors, 'Please select a thread');
    }
    return $errors;
}
