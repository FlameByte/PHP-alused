<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 24.01.2019
 * Time: 14:17
 */

function htmlFromFile($fileName){
    $fileName = 'html/'.$fileName.'.html';
    $fp = fopen($fileName, 'r');
    $Content = fread($fp, filesize($fileName));
    fclose($fp);
    return $Content;
}