<?php
    if(isset($_SESSION['name']) && isset($_SESSION['pass']) && $_SESSION['name'] == 'admin' && $_SESSION['pass'] == '123456' ){
        echo "Đăng nhập thành công!</br> 2 giây quay lại";
        echo header("refresh: 2; url='./bai6.php'");
    }else{
        echo '<script language="javascript">';
        echo 'alert("Vui lòng nhập đúng thông tin!. Nhấn OK để quay lại trang trước.")';
        echo '</script>';
        echo header("refresh: 0; url='bai6.php'");
    }
    
?>