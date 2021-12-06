<?php
    echo '<meta charset="UTF-8">';
    session_start();
    if(isset($_REQUEST["submit"])){
        $a = $_REQUEST["txtPass"];
        $b = $_REQUEST["txtRePass"];
        if($a != $b){
            echo '<script>alert("Mật khẩu không trùng khớp!");</script>';
            echo header("refresh:0; url='dangky.php'");
        }else{
            $_SESSION["name"] = $_REQUEST["txtName"];
            $_SESSION["pass"] = $_REQUEST["txtPass"];
            echo '<script>alert("Đăng ký thành công!");</script>';
            echo header("refresh:0; url='dangnhap.php'");
        }
    }else{
        echo header("refresh:0; url='dangky.php'");
    }
?>