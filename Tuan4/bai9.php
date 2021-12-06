<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 9</title>
</head>
<body>
    <div style="border: 1px solid; width: 300px;">
        <form action="/ketqua/bai9b.php" method="post">
            <table>
                <tr>
                    <td colspan="2" style="text-align:center; color:blue"> THÔNG TIN SINH VIÊN</td>
                </tr>
                <tr>
                    <td>Họ và Tên:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Ngày sinh:</td>
                    <td><input type="text" name="date"></td>
                </tr>
                <tr>
                    <td>Lớp:</td>
                    <td><input type="text" name="class"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="diachi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>