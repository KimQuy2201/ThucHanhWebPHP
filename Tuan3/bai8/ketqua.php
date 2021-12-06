<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 3 - Bài 8</title>
</head>
<body>
<?php
if (isset($_REQUEST["submit"])){
    $hinh= $_REQUEST["img"];
    $size= $_REQUEST["size"];
}
else{
    echo header("refresh:0; url=Bai8.php");
}
?>
<img src="<?php echo $hinh?>" width="<?php echo $size?>"/>
</body>
</html>
