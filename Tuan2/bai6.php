<?php
    $a = $_POST['hk1'];
    $b = $_POST['hk2'];

    include "./xuly.php";
    $baitap6 = new BaiTapTuan2();
    if(isset($_POST['submit'])){
        if(is_numeric($a) && is_numeric($a) >= 0 && is_numeric($b) && is_numeric($b) >= 0){
            $DTB = $baitap6->DTB($a, $b);
            $KQ = $baitap6->KQ($DTB);
            $XL = $baitap6->XL($DTB);
        }
        else{
            echo "Vui lòng nhập số";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI 6</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="khung">
        <div id="head">KẾT QUẢ HỌC TẬP</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Điểm HK1: </td>
                        <td class="right"> 
                            <input type="text" name="hk1" value="<?php if(isset($_POST["hk1"]) && isset($_POST["hk1"]) >=0 ) echo $_POST["hk1"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Điểm HK2: </td>
                        <td class="right"> 
                            <input type="text" name="hk2" value="<?php if(isset($_POST["hk2"]) && isset($_POST["hk2"]) >=0 ) echo $_POST["hk2"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Điểm trung bình: </td>
                        <td class="right"> 
                            <input type="text" disabled="true" value=" <?php echo $DTB;?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Kết quả: </td>
                        <td class="right"> 
                            <input type="text" disabled="true" value="<?php echo $KQ;?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Xếp loại học lực: </td>
                        <td class="right"> 
                            <input type="text" disabled="true" value="<?php echo $XL;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix"> 
                            <input type="submit" name="submit" value="Xem kết quả">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>