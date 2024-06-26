<?php
$chessboard = array(
 array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
 array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
 array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
 array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
 array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
 array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
 array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
 array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
 );
 echo "<pre>";
 echo "\n";
 foreach($chessboard as $row)
 {
 foreach ($row as $piece)
 echo "$piece ";

        //echo "</br>";
        echo "\n";
    }

echo "</pre>";

?>
