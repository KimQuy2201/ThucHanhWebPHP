<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 7 + 8</title>
</head>
<body>
    <table border=2px; style="margin: auto; text-align: left; width: 1200px">
        <tr>
            <td colspan="2">Banner</td>
        </tr>
        <tr>
            <td colspan="2">Top menu</td>
        </tr>
        <tr class="_normal">
            <td id="left">
                <a href="admin.php?addProd">Thêm sản phẩm</a>
            </td>
            <td id="main">
                <?php
                    if (isset($_REQUEST["addProd"])) {
                        include("View/avAddProduct.php");
                    }
                    else{
                        echo "TRANG DÀNH CHO ADMIN!";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    include_once("View/vCompany.php")
                ?>
            </td>
            <td >Main</td>
        </tr>
        <tr>
            <td>
                <?php
                    include_once("View/vProduct.php")
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">Footer</td>
        </tr>
    </table>
    
</body>
</html>