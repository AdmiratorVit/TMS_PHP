<?php
echo "<h2>Задание за 21.11.2022</h2><br>";

echo "<b>Задача 1</b><br>";
$a = 10;
$b = 5;
$c = $a - $b;
$d = 7;
$result = $c+$d;
echo $result;
echo "<br>";

echo "<b>Задача 2</b><br>";
$a = "Hello";
$b = "world";
$c = $a . " " . $b;
echo $c;
echo "<br>";

echo "<b>Задача 3</b><br>";
$a = "abcde";
$num = 2;
echo $a[$num];
echo "<br>";

echo "<b>Задача 4</b><br>"; //специально оставил кирилицу для выяснения ситуации
$rl = 'Проверка связи';
//mb_internal_encoding('UTF-8');
echo $rl[0];
echo "<br>";
echo $rl[strlen($rl)-1] ;
echo "<br>";
echo $rl[strlen($rl)-2] ;
echo "<br>";

echo "<b>Задача 5</b><br>";
$a = 811;
$d1 = $a%100;
echo $d1;
echo "<br>";

// вариант намного проще:
$a = "811"; // ну или написать $a = 811; и следом $a = (string)$a;
$d1 = $a[0];
$d2 = $a[1];
$d3 = $a[2];
echo $d1 + $d2 + $d3; // ну или сразу echo $a[0] + $a[1] + $a[2];
echo "<br>";

echo "<b>Задача 6</b><br>";
$a = "812";
echo $a[2] . $a[1] . $a[0];
echo "<br>";

echo 60*24, " - столько секунд в сутках";
echo "<br>";
echo 60*24*30, " - столько секунд в 30 сутках";
echo "<br>";

$r = 20;
$s = (3.14 * $r) ** 2;
echo $s;
echo "<br>";

$arr1 = [];
$arr1 = [2, 5, 3, 9];
$result = $arr1[0] * $arr1[1] + $arr1[2] * $arr1[3];

echo $result;
echo "<br>";

$arr1 = ["name" => "Vitali", "surname" => "Vadziutsin", "patron" => "Mikhailovich"];
echo $arr1['surname'] . ' ' . $arr1['name'] . ' ' . $arr1['patron'];
echo "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr);
echo "<br>";

$arr2 = [];
$arr2[0] = "nul";
$arr2[1] = "one";
$arr2[2] = "two";

var_dump($arr2);
echo "<br>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr["a"] = 11;
$arr["b"] = 22;
$arr["c"] = 33;
var_dump($arr);
echo "<br>";

$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
var_dump($arr);
echo "<br>";

$test = 1;

if ($test>0) {
    echo "да";
}
else {
    echo "нет";
}
echo "<br>";

$num = 5;
if ($num >0 and $num < 6) {
    echo "да";
    echo "<br>";
}

$num = 5;
    if ($num >=0 and $num <= 6) {
        echo "да";
        echo "<br>";
    }

$num = 5;
if ($num >=0 and $num <= 6 and $test = 1) {
    echo "да";
    echo "<br>";
}

if (!($num >= 0 or $num <= 10)) {
    echo '+';
} else {
    echo '-';
}
echo "<br>";

$test = false;

if ($test) {
    echo '+';
} else {
    echo '-';
}
echo "<br>";

$test;

$test = false;

if ($test == 0) echo 'верно'; else echo 'неверно!';
if ($test == 0) echo 'верно';

$day = 37;
if ($day >=1 and $day<=10) {
    echo 'декада 1';
} elseif ($day >=11 and $day<=20) {
    echo 'декада 2';
} elseif ($day >=21 and $day<=31) {
    echo 'декада 3';
} else echo 'Неверное число';
echo "<br>";

$age = 56;
$age = (string)56;
if ($age <10 or $age>99) {
    echo "Значение меньше 10 или больше99";
} else {
    echo "сумма цифр равна ", $age[0] + $age[1];
    echo "<br>";
    if (($age[0] + $age[1]) <=9) {
        echo "Значение однозначное";
    } else echo "Значение двузначное";
}
echo "<br>";

$arr = [5,9,7,5,3];
if (count($arr) == 3) {
    echo "сумма цифр массива - ", $arr[0] + $arr[1] + $arr[2];
}
echo "<br>";

$ciph = 21;
if (intval($ciph%3) === 0) {
    echo "число делится на 3";
} else     echo "число НЕ делится на 3";
echo "<br>";

