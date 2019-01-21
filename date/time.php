<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21.01.2019
 * Time: 13:10
 */

echo date('20.03.2013 12:31' , time());	 //20.03.2013 12:31

echo '<br>';

$nadalapaevad = array('esmaspäev', 'teisipäev', 'kolmpaäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$hetke_nadalapaev = $nadalapaevad[date('N', time()) - 1];
echo $hetke_nadalapaev;

echo $paev;




?>