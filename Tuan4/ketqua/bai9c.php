<meta charset="UTF-8">
<?php
    if (isset($_REQUEST["submit"])){
        echo"DANH SÁCH SINH VIÊN <br />";
        
        $read = file('sinhvien.txt');
        foreach ($read as $line) {
        echo $line ."</br> ";
        } 
    }else{
        echo"Không đọc được file!";
    }
?>