$ciph = 12354;
$ciph = (string)$ciph;
if ($ciph[0] >= 1 and $ciph[0] <= 3) {
    echo "Первая цифра числа - 1, 2 или 3";
}
echo "<br>";

$num = 4;
switch ($num){
    case 1:
        echo "Зима";
        break;
    case 2:
        echo "Весна";
        break;
    case 3:
        echo "Лето";
        break;
    case 4:
        echo "Осень";
        break;
    default: echo "Цифра больше 4";
}

$age = 17;
$adult = $age >= 18 ? true: false;
var_dump($adult);

echo "<br>";

$num = 4;
$result = $num > 5 ? 1 : -1;
echo $result;
echo "<br>";

$i = 1;
while ($i<100){
    echo $i, "<br>";
    $i++;
}
echo "<br>";

$i = 11;
while ($i>=11 and $i<=33){
    echo $i, "<br>";
    $i++;
}
echo "<br>";

$i = 2;
while ($i>=2 and $i<=10){
    echo $i, "<br>";
    $i += 2;
}
echo "<br>";

$i = 2;
while ($i>=2 and $i<=100){
    echo $i, "<br>";
    $i += 2;
}
echo "<br>";


$i = 1;
while ($i>=1 and $i<100){
    echo $i, "<br>";
    $i += 2;
}
echo "<br>";

$i = 30;
while ($i>=1 and $i<=30){
    echo $i, "<br>";
    $i --;
}
echo "<br>";

for ($i=1; $i <=9; $i++){
    echo $i, "<br>";
}
echo "<br>";

for ($i=11; $i <=33; $i++){
    echo $i, "<br>";
}
echo "<br>";

for ($i=0; $i <=100; $i+=2){
    echo $i, "<br>";
}
echo "<br>";

for ($i=1; $i <100; $i+=2){
    echo $i, "<br>";
}
echo "<br>";

for ($i=100; $i>=0; $i--){
    echo $i, "<br>";
}
echo "<br>";

$result = 1;
for ($i=1; $i<=20; $i++){
    $result = $result * $i;
}
echo $result, "<br>";

$result = 0;
for ($i=2; $i<=100; $i+=2){
    $result = $result + $i;
}
echo $result, "<br>";

$result = 0;
for ($i=1; $i<100; $i+=2){
    $result = $result + $i;
}
echo $result, "<br>";

foreach ($arr1 as $elem){
    echo $elem . ", ";
}
echo "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $element){
    echo $element . "<br>";
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $element){
    $summ = $summ + $element;
    $counts++;
}
echo $summ / $counts;

$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
foreach ($arr as $key => $data){
    echo $key . " - " . $data . "<br>";
}

$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem){
    if ($elem % 2 !== 0){
        echo $elem;
    }
}

echo "<br>";

$arr = [2, 5, 9, 15, 1, 4];
foreach ($arr as $elem){
    if ($elem > 3 and $elem < 10){
        echo $elem . "<br>";
    }
}
echo "<br>";

$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $tostr){
    $tostr_str = (string)$tostr;
    $tostr_str = $tostr_str[0];
//    echo $tostr_str . "<br>";
    if ($tostr_str == 1 or $tostr_str == 2 or $tostr_str == 5){
        echo $tostr . "<br>";
    }
}

$arr_w = ["Понедельник" => "рабочий", "Вторник" => "рабочий", "Среда" => "рабочий", "Четверг" => "рабочий", "Пятница" => "рабочий", "Суббота" => "выходной", "Воскресенье" => "выходной"];
foreach ($arr_w as $key => $w_days){
    if ($w_days == "выходной"){
        echo "<b>" . $key . " - " . $w_days . "</b>";
    } else{
        echo $key . " - " . $w_days;
    }
    echo "<br>";
}
echo "<br>";

$arr_w = ["Понедельник" => "рабочий", "Вторник" => "рабочий", "Среда" => "рабочий", "Четверг" => "рабочий", "Пятница" => "рабочий", "Суббота" => "выходной", "Воскресенье" => "выходной"];
$curr_day = "Вторник";
foreach ($arr_w as $key => $data){
    if ($key == $curr_day){
        echo "<i>" . $key . "</i>";
    } else echo $key;
    echo "<br>";
}

$mediana = 0;
for ($i = 1; $mediana <= 100; $i++){
    $mediana = $mediana + $i;
    if ($mediana > 100){
        echo $i;
        echo "<br>";
    }}