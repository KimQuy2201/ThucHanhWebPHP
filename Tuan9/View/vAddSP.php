<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form style="display: inline-block;" action="#" method="post" enctype="multipart/form-data">
        <h2>Thêm Sản Phẩm</h2>
        <table style="width: 400px;">
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Tên sản phẩm:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtNameSP">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Giá:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtPriceSP">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Hình ảnh:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="file" name="txtImgSP">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Mô tả:</span></td>
                <td style="border: none;">
                    <input style="width: 97%; height: 20px;" type="text" name="txtDesSP">
                </td>
            </tr>
            <tr>
                <td style="width: 100px; text-align: right; border: none;"><span>Công ty:</span></td>
                <td style="border: none;">
                    <select style="width: 97%; height: 20px;" name="cboCty">
                        <?php
                            include_once("Controller/cCompany.php");                                    
                            $comp = new controlCompany();
                            $table = $comp->getAllCompany();
                            if(mysqli_num_rows($table)){
                                while($row = mysqli_fetch_assoc($table)){
                                    echo '<option value="'.$row["CompID"].'">'.$row["CompName"].'</option>';
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right; border: none;">
                    <input type="submit" name="submit" value="Thêm">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
        include_once ("Controller/cProduct.php");
        if(isset($_REQUEST["submit"])){
            $name = $_REQUEST["txtNameSP"];
            $price = $_REQUEST["txtPriceSP"];
            $tmpimg = $_FILES["txtImgSP"]["tmp_name"];
            $typeimg = $_FILES["txtImgSP"]["type"];
            $nameimg = $_FILES["txtImgSP"]["name"];
            $sizeimg = $_FILES["txtImgSP"]["size"];
            $des = $_REQUEST["txtDesSP"];
            $comp = $_REQUEST["cboCty"];
            $p = new controlProduct();
            $kq = $p->AddProduct($name, $price, $tmpimg, $typeimg, $nameimg, $sizeimg, $des, $comp);
            if($kq == 1){
                echo '<script>alert("Thêm sản phẩm thành công")</script>';
                echo header("refresh: 0; url='admin.php?sp'");
            }elseif($kq == 0){
                echo '<script>alert("Không thể thêm sản phẩm")</script>';
            }elseif($kq == -1){
                echo '<script>alert("Không thể Upload ảnh")</script>';
            }elseif($kq == -2){
                echo '<script>alert("Size > 2MB")</script>';
            }elseif($kq == -3){
                echo '<script>alert("Không đúng định dạng")</script>';
            }else{
                echo "Thất bại của IT";
            }
        }
    ?>
</body>
</html>