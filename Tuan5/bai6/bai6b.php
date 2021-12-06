<?php
    include "../xuly.php";
    $class = new Xuly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
    <?php
    if (isset($_REQUEST["submit"])){
        if ($_POST["email"]== null|| $_POST["pass"]== null|| $_POST["repass"]==null){
            echo "<script> alert('Vui lòng nhập đầy đủ thông tin!') </script>";
            echo header("refresh: 0; url='bai6.php'");
        }
        elseif (isset($_POST["email"])  && isset($_POST["pass"]) && isset($_POST["repass"])){
            $email= $class->Kiemtraemail($_POST["email"]);
            $pass= $class->Kiemtramk($_POST["pass"]);
            $repass= $class->Kiemtrarepass($_POST["repass"], $_POST["pass"]);
            if ($email=== true && $pass=== true && $repass=== true){
            $save= $class->save($_POST["email"],$_POST["pass"], $_POST["repass"]);}
        }
    }
    ?>
</body>
</html>