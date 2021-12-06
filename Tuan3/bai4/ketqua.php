<?php
    if(isset($_POST['submit'])) {
        if(!isset($_POST['n']) || !is_numeric($_POST['n']) || $_POST['n'] < 0){
            echo "<script language='javascript'>";
            echo "alert('Lỗi! Giá trị n rỗng hoặc không phải là số hoặc bé hơn 0')";
            echo "</script>";
            echo header("refresh: 0; url='bai4.php'");
        }
        if(isset($_POST['n']) && is_numeric($_POST['n']) && $_POST['n'] >= 0){ 
            $a = $_POST['n'];
        }
        $tong = 0;
        for ($i = 1; $i <= $a ; $i++) { 
            $tong = $tong + $i;
        }
        $giaithua = 1;
        for ($i = 1; $i <= $a ; $i++) { 
            $giaithua = $giaithua * $i;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 3 - Bài 4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
                <h1 class="text-center">BÀI 4</h1>
                <div class="container p-3" style="border: solid rgb(20, 6, 6); width: 50%;">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 pt-1">
                                <span for="">Số n:</span>
                            </div>
                            <div class="col mr-3">
                                <input type="text" class="form-control" name="n" disabled value="<?php echo $a?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 pt-1">
                                <span for="">Tổng:</span>
                            </div>
                            <div class="col mr-3">
                                <input type="text" class="form-control" name="tong" disabled value="<?php
                                    if($a > 4){
                                        echo "1 + 2 + 3 + ... + ".$a." = ".$tong;
                                    }
                                    else if($a == 4){
                                        echo "1 + 2 + 3 + ".$a." = ".$tong;
                                    }
                                    else if($a == 3){
                                        echo "1 + 2 + ".$a." = ".$tong;
                                    }
                                    else if($a == 2){
                                        echo "1 + ".$a." = ".$tong;
                                    }
                                    else{
                                        echo "$a = ".$tong;
                                    }
                                ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-4 pt-1">
                                <span for="">Giai thừa:</span>
                            </div>
                            <div class="col mr-3">
                                <input type="text" class="form-control" name="giaithua" disabled value="<?php
                                    if($a > 4){
                                        echo "$a! = 1 * 2 * 3 * ... * ".$a." = ".$giaithua;
                                    }
                                    else if($a == 4){
                                        echo "$a! = 1 * 2 * 3 * ".$a." = ".$giaithua;
                                    }
                                    else if($a == 3){
                                        echo "$a! = 1 * 2 * ".$a." = ".$giaithua;
                                    }
                                    else if($a == 2){
                                        echo "$a! = 1 * ".$a." = ".$giaithua;
                                    }
                                    else{
                                        echo "$a! = ".$giaithua;
                                    }
                                ?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>