<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>THÊM SẢN PHẨM</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <table style="margin: auto; text-align: left;">
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="txtTenSP" require></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input type="number" name="txtGiaSP" require></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="ffile" require></td>
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><textarea rows="5" clos="22" name="txtMota"></textarea></td>
            </tr>
            <tr>
                <td>Công ty cung cấp</td>
                <td>
                    <select name="cboCty">
                        <?php
                            include("Controller/cCompany.php");
                            $comp = new controlCompany();
                            $table = $comp->getAllCompany();
                            if(mysqli_num_rows($table)){
                                while($row = mysqli_fetch_assoc($table)){
                                    echo "<option value='".$row["CompID"]."'>".$row["CompName"]."</option>";
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnsubmit" value="Thêm">
                    <input type="reset" value="Nhập lại">
                </td>
            </tr>
        </table>
    </form>

    <?php
    include("Controller/cProduct.php");
    if(isset($_REQUEST["btnsubmit"])){
        //lấy dữ liệu được nhập từ form
        $ten = $_REQUEST["txtTenSP"];
        $gia = $_REQUEST["txtGiaSP"];
        $mota = $_REQUEST["txtMota"];
        $cty = $_REQUEST["cboCty"];
        $file = $_FILES["ffile"]["tmp_name"];
        $type = $_FILES["ffile"]["type"];
        $name = $_FILES["ffile"]["name"];
        $size = $_FILES["ffile"]["size"];
        $p = new controlProduct();
        //Gọi hàm thêm dữ liệu vào DB từ controller
        $kq = $p->AddProduct($ten, $gia, $mota, $file, $type, $name, $size, $cty);
        //Hiển thị các thông báo cần thiết
        if($kq==1){
            echo "<script>alert('Thêm dữ liệu thành công!')</script>";
            echo header("refresh:0; url='index.php?Prod'");
        }elseif($kq==0){
            echo "<script>alert('Không thể insert!')</script>";
        }elseif($kq==-1){
            echo "<script>alert('Không thể upload ảnh!')</script>";
        }elseif($kq==-2){
            echo "<script>alert('Size > 2MB')</script>";
        }elseif($kq==-3){
            echo "<script>alert('Không đúng định dạng!')</script>";
        }else{
            echo "lỗi gì đó!";
        }
    }
?>
</body>
</html>