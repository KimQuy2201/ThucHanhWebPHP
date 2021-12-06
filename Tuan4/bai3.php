<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 3</title>
</head>
<body>  
    <form name="form_upload" enctype="multipart/form-data" method="POST">
        <label>Chọn hình ảnh: </label>
        <select name="img" >
            <?php
                foreach(glob("image/*.*") as $filename){
                    echo "<option value='$filename'>".substr($filename,6)."</option>";
                }
            ?>
        </select>
        <input type="submit" name="submit" value="Xem ảnh">
        <br>

        

        <?php
            if (isset($_REQUEST["submit"])){
                $hinh = $_REQUEST["img"];
            }
            else{
                echo "Không hợp lệ!";
                echo header("refresh:5; url=bai3.php");
            }
        ?>
            <img src="<?php echo $hinh?>" width="500px">
    </form>
   
</body>
</html>