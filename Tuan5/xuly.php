<?php
    class Xuly{
        function Kiemtramk($a){
            $b= "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
            if(!preg_match($b,$a,$matchs)){
                echo "Mật khẩu không đúng cú pháp.Mật Khẩu từ 8 ky tự trở lên và vừa có chữ vừa có số"."</br>";
            }else{
                return true;
            }
        }
        function Kiemtraemail($a){
            $b= "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@gmail+\.*com$/";
            if(!preg_match($b,$a,$matchs)){
                echo "Sai định dạng Email. Email có dạng abc@gmail.com"."</br>";
            }else{
                return true;
            }
        }
        function Kiemtrarepass($a,$b){
            if ($a!=$b){
                echo "Xác nhận mật khẩu sai";
            }else{
                return true;
            }
        }
        function save($a,$b,$c){
                $fp = fopen('dangky.txt', 'a');
                fwrite($fp, "Email:".$a." "." ");
                fwrite($fp, "Pass:".$b." "." ");
                fwrite($fp, "Repass:".$c." "." ");
                fwrite($fp, "\n");
                fclose($fp);
                echo "Bạn đã đăng ký thành công"; 
        }
    }
?>