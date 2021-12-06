<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>
<body>
    <h1>BÀI 6</h1>
    <?php
        $a = 10;
        $b = 25;
        function UCLN($a, $b)
        {
            while ($a != $b)
            {
                if ($a>$b){
                    $a = $a - $b;
                }
                else{
                    $b = $b - $a;
                }
            }
            return $a;
        }
        function BCNN($a, $b)
        {
            while ($a != $b)
            {
                $result  = UCLN($a,$b);
                return $a * $b / $result;
            }
        }
        // tính USCLN của a và b
        echo "UCLN của $a và $b là: " . UCLN($a, $b) . "<br>";
        // tính BSCNN của a và b
        echo "BCNN của $a và  $b là: " . BCNN($a, $b);
    ?>
</body>
</html>