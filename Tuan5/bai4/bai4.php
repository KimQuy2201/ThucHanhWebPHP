<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tuan5.css">
    <title>Tuần 5 - Bài 4</title>
</head>
<body>
    <div class="main">
        <form action="bai4b.php" method="post" enctype="multipart/form-data">
            Nhập tên file:
            <input type="text" name="filename"> <br>
            Chọn ảnh:
            <input type="file" name="img">
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
</body>
</html>