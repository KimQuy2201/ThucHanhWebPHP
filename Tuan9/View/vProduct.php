<?php
    include_once ("Controller/cProduct.php");
    $p = new controlProduct();
    if(isset($_REQUEST['Comp'])){
        $cty = $_REQUEST['Comp'];
        $tblProduct = $p->getAllProductCompany($cty);
    }else{
        $tblProduct = $p->getAllProduct();
    }
    if($tblProduct){
        if(mysqli_num_rows($tblProduct) > 0){
            $dem = 0;
            echo "<table>";
                while($row = mysqli_fetch_assoc($tblProduct)){
                    if($dem == 0){
                        echo "<tr>";
                    }
                    echo '<td style="width: 300px">';
                    echo '<img width=200px height=250px src="image/'.$row["ProdImage"].'">';
                    echo '</br><a href="index.php?InfoSp&Prod='.$row["ProdID"].'">'.$row["ProdName"].'</a></br>'.$row["ProdPrice"].' VNĐ';
                    echo '</td>';                    
                    $dem++;
                    if($dem%4 == 0){
                        echo "</tr>";
                        $dem = 0;
                    }
                }
            echo "</table>";
        }else{
            echo "0 Result";
        }
    }else{
        echo "Lỗi";
    }
?>