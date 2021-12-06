<?php
    include_once ("Controller/cCompany.php");
    $p = new controlCompany();
    $tblcompany = $p->getAllCompany();
    if($tblcompany){
        if(mysqli_num_rows($tblcompany) > 0){
            while($row = mysqli_fetch_assoc($tblcompany)){
                echo "<a href='index.php?Comp=".$row["CompID"]."'>".$row['CompName']."</a> </br>";
            }
        }else{
            echo "0 Result";
        }
    }else{
        echo "Lỗi";
    }
?>