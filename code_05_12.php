<?php
echo "<h2>Задание за 05.12.2022</h2><br>";
echo "<b>Задача 1</b><br>";

$MyReg = "#^\+375 \((25)?(29)?(33)?\) \d{3}-\d{2}-\d{2}$#";

echo "<b>Задача 2</b><br>";
$MyReg = "#^\d{4} \w{2}-\d{1}$#"; //предполагается, что АН - латинские буквы (как, по факту оно и есть).

echo "<b>Задача 3</b><br>";

$str = '145 раз 8 после 985188 раз';
preg_match_all("#\d+#", $str, $arrkarm);
foreach ($arrkarm as $karm) {
    echo array_sum($karm);
}
echo "<br>";

echo "<b>Задача 4</b><br>";
$txt = "Я родился 1976/12/31 19:00. Мой сын родился 2000/09/12 04:00, а моя жена, 1964/12/09 21:00. 2023/03/25 10:00, была бы годовщина свадьбы";
preg_match_all("#\d{4}\/\d{2}\/\d{2} \d{2}:\d{2}#", $txt, $arrdate);
foreach ($arrdate as $date){
    foreach ($date as $year){
        $arryear[] = explode("/", $year);
    }
}
foreach ($arryear as $cel) {
    if ($cel[0] < 2023) {
        echo $cel[0];
        echo "<br>";
    }
}