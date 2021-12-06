<form action="bai6.php" method="post">
<meta charset="UTF-8">
    <table>
        <tr>
            <td colspan="2" style="text-align:center; color:blue"> THÔNG TIN ĐĂNG KÝ</td>
        </tr>
        <tr>
            <td style="color:red">Thông tin tài khoản</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="pass">
            </td>
        </tr>
        <tr>
            <td>Nhập lại password</td>
            <td>
                <input type="password" name="repass">
            </td>
        </tr>
        <tr>
            <td style="color:red">Thông tin cá nhân</td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td>
                <input type="text" name="name" >
            </td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="add">
            </td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>
                <input type="tel" name="phone">
            </td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>
                Nam<input type="radio"  name="gt" value="Nam">
                Nữ<input type="radio"  name="gt" value="Nữ">
            </td>
        </tr>
        <tr>
            <td>Sở thích</td>
            <td>
                Đen <input type="checkbox" name="mau[]" value="Đen">
                Đỏ <input type="checkbox" name="mau[]" value="Đỏ">
                Trắng <input type="checkbox" name="mau[]" value="Trắng">
                Hồng <input type="checkbox" name="mau[]" value="Hồng">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submitdky" value="Đăng ký">
                <input type="reset" value="Reset">
                <!--<input type="hidden" name="dkthanhcong">-->
            </td>
        </tr>
    </table>
</form>