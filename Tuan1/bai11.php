<?php
    echo "<meta  charset=UTF-8>";
    echo "<h1>Bai 11</h1>";
    echo "<table border=1px>";
         for($i = 1; $i <= 10; $i ++) {
            echo "<tr>";
            for($j = 1; $j <= 10; $j ++) {
                echo "<td>";
                echo ($i * $j);
                echo "</td>";
            }
            echo "</tr>";

        }
    echo "</table>";
?>

