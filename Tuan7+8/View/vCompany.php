<?php
    include_once("Controller/cCompany.php");
    $p=new controlCompany();
    $tblCompany= $p->getAllCompany();
    if($tblCompany){
        if(mysqli_num_rows($tblCompany)>0){
            while($row = mysqli_fetch_assoc($tblCompany)){
                echo "<a href='index.php?Comp=".$row["CompID"]."'>".$row["CompName"]."</a>"."<br>";
            }
        }else{
            echo "0 result";
        }
    }else{
        echo "Error";
    }
 ?>