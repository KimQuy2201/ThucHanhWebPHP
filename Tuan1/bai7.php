<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7</title>
</head>
<body>
    <h1>BÀI 7</h1>
    <?php
        echo "<meta charset='utf-8'>";
            for ($i = 0; $i <= 100; $i++){
                if ($i % 2 == 0){
                    echo "<b>$i</b>"."<br>";
                }
                else {
                    echo "$i"."<br>";
                }
            }
    ?>
</body>