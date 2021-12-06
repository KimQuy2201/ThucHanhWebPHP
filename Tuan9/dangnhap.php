<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
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
    <form action="dntc.php" method="post">
        <h2>Đăng Nhập</h2>
        <table style="width: 98%;">
            <!-- tên -->
            <tr>
                <td class="l">Tên đăng nhập:</td>
                <td class="r">
                    <input style="width: 100%; height: 20px;" type="text" name="txtNamedn" required>
                </td>
            </tr>
            <!-- pass -->
            <tr>
                <td class="l">Mật khẩu:</td>
                <td class="r">
                    <input style="width: 100%; height: 20px;" type="text" name="txtPassdn" required>
                </td>
            </tr>
            <!-- button -->
            <tr>
                <td class="l"></td>
                <td class="r"> <br>
                    <input type="submit" name="submitdn" value="Đăng nhập">
                </td>
            </tr>
            <!-- link đăng ký -->
            <tr>
                <td colspan="2"> <br>
                    Chưa có tài khoản <a href="dangky.php">Đăng ký</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>