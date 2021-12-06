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
    <div class="container mt-5    p-0" style="border: 1px solid; width: 50%;">
        <div style="background-color: pink;">
            <h2 class="text-center">THUỘC TÍNH CỦA TẬP TIN</h2>
        </div>
        <form action="#" name="form_upload" enctype="multipart/form-data" method="POST">
            <?php
                if(isset($_REQUEST["btnUpload"])) {
                    $file = $_FILES["myfile"];

                    //file ảnh có kích thước < 8MB
                    if($file["type"] == "image/jpeg"){
                        if ($file["size"] <= 8*1024*1024){
                            echo "Type: ".$file["type"]."<br>";
                            echo "Name: ".$file["name"]."<br>";
                            echo "Size: ".$file["size"]."<br>";
                            echo "Temp: ".$file["tmp"]."<br>";
                        }
                        else{
                            echo "Chỉ được upload file nhỏ hơn 8MB!";
                        }
                    }
                    else{
                        echo "Chỉ được upload file jpeg!";
                    }
                }
            ?>
            <div class="form-group">
                <input class="ml-4" type="file" name="myfile">
            </div>
            <div class="text-center p-3">
                <input type="submit" name="btnUpload" value="Thuộc tính của tập tin">
            </div>       
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>