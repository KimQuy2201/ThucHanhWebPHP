<?php
echo "<meta  charset=UTF-8>";
echo "<h1>Bai 12</h1>";

echo "a) Xuất mảng lên trang Web: ";
$random = rand(5, 10);
$arr = array();

for ($i = 1; $i <= $random; $i++) {
    $number = rand(1, 100);
    $arr[] = $number;
    echo $number . ' ';

}

$dem = 0;
echo "<br>b) Đếm tổng số chẵn có trong mảng: ";
for ($i = 0; $i < $random; $i++) {
    if ($arr[$i] % 2 == 0) {
        $dem++;
    }
}
echo "$dem";

echo "<br>c) Tính tổng của các số lẻ trong mảng: ";
$sum = 0;
for ($i = 0; $i < $random; $i++) {
    if ($arr[$i] % 2 != 0) {
        $sum += $arr[$i];
    }
}
echo "$sum";

echo "<br>d) Xuất ra giá trị lớn nhất, nhỏ nhất của mảng.";
for ($i = 0; $i < $random; $i++) {

    $max = max($arr);
    $min = min($arr);
}
echo "$max,";
echo "$min";

$reversed = array_reverse($arr);
echo "<br>e) Xuất đảo ngược các giá trị trong mảng: ";
foreach ($reversed as $value) {

    echo "$value ";
}
?>