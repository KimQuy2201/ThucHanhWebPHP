<?php
    $a = $_POST['a'];
    $b = $_POST['b'];

    include "./xuly.php";
    $baitap5 = new BaiTapTuan2();
    if(isset($_POST['submit'])){
        if(is_numeric($a) && is_numeric($b) && is_numeric($a) > 0 && is_numeric($b) > 0){
            $result = $baitap5->PTBacNhat($a, $b);
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
    <title>BÀI 5</title>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
    input{
        width: 100px;
    }
</style>
<body>
    <div id="khung">
        <div id="head">GIẢI PHƯƠNG TRÌNH BẬC NHẤT</div>
        <div id="content">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td class="left">Phương trình:</td>
                        <td>
                            <input type="text" name="a" value="<?php if(isset($_POST["a"])) echo $_POST["a"];?>">
                            <span class="pt-1 pl-2">X</span>
                            <span>+</span>
                            <input type="text"  name="b" value="<?php if(isset($_POST["b"])) echo $_POST["b"];?>">
                            <span class="pt-1 pl-2">=</span>
                            <span class="pt-1 pl-2">0</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Nghiệm: </td>
                        <td class="right"> 
                            <input type="text" name="result" disabled="true" value="<?php echo $result;?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" id="mix"> 
                            <input type="submit" name="submit" value="Giải pt">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>