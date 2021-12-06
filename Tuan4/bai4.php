<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 p-0" style="border: 1px solid; width: 30%;">
        <div style="background-color: pink;">
            <h2 class="text-center">XEM THƯ MỤC HÌNH ẢNH</h2>
        </div>

        <form action="./ketqua/bai4.php" method="POST">
            <div class="form-group">
                <label style="width: 150px;"> Chọn thư mục: </label>
                <select name="folder" >
                    <option value="../beauty/">Beauty</option>
                    <option value="../flower/">Flower</option>
                </select>
            </div>
            <div class="form-group">
                <label style="width:150px;"> Kích cỡ hiển thị: </label>
                <select name="size">
                    <option value="100" selected>100x100</option>
                    <option value="200">200x200</option>
                    <option value="300">300x300</option>
                    <option value="400">400x400</option>
                </select>
            </div>
            <div class="text-center p-3">
                <input type="submit" name="submit" value="Xem hình ảnh">
            </div>       
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>