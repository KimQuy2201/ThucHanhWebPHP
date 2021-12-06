<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tuan5.css">
    <title>Tuần 5 - Bài 5</title>
</head>
<body>
    <div class="main">
        <form action="#" method="post" enctype="multipart/form-data">
            Chọn ảnh:
            <select name="img">
                <?php
                    foreach(glob("image/*.*") as $nameimg){
                        echo '<option value="'.$nameimg.'">'.substr($nameimg,7).'</option>';
                    }
                ?>
            </select>
            <br> Chọn thư mục:
            <select name="folder" id="">
                <?php
                    $dir = scandir("image/");
                    $files = array_diff($dir, array(".",".."));
                    if(count($files) > 0){
                        foreach($files as $file){
                            echo "<option value='$file' selected>$file</option>";
                        }
                    }
                ?>
            </select>
            <br><button type="submit" name="submit">submit</button>
        </form>
        <?php
            $img = $_REQUEST['img'];
            if(isset($_REQUEST['submit'])){
                echo '<img src="'.$img.'" width="200">';
                foreach(glob("image/".$_REQUEST['folder']."/*.*") as $img){
                    echo '<img src="'.$img.'" width="200">';
                }
            }
        ?>
    </div>
</body>
</html>