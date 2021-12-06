<?php 
    session_start();
    if($_SESSION["dntc"] == true){
        $quanly = "admin.php";
    }else{
        $quanly = "dangnhap.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <table border="2" style="text-align:center;" class="table">
        <tr>
            <td colspan="2">Header</td>
        </tr>
        <tr class="banner">
            <td colspan="2">
                <a style="margin-right: 10px;" href="index.php">Trang chủ</a>
                <a style="margin-right: 10px;" href="<?php echo $quanly?>">Quản lý</a>
                <?php 
                    if($_SESSION["dntc"] == true){
                        echo '| <a style="margin-right: 10px;" href="index.php?dx">Đăng xuất</a>';
                    }
                    if(isset($_REQUEST["dx"])){
                        unset($_SESSION["dntc"]);
                        echo header("refresh:0; url='index.php'");
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td style="text-align: left; width: 300px;">
                <?php
                    include_once ("View/vCompany.php");
                ?>
            </td>
            <td class="right">
                <?php
                    if(isset($_REQUEST["InfoSp"])){
                        include_once ("View/vInfoSp.php");
                    }else{
                        include_once ("View/vProduct.php");
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">Footer</td>
        </tr>
    </table>
</body>
</html>