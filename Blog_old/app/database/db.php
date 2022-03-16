<?php

session_start();
require('connect.php');


function dd($value)     //to be deleted
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

// execution function
function executeQueary($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);                   // prepar the table
    $values = array_values($data);                  // making array formate
    $types = str_repeat('s', count($values));       // take the number parameters in the given condition
    $stmt->bind_param($types, ...$values);          // fetch conditions data
    $stmt->execute();                               // execute the table
    return $stmt;
}

//select the table who's value we want to pass into the function
function selectAll($table, $conditions =[])        
{
    global $conn;
    $sql = "SELECT * FROM $table";   //create sql quary for that selected table
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);    // prepar the table
        $stmt->execute();                // execute the table
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);  //records thr table data
        return $records;
    }
    else
    {
        //returens the records that matches the conditions....
        //sql = "SELECT * FROM $table WHERE username= 'Shazia' AND admin=1 ";
        //sql injection....
        $i = 0;
        foreach ($conditions as $key => $value) {
            if($i===0){
                $sql = $sql . " WHERE $key = ?";
            }else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        //sql injection....
        $stmt = executeQueary ($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);  //records thr table data
        return $records;
    }   
}

//select one record from a table
function selectOne($table, $conditions)        
{
    global $conn;
    $sql = "SELECT * FROM $table";   //create sql quary for that selected table

    //returens the records that matches the conditions....
    //sql = "SELECT * FROM $table WHERE username= 'Shazia' AND admin=1 ";
    //sql injection....
    $i = 0;
    foreach ($conditions as $key => $value) {
        if($i===0){
            $sql = $sql . " WHERE $key = ?";
        }else {
            $sql = $sql . " AND $key = ?";
        }
        $i++;
    }
    //sql = "SELECT * FROM $table WHERE username= 'Shazia' AND admin=1 LIMIT 1";
    $sql = $sql . " LIMIT 1";
    //sql injection....
    $stmt =   executeQueary ($sql, $conditions);          // execute the table
    $records = $stmt->get_result()->fetch_assoc();        //records thr table data
    return $records;    
}

// function for create data
function create($table, $data)
{
    global $conn;
    // $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?";
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if($i===0){
            $sql = $sql . " $key = ?";
        }else {
            $sql = $sql . " , $key = ?";
        }
        $i++;
    }
     //sql injection....
     $stmt =   executeQueary ($sql, $data);          // execute the table
     $id = $stmt->insert_id;                         //records thr table data
     return $id;  
}

// function for update data
function update($table, $id, $data)
{
    global $conn;
    // $sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?";
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if($i===0){
            $sql = $sql . " $key = ?";
        }else {
            $sql = $sql . " , $key = ?";
        }
        $i++;
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;           // add another key value in the update queary
     //sql injection....
    $stmt =   executeQueary ($sql, $data);       // execute the table
    return $stmt->affected_rows;  
}

// function for delete data
function delete($table, $id)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";
     //sql injection....
    $stmt =   executeQueary ($sql, ['id' => $id]);       // execute the table
    return $stmt->affected_rows;  
}
