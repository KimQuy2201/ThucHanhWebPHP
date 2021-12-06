<?php
    class clsketnoi{
        //tao ham ket noi
        function ketnoiDB(& $conn){
            $conn= mysqli_connect("localhost", "KimQuy", "123456");
            mysqli_set_charset($conn,"utf8");
            if($conn){
                return mysqli_select_db($conn,"qlsp");
            }else{
                return false;
            }
        }
        function dongketnoi($conn){
            mysqli_close($conn);
        }      
    }
?>