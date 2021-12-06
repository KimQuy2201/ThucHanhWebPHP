<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 9</title>
</head>
<body>
    <?php
        if (isset($_REQUEST["submit"])){
            $fp = fopen('sinhvien.txt', 'a');
            fwrite($fp, $_REQUEST["name"]." "." ");
            fwrite($fp, $_REQUEST["date"]." "." ");
            fwrite($fp, $_REQUEST["class"]." "." ");
            fwrite($fp, $_REQUEST["diachi"]);
            fwrite($fp, "\n");
            fclose($fp);
            echo "Thông tin của bạn đã được Lưu"; 
        }else{
            echo"Lưu thông tin thất bại!";
        }
    ?>
    <form action="../bai9.php" style="margin-bottom:5px;">
        <input type="submit" name="submit"value="Nhập tiếp">
    </form>

    <form action="bai9c.php">
        <input class="mt-3" type="submit" name="submit" value="Xem thông tin">
    </form>
</body>
</html>