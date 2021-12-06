<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
</head>
<body>
    <h1>BÀI 8</h1>
    <?php
        echo 
            "<table border=1>  
            <tr> 
                <td>i</td>
                <td>i2</td>
            </tr>  ";

            for ($i=0; $i<=10; $i++) {
                echo     
                "<tr>
                    <td>$i</td>
                    <td>".pow($i,2)."</td>
                </tr>"; 
            }
        echo "</table>";  
    ?>
</body>