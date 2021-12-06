<?php
    include "xuly.php";
    $baitap1 = new BaiTapTuan2();

    if(isset($_POST["submit"])){
        $dai = $_POST["chieudai"];
        $rong = $_POST["chieurong"]; 
        if (is_numeric($dai) && is_numeric($rong)) {
            $dientich = $baitap1->DienTichHCM($dai, $rong);
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
    <title>BÀI 1</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="khung">
        <div id="head">DIỆN TÍCH HÌNH CHỮ NHẬT</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Chiều dài: </td>
                        <td class="right"> 
                            <input type="text" name="chieudai" value="<?php if(isset($_POST["chieudai"]) && $_POST["chieudai"] >0) echo $_POST["chieudai"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Chiều rộng: </td>
                        <td class="right"> 
                            <input type="text" name="chieurong" value="<?php if(isset($_POST["chieurong"]) && $_POST["chieurong"] >0) echo $_POST["chieurong"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Diện tích: </td>
                        <td class="right"> 
                            <input type="text" name="dientich" disabled="true" value="<?php echo $dientich;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix"> 
                            <input type="submit" name="submit" value="Tính">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>