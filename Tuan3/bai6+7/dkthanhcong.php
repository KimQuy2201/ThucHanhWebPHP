<?php
    echo "Email: ".$_SESSION['email']."</br>";
    echo "Họ tên: ".$_SESSION['name']."</br>";
    echo "Địa chỉ: ".$_SESSION['add']."</br>";
    echo "Điện thoại: ".$_SESSION['phone']."</br>";
    echo "Giới tính: ".$_SESSION['gt']."</br>";
    echo "Sở thích: ";
    foreach($_SESSION["mau"] as $value){
        echo $value." ";
    }
    echo "</br> Chúc mừng bạn đã đăng ký thành công click <a href='bai6.php'>vào đây</a> để về trang chủ </br>hoặc hệ thống sẽ tự chuyển về trang chủ sau 10 giây";
    echo header("refresh:10; url='bai6.php'"); 
?>