<?php
    include_once ("ketnoi.php");
    class modelProduct{
        // hàm lấy tất cả sản phẩm
        function SelectAllProduct(){
            //$con = mysqli_connect ("localhost", "KimQuy", "123456");
            $p = new clsketnoi();
            if($p->ketnoiDB($con)){
                $string = "SELECT * FROM product";
                $table = mysqli_query($con, $string);
                $p->dongketnoi($con);
                return $table;
            }else{
                return false;
            }
        }
        
        // lấy 01 phần danh sách sản phẩm từ vị trí limit đến vị trí count
        function SelectAllProductPage($start, $limit){
            //$con = mysqli_connect ("localhost", "KimQuy", "123456");
            $p = new clsketnoi();
            if($p->ketnoiDB($con)){
                // truy vấn dữ liệu danh sách từ vị trí limit đến count
                $string = "SELECT * FROM product order by ProdID desc limit $start, $limit";
                $table = mysqli_query($con, $string);
                $p->dongketnoi($con);
                return $table;
            }else{
                return false;
            }
        }

        // hàm lấy tất cả sản phẩm theo công ty
        function SelectAllProductByCompany($comp){
            //$con = mysqli_connect ("localhost", "KimQuy", "123456");
            $p = new clsketnoi();
            if($p->ketnoiDB($con)){
                $string = "SELECT * FROM product where CompID = $comp";
                $table = mysqli_query($con, $string);
                $p->dongketnoi($con);
                return $table;
            }else{
                return false;
            }
        }

        // lấy 01 phần danh sách sản phẩm từ vị trí limit đến vị trí count
        function SelectAllProductPageByCompany($start, $limit, $comp){
            //$con = mysqli_connect ("localhost", "KimQuy", "admin");
            $p = new clsketnoi();
            if($p->ketnoiDB($con)){
                // truy vấn dữ liệu danh sách từ vị trí limit đến count
                $string = "SELECT * FROM product where CompID = $comp limit $start, $limit";
                $table = mysqli_query($con, $string);
                $p->dongketnoi($con);
                return $table;
            }else{
                return false;
            }
        }

//Tuần 8
        function InsertProduct($ten, $gia, $mota, $hinh, $cty){
            $p = new clsketnoi();
            if($p->ketnoiDB($con)){
                $string = "insert into product(ProdName, ProdPrice, ProdDescription, ProdImage, CompID) values";
                $string .= "(N'".$ten."', '".$gia."', '".$mota."', '".$hinh."',".$cty.")";
                $kq = mysqli_query($con, $string);
                $p->dongketnoi($con);
                return $kq;                
            }else{
                return false;
            }
        }
    }
?>