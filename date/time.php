<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21.01.2019
 * Time: 13:10
 */

echo date('20.03.2013 12:31' , time());	 //20.03.2013 12:31

echo '<br>';

$time = time();


//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine

$nadalapaevad = array('esmaspäev', 'teisipäev', 'kolmpaäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$hetke_nadalapaev = $nadalapaevad[date('N', time()) - 1];
echo $hetke_nadalapaev;
echo '<br>';
echo $paev.'.'.$kuu.' '.$aasta.' '.$hetke_nadalapaev;
echo '<br>';


$date1=date_create("2019-06-24");
$date2=date_create("2019-01-11");
$diff=date_diff($date1,$date2, true);
echo $diff->format("jaanipäevani on aega %R%a päeva");



?>