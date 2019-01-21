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

echo '<br>';
$metsheina_synnipaev = date_create("1980-11-06");
$minu_synnipaev = date_create("1998-10-27");
$difference = $metsheina_synnipaev->diff($minu_synnipaev);
echo 'Sünnipäevade erinevus: '.$difference->y.' aastat '
    .$difference->m.' kuud '
    .$difference->d.' päeva';
echo '<br>';
$some_time = time();
echo $hours_of_day;
function greeting($time) {
    $hours_of_day = date('H', $time);
    if ($hours_of_day < 13) {
        echo 'tere hommikust';
    } else if ($hours_of_day < 18) {
        echo 'tere päevast';
    } else {
        echo 'tere õhtust';
    }
}
$some_other_time = mktime(19, 14, 14, 10, 29, 1969);
greeting($some_other_time);



?>