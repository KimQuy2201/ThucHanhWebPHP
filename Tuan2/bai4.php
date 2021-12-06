<?php
    $a = $_POST['a'];
    $b = $_POST['b'];

    include "./xuly.php";
    $baitap4 = new BaiTapTuan2();
    if(isset($_POST['submit'])){
        if(is_numeric($a) && is_numeric($b) && is_numeric($a) > 0 && is_numeric($b) > 0){
            $result = $baitap4->CanhHuyen($a, $b);
        }
        else{
            echo "Vui lòng nhập số";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI 4</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="khung">
        <div id="head">CẠNH HUYỀN TAM GIÁC VUÔNG</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Cạnh A: </td>
                        <td class="right"> 
                            <input type="text" name="a" value="<?php if(isset($_POST["a"])) echo $_POST["a"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh B: </td>
                        <td class="right"> 
                            <input type="text" name="b" value="<?php if(isset($_POST["b"])) echo $_POST["b"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh huyền: </td>
                        <td class="right"> 
                            <input type="text" name="result" disabled="true" value="<?php echo $result;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix"> 
                            <input type="submit" name="submit" value="Tính">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>