<?php
echo "<meta  charset=UTF-8>";
echo "<h1>Bai 13</h1>";
$list = array("alpha", "beta", "gamma", "delta", "epsilon");
foreach ($list as $key => $value) {
    echo "<ul type='O'>";
    echo "<li>";
    echo $value . "<br>";
    echo "</li>";
    echo "</ul>";
}
?>