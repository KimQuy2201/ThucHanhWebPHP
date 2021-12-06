<?php
    class clsketnoi{
        function ketnoiDB(& $con){
            $con = mysqli_connect("localhost", "KimQuy", "123456");
            mysqli_set_charset($con, "utf8");
            if($con){
                return mysqli_select_db($con, "qlsp");
            }else{
                return false;
            }
        }
        function dongketnoi($con){
            mysqli_close($con);
        }
    }
?>