<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24.01.2019
 * Time: 14:35
 */
require_once '../db/conf.php';
require_once '../db/db_fnk.php';

$username = $_GET['uname'];
$password = $_GET['upass'];

// ühendus andmebaasiga
$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);

//küsime kasutaja andmete olemasolu andmebaasis

$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'"';
$users = getData($sql, $ikt);

//väljastame andmed

if($users !== false){
    session_start();
    $_SESSION['user'] = $users[0];
    header('location: ../index.php');
}



