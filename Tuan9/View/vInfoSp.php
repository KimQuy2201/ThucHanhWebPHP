<?php
    include_once("Controller/cProduct.php");
    $p= new controlProduct();
    if(isset($_REQUEST['Prod'])){
        $prod=$_REQUEST['Prod'];
        $tblprod= $p->getProduct($prod);
    }
    if($tblprod){
        if(mysqli_num_rows($tblprod) > 0){
            $dem = 0;
            echo "<table>";
            while($row = mysqli_fetch_assoc($tblprod)){
                echo "<tr>";
                    echo "<td colspan='2'>";
                        echo '<center><b>'.$row["ProdName"].'</b></center>';
                    echo "</td>";
                echo "</tr>";
                //Anh
                echo "<tr>";

                    echo "<td>";
                        echo '<img width=150px height=150px src="image/'.$row["ProdImage"].'">';
                    echo "</td>";
                    
                    echo "<td>";
                        echo $row["ProdDescription"];
                        echo "</br>";
                        echo '<p style="text-align:right"><b>'.$row["ProdPrice"].'VND'.'</b></p>';
                    echo "</td>";
                echo "</tr>";
                //Nut quay lai
                echo "<tr>";
                    echo "<td colspan='2' style='text-align:left'>";
                        echo '<a href="index.php">Quay lại</a>';
                    echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "0 Result";
        }
    }else{
        echo "Lỗi";
    }
?>