<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 6</title>
</head>
<body>
    <table>
    <form action="bai6b.php" method= "post">
        <h3>Form Đăng Ký</h3>
        <tr>
            <td>Email:</td>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td>
                <input type="pass" name="pass">
            </td>
        </tr>
        <tr>
            <td>Xác nhận mật khẩu:</td>
            <td>
                <input type="pass" name="repass">
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Đăng ký"></td>
        </tr>
    </form>
    </table>
</body>
</html>