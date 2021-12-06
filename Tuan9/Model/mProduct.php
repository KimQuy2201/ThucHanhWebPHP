<?php
    include_once ("ketnoi.php");
    class modelProduct{
        function SelectAllProduct(){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM Product";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
        function SelectProduct($prod){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM Product WHERE ProdID = $prod";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
        function SelectAllProductCompany($comp){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM Product WHERE CompID = $comp";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
        function UpdateProduct($name, $price, $img, $des, $prod){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "UPDATE product SET ProdName = '$name', ProdPrice = '$price', ProdImage = '$img', ProdDescription = '$des' WHERE ProdID = $prod";
                $kq = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $kq;
            }else{
                return false; 
            }
        }
        function DeleteProduct($prod){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "DELETE FROM product WHERE ProdID = $prod";
                $kq = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $kq;
            }else{
                return false; 
            }
        }
        function InsertProduct($name, $price, $img, $des, $comp){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "INSERT INTO product(ProdName, ProdPrice, ProdImage, ProdDescription, CompID) VALUES";
                $string .= "(N'".$name."','".$price."','".$img."','".$des."',".$comp.")";
                $kq = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $kq;
            }else{
                return false; 
            }
        }
    }
?>