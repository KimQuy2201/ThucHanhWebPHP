<meta charset="UTF-8">
<?php
    $filename = $_REQUEST['filename'];
    $file = $_FILES['img'];
    if(isset($_REQUEST['submit'])){
        if(isset($filename) && isset($file) ){
            if($file['type'] == "image/jpeg"){
                if($file['size'] <= 8*1024*1024){
                    $dir = "../image/upload/";
                    $newname = $dir.$filename.".jpeg";
                    $upload = move_uploaded_file($file['tmp_name'], $newname);
                    if($upload){
                        echo "Upload thành công đợi 2 giây quay lại trang trước!";
                        echo header("refresh: 2; url='bai4.php'");
                    }else{
                        echo "Upload không thành công đợi 2 giây quay lại trang trước!";
                        echo header("refresh: 2; url='bai4.php'");
                    }
                }else{
                    echo "Chỉ upload được ảnh nhỏ hơn 8MB đợi 2 giây quay lại trang trước!";
                    echo header("refresh: 2; url='bai4.php'");
                }
            }else{
                echo "Chỉ upload được ảnh jpeg đợi 2 giây quay lại trang trước!";
                echo header("refresh: 2; url='bai4.php'");
            }
        }else{
            echo '<script>';
            echo 'alert("Thiếu dữ liệu!")';
            echo '</script>';
            echo header("refresh: 0; url='bai4.php'");
        }
    }
?>