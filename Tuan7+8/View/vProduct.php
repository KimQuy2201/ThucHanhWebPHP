<?php
    // include controller Product
    include ("Controller/cProduct.php");
    // Khai báo biến đại diện cho Controller Product
    $p = new controlProduct();
    if(isset($_REQUEST["Comp"])){
        $cty = $_REQUEST["Comp"];

        $count = $p->countProductByCompany($cty);
        
        // TÌM CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;
        // tổng số trang
        $total_page = ceil($count / $limit);
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        // 
        $a = "Comp=".$cty."&";
        $tblProduct = $p->getAllProductPageByCompany($start, $limit, $cty);

        // Gọi hàm getAllProductByCompany
        //$tblProduct = $p->getAllProductByCompany($cty);
    }
    else{
        // Goi hàm getALlProduct
        //$tblProduct = $p->getAllProduct();
        $count = $p->countProduct();
        
        // TÌM CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 8;
        // tổng số trang
        $total_page = ceil($count / $limit);
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        // 
        $a = "";
        $tblProduct = $p->getAllProductPage($start, $limit);
    }
    if($tblProduct){
        // Kiểm tra kết quả trả về có dữ liệu
        if(mysqli_num_rows($tblProduct) > 0){
            // tạo biến đếm để ktra hiển thị dữ liệu
            $dem = 0;
            // tạo table hiển thị
            echo "<table style='width: 100%'>";
            // duyệt từng dòng dữ liệu trong kqua nhận đc sau khi truy xuất
            while($row = mysqli_fetch_assoc($tblProduct)){
                if($dem == 0){
                    echo "<tr>";
                }
                echo '<td style="width: 25%; height: 100%;">';
                echo '<img width=200px height= 250px src="image/'.$row["ProdImage"].'"/>';
                echo '<br>'.$row["ProdName"].'<br>'.$row["ProdPrice"];
                echo '</td>';
                $dem++;
                if($dem%4 == 0){
                    echo "</tr>";
                    $dem = 0;
                }
            }
            echo "</table>";
            //nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?'.$a.'page='.($current_page-1).'">Prev</a> | ';
            }

            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){ 
                // Nếu là trang hiện tại thì hiển thị thẻ span // ngược lại hiển thị thẻ a 
                if ($i==$current_page){ 
                    echo '<span>' .$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?'.$a.'page='.$i.'">'.$i.'</a> | ';
                }
            }

            // nếu current_page < $total_page và total_page> 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page> 1){
                echo '<a href="index.php?'.$a.'page='.($current_page+1).'">Next</a> | ';
            }
        }else{
            echo "0 result";
        }
    }else{
        echo "Khong co gia tri";
    }
?>