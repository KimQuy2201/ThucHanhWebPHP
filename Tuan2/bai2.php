<?php
    include "xuly.php";
    $baitap2 = new BaiTapTuan2();

    if(isset($_POST["submit"])){
        $bk = $_POST["bankinh"];
        if (is_numeric($bk)) {
            $chuvi = $baitap2->ChuViHinhTron($bk);
            $dientich = $baitap2->DienTichHinhTron($bk);
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
    <title>BÀI 2</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="khung">
        <div id="head">DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Bán kính: </td>
                        <td class="right"> 
                            <input type="text" name="bankinh" value="<?php if(isset($_POST["bankinh"]) && $_POST["bankinh"] >0) echo $_POST["bankinh"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Chu vi: </td>
                        <td class="right"> 
                            <input type="text" name="chuvi" disabled="true" value="<?php  echo $chuvi;?>">
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