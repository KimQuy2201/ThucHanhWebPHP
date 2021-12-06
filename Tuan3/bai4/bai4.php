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
    <h1 class="text-center">BÀI 4</h1>
    <div class="container p-3" style="border: solid rgb(20, 6, 6); width: 50%;">
        <form action="ketqua.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-4 pt-1">
                        <span for="">Số n:</span>
                    </div>
                    <div class="col mr-3">
                        <input 
                        type="text" class="form-control" name="n" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-4 pt-1">
                    </div>
                    <div class="col mr-3" style="text-align: left;">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Tính</button>
                        <button type="reset" name="reset" value="reset" class="btn btn-danger ml-4">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>