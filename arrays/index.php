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

// $kasutajad = array();
// $kasutajad[] = 'alice';
// $kasutajad[] = 'bob';

// array_push($kasutajad,'lucy');

$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddle'
    ),
    array(
        'bob',
        'Bob',
        'Builder'
    )
);

echo '<hr>';
foreach ($kasutajad as $kasutaja) {
    foreach($kasutaja as $element) {
        echo $element.'<br>';
    }
    echo '<hr>';
}
