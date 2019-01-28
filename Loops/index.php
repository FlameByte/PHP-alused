<?php
<?php
// header('refresh: 0.5');
echo '<h1>Ül 1</h1>';
for ($i = 0; $i <= 10; $i = $i + 1) {
    if ($i % 2 == 0) {
        $värv = 'green';
    } else {
        $värv = 'red';
    }
    echo '<div style="background: '.$värv.'">'.$i.'</div>';
}
echo '<hr>';
// ternary operator
for ($i = 0; $i <= 10; $i = $i + 1) {
    $i % 2 == 0 ? $värv = 'green' : $värv = 'red';
    echo '<div style="background: '.$värv.'">'.$i.'</div>';
}
?>

    <style>
        td, tr, table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table {
            width: 100vw;
            height: 100vh;
            text-align: center;
        }
    </style>

<?php
echo '<hr>';
echo '<table>';
for ($i = 1; $i <= 1; $i = $i + 1) {
    echo '<tr>';
    for ($j = 1; $j <= 200; $j++ ) {
        $värv = '#' . dechex(rand(0x000000, 0xFFFFFF));
        echo '<td style="background: '.$värv.'"></td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';
echo '<table>';
echo '<tr>';
for ($i = 0; $i <= 10; $i++) {
    $txt = ($i == 0) ? '&nbsp' : $i;
    echo '<td>'.$txt.'</td>';
}
echo '<tr>';
for ($i = 1; $i <= 10; $i = $i + 1) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j = $j + 1) {
        echo '<td>'.$j * $i.'</td>';
    }
    echo '<tr>';
}
echo '</table>';
echo '<hr>';
$number = 48557812535;
$str = (string) $number;
$arr = str_split($str);
$sum = 0;
$countFive = 0;
for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
    if ($arr[$i] == 5) {
        $countFive++;
    }
}
echo 'sum: '.$sum;
echo '<br>';
echo 'countFive: '.$countFive;
// for ($i = 0; $i < count($arr); $i++) {

// }