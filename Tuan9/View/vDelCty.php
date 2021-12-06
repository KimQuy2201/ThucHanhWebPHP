<?php
    include_once ("Controller/cCompany.php");
    $comp = $_REQUEST["Comp"];
    $p = new controlCompany();
    $del = $p->deleteCompany($comp);
    if($del == 1){
        echo '<script>alert("Xóa công ty thành công")</script>';
        echo header("refresh:0; url='admin.php?cty'");
    }if($del == 0){
        echo '<script>alert("Xóa công ty thất bại")</script>';
        echo header("refresh:0; url='admin.php?cty'");
    }
?>