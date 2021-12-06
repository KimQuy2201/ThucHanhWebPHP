<meta charset="UTF-8">
<style>
    table{
        width: 30%;
    }
</style>
<?php
    echo "<h1>Bài 9</h1>";
    echo 
        "<table border=1>  
        <tr> 
            <td>STT</td>
            <td>Tên sách</td>
            <td>Nội dung sách</td>
        </tr>  ";

        for ($i=1; $i<=100; $i++) {
            echo     
            "<tr>
                <td style='text-align: center;':>$i</td>
                <td>Tensach".$i."</td>
                <td>Noidung".$i."</td>
            </tr>"; 
        }
    echo "</table>";  
    ?>