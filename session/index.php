<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24.01.2019
 * Time: 14:16
 */

require_once 'fnk.php';

if(!isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user'].'!<br>';
} else {
    $loginForm  = htmlFromFile('login');
    echo $loginForm;
}

$loginForm = htmlFromFile('login');
echo $loginForm;
