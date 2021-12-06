<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 1</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>Định dạng</td>
            <td>Hiển thị</td>
        </tr>
        <?php
            echo "<tr><td>d/m/y</td><td>".date("d/m/y")."</td></tr>";
            echo "<tr><td>d/m/Y</td><td>".date("d/m/Y")."</td></tr>";
            echo "<tr><td>d/M/Y</td><td>".date("d/M/Y")."</td></tr>";
            echo "<tr><td>D/M/Y</td><td>".date("D/M/Y")."</td></tr>";
            echo "<tr><td>l/M/Y</td><td>".date("l/M/Y")."</td></tr>";
        ?>
    </table>
</body>
</html>