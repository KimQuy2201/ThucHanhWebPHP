<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    include "./xuly.php";
    $baitap3 = new BaiTapTuan2();
    if(isset($_POST['submit'])){
        if(is_numeric($a) && is_numeric($b) && is_numeric($c) && is_numeric($a) > 0 && is_numeric($b) > 0 && is_numeric($c) > 0){
            $result = $baitap3->TamGiac($a, $b, $c);
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
    <title>BÀI 3</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="khung">
        <div id="head">NHẬN DẠNG TAM GIÁC</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Cạnh 1 </td>
                        <td class="right"> 
                            <input type="text" name="a" value="<?php if(isset($_POST["a"])) echo $_POST["a"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh 2: </td>
                        <td class="right"> 
                            <input type="text" name="b" value="<?php if(isset($_POST["b"])) echo $_POST["b"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Cạnh 3: </td>
                        <td class="right"> 
                            <input type="text" name="c" value="<?php if(isset($_POST["c"])) echo $_POST["c"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Loại tam giác: </td>
                        <td class="right"> 
                            <input type="text" name="result" disabled="true" value="<?php echo $result;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix"> 
                            <input type="submit" name="submit" value="Nhận dạng">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>