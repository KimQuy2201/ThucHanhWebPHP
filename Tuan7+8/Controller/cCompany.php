<?php 
    include_once("Model/mCompany.php");
    class controlCompany{
        function getAllCompany(){
            $p= new modelCompany();
            $tblCompany=$p->SelectAllCompany();
            return $tblCompany;
        }
    }
?>