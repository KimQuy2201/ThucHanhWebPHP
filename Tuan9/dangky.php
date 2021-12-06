<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        form{
            border: 1px solid;
            width: 30%;
            margin: auto;
            margin-top: 10%;
        }
        .l{
            text-align: right;
        }
        .r{
            text-align: left;
        }
        h2{
            margin: 0 0 10px 0;
            padding: 10px 0;
            text-align: center;
            background-color: #4444;
        }
    </style>
</head>
<body>
    <form action="dktc.php" method="post">
        <h2>Đăng Ký</h2>
        <table style="width: 98%;">
            <!-- tên -->
            <tr>
                <td class="l">Tên đăng nhập:</td>
                <td class="r">
                    <input style="width: 100%; height: 20px;" type="text" name="txtName" required>
                </td>
            </tr>
            <!-- pass -->
            <tr>
                <td class="l">Mật khẩu:</td>
                <td class="r">
                    <input style="width: 100%; height: 20px;" type="text" name="txtPass" required>
                </td>
            </tr>
            <!-- repass -->
            <tr>
                <td class="l">Nhập lại mật khẩu:</td>
                <td class="r">
                    <input style="width: 100%; height: 20px;" type="text" name="txtRePass" required>
                </td>
            </tr>
            <!-- button -->
            <tr>
                <td class="l"></td>
                <td class="r"> <br>
                    <input type="submit" name="submit" value="Đăng ký">
                </td>
            </tr>
            <!-- link đăng nhập -->
            <tr>
                <td colspan="2"> <br>
                    Đã có tài khoản <a href="dangnhap.php">Đăng nhập</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>