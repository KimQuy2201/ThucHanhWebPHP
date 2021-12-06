
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 3 - Bài 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">BÀI 2</h1>
    <div class="container p-3" style="border: solid rgb(20, 6, 6); width: 35%;">
        <h2 class="text-center mb-3">PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form action="" method="GET">
            <div>
                <label for="">Chọn phép tính:</label>
                <?php
                    $a = $_GET['a'];
                    $b = $_GET['b'];
                    $result = "";
                    $pheptinh = $_GET['pheptinh'];
                    
                    switch($pheptinh)
                    {
                        case 'cong':
                            echo "<input type='radio' checked> Cộng";
                            $result = $a+$b;
                            break;
                        case 'tru':
                            echo "<input type='radio' checked> Trừ";
                            $result = $a-$b;
                            break;
                        case 'nhan':
                            echo "<input type='radio' checked> Nhân";
                            $result = $a*$b;
                            break;
                        case 'chia':
                            if($b!=0){
                                echo "<input type='radio' checked> Chia";
                                $result = $a/$b;
                            }   
                            else
                            {
                                $result = "b!=0";
                                if($b == 0){
                                    echo '<script language="javascript">';
                                    echo 'alert("Lỗi! Mẫu phải khác 0. Nhấn OK để quay lại trang trước.")';
                                    echo '</script>';
                                }
                                echo header("refresh: 0; url='/ThucHanhPHP/Tuan3/bai2/bai2.php'");
                                break;
                            }
                        default:
                            $result = "Error!";
                            break;
                    }
                    if(!is_numeric($a) || !is_numeric($b)){
                        echo '<script language="javascript">';
                        echo 'alert("Số thứ nhất và số thứ hai phải là số!. Nhấn OK để quay lại trang trước.")';
                        echo '</script>';
                        echo header("refresh: 0; url='bai2.php'");
                    }
                ?>
            </div>
            <div class="form-group">
                <label class="col-3" for="">Số thứ nhất: </label>
                <input class="col-8" type="text" name="a" value="<?php echo $a ?>">
            </div>
            <div class="form-group">
                <label class="col-3" for="">Số thứ nhì: </label>
                <input class="col-8" type="text" name="b" value="<?php echo $b ?>">
            </div>
            <div class="form-group">
                <label class="col-3" for="">Kết quả: </label>
                <input class="col-8" type="text" name="result" value="<?php echo $result ?>">
            </div>
            <div class="text-center">
                <input type="submit" name="submit" id="submit" value="Tính">
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>