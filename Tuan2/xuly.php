<?php
    class BaiTapTuan2{
        //Bài 1
        function DienTichHCM($rong, $dai){
            return $dai*$rong;
        }
    
        //Bài2
        function ChuViHinhTron($bk){
            return $bk*2*3.14;
        }

        function DienTichHinhTron($bk){
            return $bk*$bk*3.14;
        }

        //Bài 3
        function TamGiac($a, $b, $c){
            if ($a+$b > $c && $a+$c > $b && $b+$c >$a){
                if ($a*$a == $b*$b+$c*$c || $b*$b == $a*$a+$c*$c || $c*$c == $a*$a+$b*$b){
                    return "Tam Giác Vuông";
                }
                elseif ($a == $b && $a == $c){
                    return "Tam Giác Đều";
                }
                elseif ($a == $b || $a == $c || $b == $c){
                    return "Tam Giác Cân";
                }
                elseif ($a*$a > $b*$b+$c*$c || $b*$b > $a*$a+$c*$c || $c*$c > $a*$a+$b*$b){
                    return "Tam Giá Tù";
                }
                else{
                    return "Tam Giác Nhọn";
                }
            }
            else{
                return "Đây không phải là ba cạnh của một tam giác!";
            } 
        }

        //Bài 4
        function CanhHuyen($a, $b){
            return sqrt(pow($a,2)+pow($b,2));
        }

        //Bài 5
        function PTBacNhat($a, $b){
            if($a == 0 && $b == 0){
                return "PT Có Vô Số Nghiệm";
            }
            if($a == 0 && $b != 0){
                return "PT Vô Nghiệm";
            }
            if($a != 0){
                return "X=".(-$b/$a);
            }
        }

        //Bài 6
        function DTB($hk1, $hk2){
            return ($hk1 + $hk2*2)/3;
        }
        function KQ($DTB){
            if($DTB >= 5){
                return "Được Lên Lớp";
            }
            else
                return "Ở Lại Lớp";
        }
        function XL($DTB){
            if($DTB >= 8){
                return "Giỏi";
            }
            if($DTB > 6.5){
                return "Khá";
            }
            if($DTB >= 5){
                return "Trung Bình";
            }
            else
                return "Yếu";
        }

        //Bài 7
        function TongDiem($toan, $ly, $hoa){
            return $toan+$ly+$hoa;
        }
        function KetQua($toan, $ly, $hoa, $tong, $DC){
            if($toan != 0 && $ly != 0 && $hoa != 0 && $tong >= $DC){
                return "Đậu";
            }
            else
                return "Rớt";
        }

        //Bài 8
        function ThanhToan($start, $end){
            if($start >= 10 && $start < 24 && $end > 10 && $end <= 24){
                if($end > $start){
                    if($start < 17 && $end < 17){
                        return ($end - $start)*20000;
                    }
                    if($start < 17 && $end >= 17){
                        return ((17 - $start)*20000)+(($end - 17)*45000);
                    }
                    if($start >= 17 && $end > 17){
                        return ($end - $start)*45000;
                    }
                }
                else{
                    return "Error: time end > time start!";
                }
            }
        }

        function phpAlert($error){
            $error = 404;
            return "Error".$error."!";
        }
    }
?>