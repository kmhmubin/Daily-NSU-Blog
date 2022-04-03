<?php

/**
 * Validate the comment form
 */


function validatePostComment($comment)
{
    $errors = array();
    if (empty($comment['body'])) {
        array_push($errors, 'Body is required');
    }
    if (empty($comment['post_id'])) {
        array_push($errors, 'Please select a post');
    }
    return $errors;
}
