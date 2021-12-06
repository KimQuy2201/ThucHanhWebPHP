<?php
    session_start();
    if(isset($_SESSION['trangthai'])){
        $_SESSION['trangthai']=0;
    }
    if(isset($_REQUEST['dky'])){
        $_SESSION['trangthai']=1;
    }
    if(isset($_REQUEST['dn'])){
        $_SESSION['trangthai']=3;
    }
    if(isset($_REQUEST['dky'])){
        $_SESSION['trangthai']=4;
    }
    if(isset($_POST['submitdky'])){
        $_SESSION['trangthai']=2;   
        if(isset($_POST['email'])){
            $_SESSION['email'] = $_POST['email'];
        }
        if(isset($_POST['pass'])){
            $_SESSION['pass'] = $_POST['pass'];
        }
        if(isset($_POST['repass'])){
            $_SESSION['repass'] = $_POST['repass'];
        }
        if(isset($_POST['name'])){
            $_SESSION['name'] = $_POST['name'];
        }
        if(isset($_POST['add'])){
            $_SESSION['add'] = $_POST['add'];
        }
        if(isset($_POST['phone'])){
            $_SESSION['phone'] = $_POST['phone'];
        }
        if(isset($_POST['gt'])){
            $_SESSION['gt'] = $_POST['gt'];
        }
        if(isset($_POST['mau'])){
            $_SESSION['mau'] = $_POST['mau'];
        }
    }
    if(isset($_POST['submitdn'])){
        $_SESSION['trangthai']=5;
        if(isset($_POST['email'])){
            $_SESSION['email'] = $_POST['email'];
        }
        if(isset($_POST['pass'])){
            $_SESSION['pass'] = $_POST['pass'];
        }
        if(isset($_POST['repass'])){
            $_SESSION['repass'] = $_POST['repass'];
        }
        if(isset($_POST['name'])){
            $_SESSION['name'] = $_POST['name'];
        }
        if(isset($_POST['add'])){
            $_SESSION['add'] = $_POST['add'];
        }
        if(isset($_POST['phone'])){
            $_SESSION['phone'] = $_POST['phone'];
        }
        if(isset($_POST['gt'])){
            $_SESSION['gt'] = $_POST['gt'];
        }
        if(isset($_POST['mau'])){
            $_SESSION['mau'] = $_POST['mau'];
        }
        if(isset($_POST['emaildn'])){
            $_SESSION['emaildn'] = $_POST['emaildn'];
        }
        if(isset($_POST['passdn'])){
            $_SESSION['passdn'] = $_POST['passdn'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
    <style>
        tr{
            border:1px solid black;
        }
        a{
            text-decoration: none;
            
        }
    </style>
</head>
<body>
    <table style="margin:auto; width: 800px; " border=1 >
        <tr>
            <td style="width:30%; vertical-align:top">
                <a href="bai6.php">Trang Chủ</a></br>
                <?php
                     switch($_SESSION['trangthai']){
                        case 0: case 1:
                            echo "<a href='bai6.php?dky'>Đăng ký</a>";
                            break;
                        case 2:
                            echo "<a href='bai6.php?dn'>Đăng nhập</a>";
                            echo "<br>";
                            echo "<a href='bai6.php?dky'>Đăng ký</a>";
                            break;
                        case 3:
                            echo "<a href='bai6.php?dky'>Đăng ký</a>";
                            echo "<br>";
                            echo "<a href='bai6.php?dn'>Đăng nhập</a>";
                            break;
                        case 5:
                            echo "<a href='bai6.php'>Đăng xuất</a>";
                            break;
                    }
                ?>
                
            </td>
            <td style="width:70%; vertical-align:top">
                <?php
                    switch($_SESSION['trangthai']){
                        case 0:
                            echo " Welcome to PHP!"; 
                            break;
                        case 1: case 4:
                            include 'Dangky.php'; 
                            break;
                        case 3:
                            include 'Dangnhap.php'; 
                            break;
                        case 2:
                            echo "<b>Chúc mừng bạn đã đăng ký thành công!</b> </br>";
                            include 'dkthanhcong.php'; 
                            break;
                        case 5:
                            if ($_SESSION['emaildn'] != $_SESSION['email'] || $_SESSION['passdn'] != $_SESSION['pass']){
                                echo '<script language="javascript">';
                                echo 'alert("Email hoặc password sai, Vui lòng nhập lại!. Nhấn OK để quay lại trang trước.")';
                                echo '</script>';
                                echo header("refresh: 0; url='bai6.php?dn'");
                            }
                            else {
                                echo "<b>Chúc mừng bạn đã đăng nhập thành công!</b> </br>";
                                include 'dkthanhcong.php';
                                break;
                            }   
                    }
                ?>    
            </td>
        </tr>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>