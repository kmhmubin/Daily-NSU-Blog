<?php

/**
 * Validate the comment form
 */


function validateThreadComment($thread_comment)
{
    $errors = array();
    if (empty($thread_comment['body'])) {
        array_push($errors, 'Body is required');
    }
    if (empty($thread_comment['thread_id'])) {
        array_push($errors, 'Please select a thread');
    }
    return $errors;
}
