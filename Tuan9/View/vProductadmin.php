<?php
    include_once ("Controller/cProduct.php");
    $p = new controlProduct();
    $tblproduct = $p->getAllProduct();
    if($tblproduct){
        if(mysqli_num_rows($tblproduct) > 0){
            $dem = 0;
            echo '<a href="admin.php?themsp">Thêm sản phẩm</a>';
            echo "<table>";
            echo "<tr>";
            echo "<td>ProdID</td>";
            echo "<td>ProdName</td>";
            echo "<td>ProdPrice</td>";
            echo "<td>ProdImage</td>";
            echo "<td>ProdDescription</td>";
            echo "<td>CompID</td>";
            echo "<td colspan='2'>Edit</td>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($tblproduct)){
                if($dem == 0){
                    echo "<tr style='text-align: left'>";
                }
                echo "<td>".$row['ProdID']."</td>";
                echo "<td>".$row['ProdName']."</td>";
                echo "<td style='width: 15%;'>".$row['ProdPrice']." VNĐ</td>";
                echo "<td><img width=60px height=70px src='image/".$row['ProdImage']."'></td>";
                echo "<td>".$row['ProdDescription']."</td>";
                echo "<td>".$row['CompID']."</td>";
                echo "<td><a href='admin.php?editsp&Prod=".$row["ProdID"]."'>Sửa</a></td>";            
                echo "<td><a href='admin.php?deletesp&Prod=".$row["ProdID"]."'>Xóa</a></td>";
                $dem++;
                if($dem%1 == 0){
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