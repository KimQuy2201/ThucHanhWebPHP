<?php
    include_once ("Model/mProduct.php");
    class controlProduct{
        function getAllProduct(){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProduct();
            return $tblProduct;
        }
        function getProduct($prod){
            $p = new modelProduct();
            $tblProduct = $p->SelectProduct($prod);
            return $tblProduct;
        }
        function getAllProductCompany($comp){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProductCompany($comp);
            return $tblProduct;
        }
        function editProduct($name, $price, $img, $des, $prod){
            $p = new modelProduct();
            $up = $p->UpdateProduct($name, $price, $img, $des, $prod);
            if($up){
                return 1;
            }else{
                return 0;
            }
        }
        function deleteProduct($prod){
            $p = new modelProduct();
            $del = $p->DeleteProduct($prod);
            if($del){
                return 1;
            }else{
                return 0;
            }
        }
        function addProduct($name, $price, $tmpimg, $typeimg, $nameimg, $sizeimg, $des, $comp){
            if($typeimg == "image/jpeg" || $typeimg == "image/png"){
                if($sizeimg <= 2*1024*1024){
                    if(move_uploaded_file($tmpimg, "image/".$nameimg)){                        
                        $p = new modelProduct();
                        $ins = $p->InsertProduct($name, $price, $nameimg, $des, $comp);
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