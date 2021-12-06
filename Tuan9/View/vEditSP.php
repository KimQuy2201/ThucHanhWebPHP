<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    include_once ("Controller/cProduct.php");
    $prod = $_REQUEST["Prod"];
    $p = new controlProduct();
    $tblproduct = $p->getProduct($prod);
    if($tblproduct){
        if(mysqli_num_rows($tblproduct) > 0){
            while($row = mysqli_fetch_assoc($tblproduct)){
                $name = $row["ProdName"];
                $price = $row["ProdPrice"];
                $img = $row["ProdImage"];
                $des = $row["ProdDescription"];
            }
        }
    }
?>

<body> 
    <form style="display: inline-block;" action="#" method="post" enctype="multipart/form-data">
        <h2>Sửa Thông Tin Sản Phẩm</h2>
        <table style="width: 400px;">
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Tên sản phẩm:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtNameSP" value="<?php echo $name?>">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Giá:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtPriceSP" value="<?php echo $price?>">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Hình ảnh:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtImgSP" value="<?php echo $img?>">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Mô tả:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtDesSP" value="<?php echo $des?>">
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
            $name = $_REQUEST["txtNameSP"];
            $price = $_REQUEST["txtPriceSP"];
            $img = $_REQUEST["txtImgSP"];
            $des = $_REQUEST["txtDesSP"];
            $p = new controlProduct();
            $kq = $p->editProduct($name, $price, $img, $des, $prod);
            if($kq == 1){
                echo '<script>alert("Sửa thông tin sản phẩm thành công")</script>';
                echo header("refresh: 0; url='admin.php?sp'");
            }elseif($kq == 0){
                echo '<script>alert("Sửa thông tin sản phẩm thất bại")</script>';
            }else{
                echo "Thất bại của IT";
            }
        }
    ?>
</body>
</html>