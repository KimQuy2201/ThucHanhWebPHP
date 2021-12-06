<?php
include_once ("Model/mCompany.php");
    class controlCompany{
        function getAllCompany(){
            $p = new modelCompany();
            $tblcompany = $p->SelectAllCompany();
            return $tblcompany;
        }
        function getCompany($comp){
            $p = new modelCompany();
            $tblcompany = $p->SelectCompany($comp);
            return $tblcompany;
        }
        function addCompany($name, $add, $phone, $email){
            $p = new modelCompany();
            $ins = $p->InsertCompany($name, $add, $phone, $email);
            if($ins){
                return 1;
            }else{
                return 0;
            }
        }
        function editCompany($comp, $name, $add, $phone, $email){
            $p = new modelCompany();
            $up = $p->UpdateCompany($comp, $name, $add, $phone, $email);
            if($up){
                return 1;
            }else{
                return 0;
            }
        }
        
        function deleteCompany($comp){
            $p = new modelCompany();
            $del = $p->DeleteCompany($comp);
            if($del){
                return 1;
            }else{
                return 0;
            }
        }
    }
?>