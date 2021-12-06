<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 3 - Bài 2 + 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">BÀI 2</h1>
    <div class="container p-3" style="border: solid rgb(20, 6, 6); width: 35%;">
        <h2 class="text-center mb-3">PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form action="ketquapheptinh.php" method="GET">
            <div>
                <label for="">Chọn phép tính:</label>
                <input class="m-2" type="radio" value="cong" checked name="pheptinh">Cộng
                <input class="m-2" type="radio" value="tru" name="pheptinh">Trừ
                <input class="m-2" type="radio" value="nhan" name="pheptinh">Nhân
                <input class="m-2" type="radio" value="chia" name="pheptinh">Chia
            </div>
            <div class="form-group">
                <label class="col-3" for="">Số thứ nhất: </label>
                <input class="col-8" type="text" name="a" id="a">
            </div>
            <div class="form-group">
                <label class="col-3" for="">số thứ nhì: </label>
                <input class="col-8" type="text" name="b" id="b">
            </div>
            <div class="text-center">
                <input type="submit" name="submit" id="submit" value="Tính">
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>