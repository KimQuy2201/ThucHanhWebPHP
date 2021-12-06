<?php
    $toan = $_POST['toan'];
    $ly = $_POST['ly'];
    $hoa = $_POST['hoa'];
    $dc = $_POST['diemchuan'];

    include "./xuly.php";
    $baitap7 = new BaiTapTuan2();
    if(isset($_POST['submit'])){
        if(isset($_POST['submit'])){
            if(is_numeric($toan) && is_numeric($toan) >= 0 && is_numeric($ly) && is_numeric($ly) >= 0 && is_numeric($hoa) && is_numeric($hoa) >= 0 && is_numeric($dc) && is_numeric($dc) >= 0){
                $tongdiem = $baitap7->TongDiem($toan, $ly, $hoa);
                $ketqua = $baitap7->KetQua($toan, $ly, $hoa, $tongdiem, $dc);
            }
            else{
                echo "Vui lòng nhập số";
            }
           
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI 7</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="khung">
        <div id="head">KẾT QUẢ THI ĐẠI HỌC</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Toán: </td>
                        <td class="right"> 
                            <input type="text" name="toan" value="<?php if(isset($_POST["toan"]) && isset($_POST["toan"]) >=0 ) echo $_POST["toan"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Lý: </td>
                        <td class="right"> 
                            <input type="text" name="ly" value="<?php if(isset($_POST["ly"]) && isset($_POST["ly"]) >=0 ) echo $_POST["ly"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Hóa: </td>
                        <td class="right"> 
                            <input type="text" name="hoa" value="<?php if(isset($_POST["hoa"]) && isset($_POST["hoa"]) >=0 ) echo $_POST["hoa"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Điểm chuẩn: </td>
                        <td class="right"> 
                            <input type="text" name="diemchuan" value="<?php if(isset($_POST["diemchuan"]) && isset($_POST["diemchuan"]) >=0 ) echo $_POST["diemchuan"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Tổng điểm: </td>
                        <td class="right"> 
                            <input type="text" disabled="true" value="<?php echo $tongdiem;?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Kết quả thi: </td>
                        <td class="right"> 
                            <input type="text" disabled="true" value="<?php echo $ketqua;?>">
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