<?php
    include ("Model/mProduct.php");
    class controlProduct{
        // Lấy toàn bộ sản phẩm
        // function getAllProduct(){
        //     $p = new modelProduct();
        //     $tblProduct = $p->SelectAllProduct();
        //     return $tblProduct;
        // }
        // thay thế getAllProduct() thành countProduct để đếm số lượng sản phẩm có trong bảng Product
        function countProduct(){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProduct();
            return mysqli_num_rows($tblProduct);
        }
        // lấy dữ liệu theo giá trị $page và $count truyền vào
        function getAllProductPage($start, $limit){
            $p = new modelProduct();     
            $tblProduct = $p->SelectAllProductPage($start, $limit);
            return $tblProduct;
        }
        // Lấy toàn bộ sản phẩm theo cong ty với mã cty là tham số
        // function getAllProductByCompany($comp){
        //     $p = new modelProduct();
        //     $tblProduct = $p->SelectAllProductByCompany($comp);
        //     return $tblProduct;
        // }
        // thay thế getAllProductByCompany() thành countProductByCompany để đếm số lượng sản phẩm có trong bảng Product
        function countProductByCompany($comp){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProductByCompany($comp);
            return mysqli_num_rows($tblProduct);
        }
        // lấy dữ liệu theo giá trị $page và $count truyền vào
        function getAllProductPageByCompany($start, $limit, $comp){
            $p = new modelProduct();  
            $tblProduct = $p->SelectAllProductPageByCompany($start, $limit, $comp);
            return $tblProduct;
        }

//Tuần 8
        function AddProduct($ten, $gia, $mota, $file, $loaianh, $tenanh, $sizeanh, $cty){
            if($loaianh == "image/jpeg" || $loaianh == "image/png"){
                if($sizeanh <= 2*1024*1024){
                    if(move_uploaded_file($file, "image/".$tenanh)){                        
                        $p = new modelProduct();
                        $ins = $p->InsertProduct($ten, $gia, $mota, $tenanh, $cty);
                        if($ins){
                            return 1;
                        }else{
                            return 0; // Không thể insert
                        }
                    }else{
                        return -1; // Không thể upload
                    }
                }else{
                    return -2; //Size quá lớn
                }
            }else{
                return -3; // Không đúng loại file
            }
        }
    }
?>