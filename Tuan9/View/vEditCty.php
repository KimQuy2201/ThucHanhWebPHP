<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    include_once ("Controller/cCompany.php");
    $comp = $_REQUEST["Comp"];
    $p = new controlCompany();
    $tblcompany = $p->getCompany($comp);
    if($tblcompany){
        if(mysqli_num_rows($tblcompany) > 0){
            while($row = mysqli_fetch_assoc($tblcompany)){
                $name = $row["CompName"];
                $add = $row["CompAddress"];
                $phone = $row["CompPhone"];
                $email = $row["Email"];
            }
        }
    }
?>

<body> 
    <form style="display: inline-block;" action="#" method="post" enctype="multipart/form-data">
        <h2>Sửa Thông Tin Công Ty</h2>
        <table style="width: 400px;">
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Tên công ty:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtNameCty" value="<?php echo $name?>">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Địa chỉ:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtAddCty" value="<?php echo $add?>">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Số điện thoại:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtPhoneCty" value="<?php echo $phone?>">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Email:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtEmailCty" value="<?php echo $email?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right; border: none;">
                    <input type="submit" name="submit" value="Sửa">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_REQUEST["submit"])){
            $name = $_REQUEST["txtNameCty"];
            $add = $_REQUEST["txtAddCty"];
            $phone = $_REQUEST["txtPhoneCty"];
            $email = $_REQUEST["txtEmailCty"];
            $p = new controlCompany();
            $kq = $p->editCompany($comp, $name, $add, $phone, $email);
            if($kq == 1){
                echo '<script>alert("Sửa thông tin công ty thành công")</script>';
                echo header("refresh: 0; url='admin.php?cty'");
            }elseif($kq == 0){
                echo '<script>alert("Sửa thông tin công ty thất bại")</script>';
            }else{
                echo "Thất bại của IT";
            }
        }
    ?>
</body>
</html>