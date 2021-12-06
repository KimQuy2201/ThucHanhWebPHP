
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 p-0 text-center" style="border: 1px solid; width: 60%;">
    <form action="" method="post">
        <!-- Chọn -->
        <div class="form-group">
            <div class="row">
                <div class="col-2 text-danger"><b>Chọn</b>:</div>
                <div class="col" style="text-align: left;">
                    <input type="radio" name="chon" value="1" class="ml-3">Tạo file
                    <input type="radio" name="chon" value="2" class="ml-3">Xem nội dung
                    <input type="radio" name="chon" value="3" class="ml-3">Thêm nội dung
                </div>
            </div>
        </div>
        <!-- tên file -->
        <div class="form-group">
            <div class="row">
                <div class="col-2">Đặt tên file:</div>
                <div class="col">
                    <input type="text" name="namefile" class="w-50 float-left form-control" placeholder=".txt">
                </div>
            </div>
        </div>
        <!-- nội dung -->
        <div class="form-group">
            <div class="row">
                <div class="col-2">Nội dung:</div>
                <div class="col">
                    <textarea name="text" cols="30" rows="3" class="w-50 float-left form-control" placeholder="Nhập nội dung"></textarea>
                </div>
            </div>
        </div>
        <!-- submit -->
        <div class="form-group">
            <div class="row">
                <div class="col-2"></div>
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-primary w-25 float-left">OK</button>
                </div>
            </div>
        </div>
    </form>
    <?php
        $namefile = $_REQUEST['namefile'];
        $text = $_REQUEST['text'];
        switch($_POST['chon']){
            case 1:
                $myfile = fopen("$namefile.txt","w");
                $txt = "$text";
                fwrite($myfile, $txt);
                fclose($myfile);
                echo '<script lang="javascript">
                    alert("Tạo file thành công! Nhấn OK để trở lại trang chủ");
                </script>';
                echo header("refresh: 0; url='bai7.php'");
            break;
            case 2:
                $read = file("$namefile.txt");
                foreach($read as $line){
                    echo $line.", ";
                }
            break;
            case 3:
                $myfile = "$namefile.txt";
                $fh = fopen($myfile, 'a');
                fwrite($fh, " $text");
                fclose($fh);
            break;
        }
    ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>