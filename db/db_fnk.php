<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24.01.2019
 * Time: 12:59
 */

function connect_db($hostname, $dbUser, $dbPass, $dbName){
    $conn = mysqli_connect($hostname, $dbUser, $dbPass, $dbName);
    if(!$conn){
        echo 'unable to connect to MYSQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }
    return $conn;
}

function query($sql, $conn){
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo 'problem with <b>'.$sql.'</b><br>';
        exit;
    }
    return $result;
}

function getData($sql, $conn){
    $data = array();
    $result = query($sql, $conn);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data [] = $row;
    }
    return $data;
}