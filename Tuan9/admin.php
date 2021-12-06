<?php
session_start();
if ($_SESSION["dntc"] == true) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quản lý</title>
        <style>
            .table, td {
                border: 1px solid black;
            }

            .left {
                width: 15%;
                text-align: left;
            }

            .banner {
                text-align: left;
            }
        </style>
    </head>

    <body>
        <table border="2" style="width:100%; text-align: center;">
            <tr>
                <td colspan="2">Header</td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="index.php">Trang chủ</a>
                    | <a href="index.php?dx">Đăng xuất</a>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <a href="admin.php?cty">Quản lý công ty</a> <br>
                    <a href="admin.php?sp">Quản lý sản phẩm</a>
                </td>
                <td>
                    <?php
                    if (isset($_REQUEST["cty"])) {
                        include_once("View/vCompanyadmin.php");
                    }
                    if (isset($_REQUEST["themcty"])) {
                        include_once("View/vAddCty.php");
                    }
                    if (isset($_REQUEST["editcty"])) {
                        include_once("View/vEditCty.php");
                    }
                    if (isset($_REQUEST["delete"])) {
                        include_once("View/vDelCty.php");
                    }
                    if (isset($_REQUEST["sp"])) {
                        include_once("View/vProductadmin.php");
                    }
                    if (isset($_REQUEST["editsp"])) {
                        include_once("View/vEditSP.php");
                    }
                    if (isset($_REQUEST["deletesp"])) {
                        include_once("View/vDelSP.php");
                    }
                    if (isset($_REQUEST["themsp"])) {
                        include_once("View/vAddSP.php");
                    }
                    if (
                        !isset($_REQUEST["cty"]) && !isset($_REQUEST["sp"]) && !isset($_REQUEST["themcty"]) && !isset($_REQUEST["editcty"])
                        && !isset($_REQUEST["delete"]) && !isset($_REQUEST["editsp"]) && !isset($_REQUEST["deletesp"]) && !isset($_REQUEST["themsp"])
                    ) {
                        echo "Trang dành cho admin";
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
<?php } else {
    echo header("refresh: 0; url='dangnhap.php'");
}
?>