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