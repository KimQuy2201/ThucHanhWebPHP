<?php
    include_once ("ketnoi.php");
    class modelCompany{
        function SelectAllCompany(){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM Company";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        function SelectCompany($comp){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM Company WHERE CompID = $comp";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        function InsertCompany($name, $add, $phone, $email){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "INSERT INTO company(CompName, CompAddress, CompPhone, Email) VALUES";
                $string .= "(N'".$name."','".$add."','".$phone."','".$email."')";
                $kq = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $kq;
            }else{
                return false; 
            }
        }
        function UpdateCompany($comp, $name, $add, $phone, $email){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "UPDATE company SET CompName = '$name', CompAddress = '$add', CompPhone = '$phone', Email = '$email' WHERE CompID = $comp";
                $kq = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $kq;
            }else{
                return false; 
            }
        }

        function DeleteCompany($comp){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "DELETE FROM company WHERE CompID = $comp";
                $kq = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $kq;
            }else{
                return false; 
            }
        }
    }
?>