<?php
    $title = "Bài 06- LÀM VIỆC VỚI SESSION";
    session_start();
    if(isset($_SESSION['trangthai'])){
        $_SESSION['trangthai'] = 0;
    }
    if(isset($_REQUEST['submit'])){
        $_SESSION['trangthai'] = 1;
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['pass'] = $_POST['pass'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 p-0 text-center" style="border: 1px solid; width: 60%;">
        <h3 class="p-2"><?php echo $title?></h3>
        <?php
        switch($_SESSION['trangthai']){
            case 0: 
        ?>
        <form action="#" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <b>ĐĂNG NHẬP</b>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        Username:
                    </div>
                    <div class="col">
                        <input type="text" name="name" class="w-75 float-left form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        Password:
                    </div>
                    <div class="col">
                        <input type="password" name="pass" class="w-75 float-left form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col">
                        <button type="submit" name="submit" class="float-left btn btn-primary">Đăng nhập</button>
                    </div>
                </div>
            </div>
        </form>
        <?php 
                    break;
                case 1:
                    include './ketqua/bai6.php';
                    break;
            }
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>