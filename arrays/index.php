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

// echo '<hr>';
// foreach ($kasutajad as $kasutaja) {
//    for($i = 0; $i < count($kasutaja); $i++) {
//        if($kasutaja[3] == 'female') {
//            echo '<div style="color: red">';
//        } else {
//            echo '<div style="color: blue">';
//        }
//       echo $kasutaja[$i].'</div>';
//    }
//
//   echo '<hr>';
// }

echo '<hr>';
echo '<table style="border: solid 1px">';
echo '<tr>
    <th>Kasutaja</th>
    <th>eesnimi</th>
    <th>perenimi</th>
    <th>sugu</th>
    </tr>';
foreach ($kasutajad as $kasutaja) {
    echo '<tr>';
    for($i = 0; $i < count($kasutaja), $i++) {
        if($kasutaja[3] == 'female') {
            echo '<td style="background: red">';
        } else {
            echo '<td style="background: blue">';
        }
        echo $kasutaja[$i].'</td>';
    }
}