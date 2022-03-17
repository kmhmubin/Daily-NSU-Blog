<?php

// start session
session_start();

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
 * return the result that match the query
 * sql = "SELECT * FROM $table WHERE username= 'john' AND admin=1 "
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
 * return the result that match the query
 * sql = "SELECT * FROM $table WHERE username= 'john' AND admin=1 "
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

/***
 * SQL Query Template function for Insert data
 * Insert data into table
 * $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?"
 */

function create($table, $data)
{
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $statement = executeQuery($sql, $data);
    $id = $statement->insert_id;
    return $id;
}


/***
 * SQL Query Template function for Update data
 * Update data into table
 * $sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?"
 */

function update($table, $id, $data)
{
    global $conn;
    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key = ?";
        } else {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $sql = $sql . " WHERE id = ?";
    $data['id'] = $id;
    $statement = executeQuery($sql, $data);
    return $statement->affected_rows;
}


/***
 * SQL Query Template function for Delete data
 * Delete data from table
 * $sql = "DELETE FROM users WHERE id=?"
 */

function delete($table, $id)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id = ?";
    $statement = executeQuery($sql, ['id' => $id]);
    return $statement->affected_rows;
}


/**
 * Test above functions
 */

// insert data into users table
// $data = [
//     'username' => 'john',
//     'admin' => 1,
//     'email' => 'johndoe@gmail.com',
//     'password' => '123456'
// ];

// insert data
// $id = create('users', $data);
// output($id);

// update data into users table
// $data = [
//     'username' => 'luffy',
//     'admin' => 1,
//     'email' => 'monkeydluffy@gmail.com',
//     'password' => 'boahancock'
// ];

// update data
// $query = update('users', 2, $data);
// output($query);

// delete data from users table
// $query = delete('users', 2);
