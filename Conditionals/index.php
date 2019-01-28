<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 28.01.2019
 * Time: 14:17
 */

// tingimuslaused
$arv = rand(0, 100);
if ($arv < 25) {
    echo '<p style="color:red">'.$arv.'</p>';
} else if ($arv < 50) {
    echo '<p style="color:green">'.$arv.'</p>';
} else if ($arv < 75) {
    echo '<p style="color:blue">'.$arv.'</p>';
} else {
    echo '<p style="color:yellow">'.$arv.'</p>';
}
?>

    <style>
        div {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>

<?php
$aktiivne = 'punane';
switch ($aktiivne) {
    case 'kollane':
        echo '<div style="background:black"></div>';
        echo '<div style="background:orange"></div>';
        echo '<div style="background:black"></div>';
        break;
    case 'roheline':
        echo '<div style="background:green"></div>';
        echo '<div style="background:black"></div>';
        echo '<div style="background:black"></div>';
        break;
    case 'punane':
        echo '<div style="background:black"></div>';
        echo '<div style="background:black"></div>';
        echo '<div style="background:red"></div>';
        break;
    default:
        echo '<div style="background:red"></div>';
        echo '<div style="background:red"></div>';
        echo '<div style="background:red"></div>';
}