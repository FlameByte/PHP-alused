<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24.01.2019
 * Time: 12:17
 */
require_once 'db_fnk.php';
require_once 'conf.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
// insert/update tüüpi sql testimine
$sql = 'UPDATE user SET last_name = "Ebatavaline" WHERE user_id = 1';
$res = query($sql, $iktConn);

// select tüüpi sql testimine
$sql = 'SELECT * FROM user';
$res = getData($sql, $iktConn);

echo '<pre>';
print_r($res);

echo 'tere, '.$res[0]['first_name'].' '.$res[0]['last_name'].'<br>';

// select tüüpi sql testimine
$sql = 'SELECT NOW()';
$aeg = getData($sql, $iktConn);
echo '<pre>';
print_r($aeg);
echo '<pre>';

echo $aeg[0]['NOW()'].'<br>';
