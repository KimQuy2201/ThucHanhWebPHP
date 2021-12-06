<?php
    include_once("ketnoi.php");

    class modelCompany{
        function SelectAllCompany(){
            //$con= mysqli_connect("localhost", "KimQuy", "123456");
            $p= new clsketnoi();
            if ($p->ketnoiDb($con)){
                $string ="select * from company";
                $table= mysqli_query($con,$string);
                $p->dongketnoi($con);
                return $table;
            }else{
                return false;
            }
        }
    }
?>