<?php
    echo '<meta charset="UTF-8">';
    session_start();
    if(isset($_REQUEST["submitdn"])){
        $a = $_REQUEST["txtPassdn"];
        $b = $_REQUEST["txtNamedn"];
        $c = $_SESSION["pass"];
        $d = $_SESSION["name"];
        if($a == $c && $b == $d){
            echo '<script>alert("Đăng nhập thành công!");</script>';
            echo header("refresh:0; url='admin.php'");
            $_SESSION["dntc"] = true;
        }else{
            echo '<script>alert("Đăng nhập thất bại!");</script>';
            echo header("refresh:0; url='dangnhap.php'");
        }
    }else{
        echo header("refresh:0; url='dangnhap.php'");
    }
?>