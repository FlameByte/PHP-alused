<?php
// $kasutajad = array();
// $kasutajad[] = 'alice';
// $kasutajad[] = 'bob';
// array_push($kasutajad,'lucy');

// for($i = 0; $i < count($kasutajad); $i++) {
//    echo $i.' - ' .$kasutajad[$i].'<br>';
// }

// foreach($kasutajad as $kasutaja){
//    echo $kasutaja.'<br>';
// }

$kasutajad = array();
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';

array_push($kasutajad,'lucy');


foreach($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';
}

echo '<hr>';
array_pop($kasutajad);
array_shift($kasutajad);

foreach($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';}
print_r($kasutajad);