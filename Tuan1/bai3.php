<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
    <h1>BÀI 3</h1>
    <?php
        $a = 12;
        $b = 5;
        $tong = $a+$b;
        $hieu = $a-$b;
        $tich = $a*$b;
        $thuong = $a/$b;
        $mod = $a%$b;
        echo "$a + $b = " . $tong; 
        echo "<br>";
        echo "$a - $b = " . $hieu;
        echo "<br>";
        echo "$a * $b = " . $tich;
        echo "<br>";
        echo "$a / $b = " . $thuong;
        echo "<br>";
        echo "$a % $b = " . $mod;
    ?>
</body>
</html>