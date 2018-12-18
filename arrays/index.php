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
        'Liddle',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    )
);

echo '<hr>';
foreach ($kasutajad as $kasutaja) {
    for($i = 0; $i < count($kasutaja); $i++) {
        if($kasutaja[3] == 'female') {
            echo '<div style="color: red">';
        } else {
            echo '<div style="color: blue">';
        }
        echo $kasutaja[$i].'</div>';
    }

    echo '<hr>';
}
