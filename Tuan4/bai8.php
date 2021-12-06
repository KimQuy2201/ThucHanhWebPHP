<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 8</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION["count"])) $_SESSION["count"]=0;
    else{
        $_SESSION["count"]+=1;
    }
    $fp = fopen('count.txt', 'w');
    fwrite($fp, $_SESSION["count"] );
    fclose($fp);
    echo "Hello bạn đã đến với website!";
?>
</body>
</html>