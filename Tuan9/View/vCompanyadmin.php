<?php
    include_once ("Controller/cCompany.php");
    $p = new controlCompany();
    $tblcompany = $p->getAllCompany();
    if($tblcompany){
        if(mysqli_num_rows($tblcompany) > 0){
            $dem = 0;
            echo '<a href="admin.php?themcty">Thêm công ty</a>';
            echo "<table>";
            echo "<tr>";
            echo "<td>CompID</td>";
            echo "<td>CompName</td>";
            echo "<td>CompAddress</td>";
            echo "<td>CompPhone</td>";
            echo "<td>Email</td>";
            echo "<td colspan='2'>Edit</td>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($tblcompany)){
                if($dem == 0){
                    echo "<tr style='text-align: left'>";
                }
                echo "<td>".$row['CompID']."</td>";
                echo "<td>".$row['CompName']."</td>";
                echo "<td>".$row['CompAddress']."</td>";
                echo "<td>".$row['CompPhone']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td><a href='admin.php?editcty&Comp=".$row["CompID"]."'>Sửa</a></td>";            
                echo "<td><a href='admin.php?delete&Comp=".$row["CompID"]."'>Xóa</a></td>";
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