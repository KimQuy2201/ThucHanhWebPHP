<?php
    echo "<meta  charset=UTF-8>";
    echo "<h1>Bai 5</h1>";
    $x = rand();
    do {
        $y = rand();
    } while ($x <= $y);
    echo "số random  $x > $y";
?>