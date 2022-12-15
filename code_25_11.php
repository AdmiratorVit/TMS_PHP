<?php

echo "<h2>Задание за 25.11.2022</h2><br>";
echo "<b>Задача 1</b><br>";
$a = 18;
if ($a > 10) {
    $a += 100;
} else {
    $a -= 30;
}
echo $a;
echo "<br>";

echo "<b>Задача 2</b><br>";
$a = 19;
if (($a % 2 == 0)) {
    $a = $a / 2;
} else {
    $a = $a * 3;
}
echo $a;
echo "<br>";

echo "<b>Задача 3</b><br>";
$a = 12;
$sum = 0;
for ($i = 1; $i <= $a; $i++) {
    $sum += pow($i, 2);
}
echo $sum;
echo "<br>";

echo "<b>Задача 4</b><br>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i . " x " . $j . " = " . $i * $j;
        echo "<br>";
    }
}

echo "<b>Задача 5</b><br>";
$a = 0;
$itog = "";
$str = "с помощью которого можно найти остаток от деления одного числа";
$arr1 = [];
$arr1 = explode(" ", $str);
foreach ($arr1 as $str1) {

    if (strlen($str1) < $a) {
        continue;
    } elseif (strlen($str1) == $a) {
        $itog .= $str1 . ",";
        $a = strlen($str1);
    } else {
        $itog = $str1;
        $a = strlen($str1);
    }
}
echo "Самое длинное слово - " . $itog;
echo "<br>";

echo "<b>Задача 6</b><br>";
$arr = ["proverka", "madam", "zapas", "kazak"];
$pal_count = 0;
$try = 0;

foreach ($arr as $words) {
    $try++;
    $revers = "";
    for ($i = strlen($words) - 1; $i >= 0; $i--) {
        $revers = $revers . $words[$i];
    }
//    echo $revers;
//    echo "<br>";
    if ($revers == $words) {
        $pal_count++;
        echo $revers . " - палиндром";
        echo "<br>";
    }
    if ($pal_count == 0 and $try == count($arr)) {
        echo "В списке палиндрома нет";
    }
}