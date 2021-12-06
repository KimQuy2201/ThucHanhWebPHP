<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 3 - Bài 8</title>
</head>
<body>
    <form name="anh" action="ketqua.php" method=post>
        Chọn hình ảnh:
        <select name="img" >
            <?php
                foreach(glob("image/*.*") as $filename){
                    echo "<option value='$filename'>".substr($filename,6)."</option>";
                }
            ?>
        </select>
        </br>
        Chọn kích thước:
        <input type="radio" name="size" value="200">200
        <input type="radio" name="size" value="300">300
        <input type="radio" name="size" value="400">400
        </br>
        <input type="submit" name="submit" value="Xem ảnh">
    </form>
   
</body>
</html>