<?php
    $a = $_POST['start'];
    $b = $_POST['end'];

    include "./xuly.php";
    $baitap8 = new BaiTapTuan2();
    if(isset($_POST['submit'])){
        if(is_numeric($a) && is_numeric($a) > 0 && is_numeric($b) && is_numeric($b) > 0){
            $result = $baitap8->ThanhToan($a, $b);
        }
        else{
            $result = $baitap8->phpAlert($error);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI 8</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="khung">
        <div id="head">TÍNH TIỀN KARAOKE</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Giờ bắt đầu: </td>
                        <td class="right"> 
                            <input type="text" name="start" value="<?php if(isset($_POST["start"]) && isset($_POST["start"]) > 0) echo $_POST["start"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Giờ kết thúc: </td>
                        <td class="right"> 
                            <input type="text" name="end" value="<?php if(isset($_POST["end"]) && isset($_POST["end"]) > 0) echo $_POST["end"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Tiền thanh toán: </td>
                        <td class="right"> 
                            <input type="text" disabled="true" value="<?php echo $result;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix"> 
                            <input type="submit" name="submit" value="Tính tiền">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>