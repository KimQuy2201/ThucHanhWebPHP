<meta charset="UTF-8">

<?php
    echo "<h1>BÀI 10</h1>";
    $date = getdate();
    $thisdate = $date["year"];
    echo "<select>";
    for ($i = 1900 ; $i <= $thisdate ; $i++) {
        echo "<option value=$i> $i </option>";
    }
    echo "</select>";
?>
