<?php

// require database conection
require("connect.php");


/**
 * Execute Qurey Function
 * SQL Injection Protection
 */

function executeQuery($sql, $data)
{
    global $conn;
    $statement = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $statement->bind_param($types, ...$values);
    $statement->execute();
    return $statement;
}

/**
 * SQL Query Template function for all tables 
 * Find specific data by id or other parameters
 **/
function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";

    if (empty($conditions)) {

        $statement = $conn->prepare($sql);
        $statement->execute();
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }

        $statement = executeQuery($sql, $conditions);
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


/** Function for output */
function output($record)
{
    echo "<pre>";
    print_r($record);
    echo "</pre>";
    die();
}

/**
 * SQL Query Template function for one table
 * Select one record from table
 */

function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key = ?";
        } else {
            $sql = $sql . " AND $key = ?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
    $statement = executeQuery($sql, $conditions);
    $record = $statement->get_result()->fetch_assoc();
    return $record;
}

$users = selectAll('users');
output($users);
