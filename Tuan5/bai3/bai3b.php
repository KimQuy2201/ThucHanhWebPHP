<?php
    echo "<meta charset= 'UTF-8'>";

    if (isset($_POST['submit'])){
        if ($_POST["name"] == 'MjG4T'){
            echo "xin chào!";
            echo header("refresh: 3, url='bai3.php'");
        }
        elseif ($_POST["name"] == ''){
            echo "<script> alert('Yêu cầu nhập liệu!') </script>" ;
            echo header("refresh: 0, url='bai3.php'");
        }
        else{
            echo "<script> alert('Nhập sai!') </script>" ;
            echo header("refresh: 0, url='bai3.php'");
        }
    }
    else{
        echo "<script> alert('Lỗi URL!') </script>" ;
        echo header("refresh: 0, url='bai3.php'");
    }  
?>