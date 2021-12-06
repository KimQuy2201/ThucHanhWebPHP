<?php
    include_once ("Controller/cProduct.php");
    $prod = $_REQUEST["Prod"];
    $p = new controlProduct();
    $del = $p->deleteProduct($prod);
    if($del == 1){
        echo '<script>alert("Xóa sản phẩm thành công")</script>';
        echo header("refresh:0; url='admin.php?sp'");
    }if($del == 0){
        echo '<script>alert("Xóa sản phẩm thất bại")</script>';
        echo header("refresh:0; url='admin.php?sp'");
    }
?>