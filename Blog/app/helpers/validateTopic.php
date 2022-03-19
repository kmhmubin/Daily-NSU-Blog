<?php

/**
 * Validate the topic form
 */

function validateTopic($topic)
{
    $errors = array();
    if (empty($topic['name'])) {
        array_push($errors, 'Name is required');
    }
    if (empty($topic['description'])) {
        array_push($errors, 'Description is required');
    }


    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic) {
        array_push($errors, 'Name already Exists');
    }
    return $errors;
}
