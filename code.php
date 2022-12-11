<?php
echo "<h2>Задание за 21.11.2022</h2><br>";

echo "<b>Задача 1</b><br>";
$a = 10;
$b = 5;
$c = $a - $b;
$d = 7;
$result = $c + $d;
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
echo $rl[strlen($rl) - 1];
echo "<br>";
echo $rl[strlen($rl) - 2];
echo "<br>";

echo "<b>Задача 5</b><br>";
$a = 811;
$d1 = $a % 100;
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

echo 60 * 24, " - столько секунд в сутках";
echo "<br>";
echo 60 * 24 * 30, " - столько секунд в 30 сутках";
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

if ($test > 0) {
    echo "да";
} else {
    echo "нет";
}
echo "<br>";

$num = 5;
if ($num > 0 and $num < 6) {
    echo "да";
    echo "<br>";
}

$num = 5;
if ($num >= 0 and $num <= 6) {
    echo "да";
    echo "<br>";
}

$num = 5;
if ($num >= 0 and $num <= 6 and $test = 1) {
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
if ($day >= 1 and $day <= 10) {
    echo 'декада 1';
} elseif ($day >= 11 and $day <= 20) {
    echo 'декада 2';
} elseif ($day >= 21 and $day <= 31) {
    echo 'декада 3';
} else echo 'Неверное число';
echo "<br>";

$age = 56;
$age = (string)56;
if ($age < 10 or $age > 99) {
    echo "Значение меньше 10 или больше99";
} else {
    echo "сумма цифр равна ", $age[0] + $age[1];
    echo "<br>";
    if (($age[0] + $age[1]) <= 9) {
        echo "Значение однозначное";
    } else echo "Значение двузначное";
}
echo "<br>";

$arr = [5, 9, 7, 5, 3];
if (count($arr) == 3) {
    echo "сумма цифр массива - ", $arr[0] + $arr[1] + $arr[2];
}
echo "<br>";

$ciph = 21;
if (intval($ciph % 3) === 0) {
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
switch ($num) {
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
    default:
        echo "Цифра больше 4";
}

$age = 17;
$adult = $age >= 18 ? true : false;
var_dump($adult);

echo "<br>";

$num = 4;
$result = $num > 5 ? 1 : -1;
echo $result;
echo "<br>";

$i = 1;
while ($i < 100) {
    echo $i, "<br>";
    $i++;
}
echo "<br>";

$i = 11;
while ($i >= 11 and $i <= 33) {
    echo $i, "<br>";
    $i++;
}
echo "<br>";

$i = 2;
while ($i >= 2 and $i <= 10) {
    echo $i, "<br>";
    $i += 2;
}
echo "<br>";

$i = 2;
while ($i >= 2 and $i <= 100) {
    echo $i, "<br>";
    $i += 2;
}
echo "<br>";


$i = 1;
while ($i >= 1 and $i < 100) {
    echo $i, "<br>";
    $i += 2;
}
echo "<br>";

$i = 30;
while ($i >= 1 and $i <= 30) {
    echo $i, "<br>";
    $i--;
}
echo "<br>";

for ($i = 1; $i <= 9; $i++) {
    echo $i, "<br>";
}
echo "<br>";

for ($i = 11; $i <= 33; $i++) {
    echo $i, "<br>";
}
echo "<br>";

for ($i = 0; $i <= 100; $i += 2) {
    echo $i, "<br>";
}
echo "<br>";

for ($i = 1; $i < 100; $i += 2) {
    echo $i, "<br>";
}
echo "<br>";

for ($i = 100; $i >= 0; $i--) {
    echo $i, "<br>";
}
echo "<br>";

$result = 1;
for ($i = 1; $i <= 20; $i++) {
    $result = $result * $i;
}
echo $result, "<br>";

$result = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $result = $result + $i;
}
echo $result, "<br>";

$result = 0;
for ($i = 1; $i < 100; $i += 2) {
    $result = $result + $i;
}
echo $result, "<br>";

foreach ($arr1 as $elem) {
    echo $elem . ", ";
}
echo "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $element) {
    echo $element . "<br>";
}


$counts = 0;
$summ = 0;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $element) {
    $summ = $summ + $element;
    $counts++;
}
echo $summ / $counts;

$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
foreach ($arr as $key => $data) {
    echo $key . " - " . $data . "<br>";
}

$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    if ($elem % 2 !== 0) {
        echo $elem;
    }
}

echo "<br>";

$arr = [2, 5, 9, 15, 1, 4];
foreach ($arr as $elem) {
    if ($elem > 3 and $elem < 10) {
        echo $elem . "<br>";
    }
}
echo "<br>";

$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $tostr) {
    $tostr_str = (string)$tostr;
    $tostr_str = $tostr_str[0];
//    echo $tostr_str . "<br>";
    if ($tostr_str == 1 or $tostr_str == 2 or $tostr_str == 5) {
        echo $tostr . "<br>";
    }
}

$arr_w = ["Понедельник" => "рабочий", "Вторник" => "рабочий", "Среда" => "рабочий", "Четверг" => "рабочий", "Пятница" => "рабочий", "Суббота" => "выходной", "Воскресенье" => "выходной"];
foreach ($arr_w as $key => $w_days) {
    if ($w_days == "выходной") {
        echo "<b>" . $key . " - " . $w_days . "</b>";
    } else {
        echo $key . " - " . $w_days;
    }
    echo "<br>";
}
echo "<br>";

$arr_w = ["Понедельник" => "рабочий", "Вторник" => "рабочий", "Среда" => "рабочий", "Четверг" => "рабочий", "Пятница" => "рабочий", "Суббота" => "выходной", "Воскресенье" => "выходной"];
$curr_day = "Вторник";
foreach ($arr_w as $key => $data) {
    if ($key == $curr_day) {
        echo "<i>" . $key . "</i>";
    } else echo $key;
    echo "<br>";
}

$mediana = 0;
for ($i = 1; $mediana <= 100; $i++) {
    $mediana = $mediana + $i;
    if ($mediana > 100) {
        echo $i;
        echo "<br>";
    }
}

$arr1 = [2, 5, 3, 0, 9];
$summ = 0;
foreach ($arr1 as $item) {
    if ($item == 0) {
        break;
    } else {
        $summ = $summ + $item;
    }
}
echo "summa - " . $summ;
echo "<br>";

$arr1 = [2, 5, -8, 3, 9];
$summ = 0;
foreach ($arr1 as $item) {
    if ($item < 0) {
        break;
    } else {
        $summ = $summ + $item;
    }
}
echo "summa - " . $summ;
echo "<br>";

$arr1 = [2, 5, -8, 3, 9];
$pos = 0;
foreach ($arr1 as $item) {
    $pos++;
    if ($item == 3) {
        break;
    }
}
echo $pos;
echo "<br>";

$result = 0;
$trys = 0;
while ($result <= 100) {
    $trys++;
    $result = $result + $trys;
}
echo $trys;
echo "<br>";


$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = 0;
foreach ($arr as $item) {
    if ($item == "c") {
        $flag = 1;
        break;
    }
}
if ($flag == 1) {
    echo "yes";
} else {
    echo "no";
}
echo "<br>";

$ciph = 37;
for ($i = 3; $i < $ciph; $i++) {
    if ($ciph % $i == 0) {
        echo "prostoe";
        break;
    } else {
        if ($i == $ciph - 1) {
            echo "ne prostoe";
        }
    }
}
echo "<br>";

$num = 4;
$iter = 0;
while ($num <= 1000) {
    $num = $num * 3;
    $iter++;
}
echo $num;
echo "<br>";
echo $iter;
echo "<br>";

for ($num = 4, $iter = 0; $num <= 1000; $num = $num * 3, $iter++) ;
echo $num;
echo "<br>";
echo $iter;
echo "<br>";

$str = "";
for ($i = 1; $i <= 5; $i++) {
    $str .= "0";
}
echo $str;
echo "<br>";

$str = "";
for ($i = 1; $i <= 5; $i++) {
    $str .= $i;
}
echo $str;
echo "<br>";

$str = "";
for ($i = 1; $i <= 9; $i++) {
    $str .= $i;
}
echo $str;
echo "<br>";

$str = "";
for ($i = 9; $i >= 1; $i--) {
    $str .= $i;
}
echo $str;
echo "<br>";

$str = "";
for ($i = 1; $i <= 9; $i++) {
    $str .= $i . "-";
}
$str = "-" . $str;
echo $str;
echo "<br>";

$stroke = "";
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        $stroke .= $i;
    }
}
echo $stroke;
echo "<br>";

$stroke = "";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        $stroke .= $i . $j . " ";
    }
}
echo $stroke;
echo "<br>";

$arr5 = [];
$trg = 1;
while ($trg <= 10) {
    $arr5[] = $trg;
    $trg++;
}
var_dump($arr5);
echo "<br>";

$arr5 = [];
$trg = 1;
while ($trg <= 5) {
    $arr5[] = "X";
    $trg++;
}
var_dump($arr5);
echo "<br>";

$arr5 = [];
$trg = 1;
while ($trg <= 100) {
    $arr5[] = $trg;
    $trg++;
}
var_dump($arr5);
echo "<br>";

$arr5 = [];
$trg = 1;
while ($trg <= 99) {
    $arr5[] = $trg;
    $trg = $trg+2;
}
var_dump($arr5);
echo "<br>";


$arr5 = ['a', 'b', 'c', 'd', 'e'];
$len = count($arr5);
for ($i=0; $i < $len; $i++){
    echo $arr5[$i];
    echo "<br>";
}

$arr5 = [1, 2, 3, 4, 5, 6, 7, 8];
$len = count($arr5);
for ($i=0; $i < $len/2; $i++){
    echo $arr5[$i];
    echo "<br>";
}
$arr5 = [];

$arr5 = [1, 2, 3, 4, 5, 6, 7, 8];
foreach ($arr5 as $key => $numm){
    $arr5[$key] *= $arr5[$key];
}
var_dump($arr5);
    echo "<br>";

$arr5 = [];

$arr5 = [1, 2, 3, 4, 5, 6, 7, 8];
foreach ($arr5 as $key => $numm){
    $arr5[$key]--;
}
var_dump($arr5);
echo "<br>";

$arr5 = [];

$arr5 = [1, 2, 3, 4, 5, 6, 7, 8];
foreach ($arr5 as $key => $numm){
    $arr5[$key] += 10;
}
var_dump($arr5);
echo "<br>";

$arr=[];
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $key => $empl){
$arr[$key] *=1.1;
}
var_dump($arr);
echo "<br>";

$arr=[];
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $key => $empl){
    if ($empl <=400){
        $arr[$key] *=1.1;
    }
}
var_dump($arr);
echo "<br>";

$arr=[];
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$key_s = 0;
$item_s = 0;
foreach ($arr as $key => $item){
    $key_s += $key;
    $item_s += $item;
}

echo $key_s / $item_s;
echo "<br>";

$arr_1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arr_2 = [];
$arr_3 = [];
foreach ($arr_1 as $key => $item){
    $arr_2[] = $key;
    $arr_3[] = $item;
}
var_dump($arr_2);
echo "<br>";
var_dump($arr_3);
echo "<br>";


$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arr_2 = [];
foreach ($arr as $key => $item){
    $item_len = strlen((string)$item);
    $item_first_c = intval($item / 10**($item_len-1));
if ($item_first_c == 1 or $item_first_c == 2){
    $arr_2[] = $item;
}
}
var_dump($arr_2);
echo "<br>";

$one = 0;
$two = 1;
for($i = 1; $i <=10; $i++){
    $new = $one + $two;
    $one = $two;
    $two = $new;
    echo $one . " / " . $two;
    echo "<br>";
}

$one = 0;
$two = 1;
$three = 3;
for($i = 1; $i <=10; $i++){
    $new = $one + $two + $three;
    echo $one . " / " . $two . " / " . $three  . " = " . $new;
    echo "<br>";
    $one = $two;
    $two = $three;
    $three = $new;
}

$str = "";
for ($i = 1; $i <=5; $i++){
    $str = $str . "xх";
    echo $str . "<br>";
}

$str = "";
for ($i = 1; $i <=9; $i++){
    $str = $str . $i  . $i . $i;
    echo $str . "<br>";
    $str = "";
}

$str = "";
for ($i = 1; $i <10; $i++){
    for ($j = 1; $j <= $i; $j++){
    $str = $i;
    echo $str;
}
    echo "<br>";
}


$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];
echo $arr[3][2];
echo $arr[1][1];
echo $arr[2][0];
echo $arr[0][0];
echo "<br>";

$arr = [[1, 2], [3, 4], [5, 6]];
$summ_arr = $arr[0][0] + $arr[0][1] + $arr[1][0] +
    $arr[1][1] + $arr[2][0] + $arr[2][1];
echo $summ_arr;
echo "<br>";

$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$summ_arr = $arr[0][0][0]  + $arr[0][0][1]  + $arr[0][1][0]  +
    $arr[0][1][1]  + $arr[1][0][0]  + $arr[1][0][1]  + $arr[1][1][0]  + $arr[1][1][1];

echo $summ_arr;
echo "<br>";

$arr = [
    'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];

echo $arr['boys'][2];
echo "<br>";
echo $arr['girls'][2];
echo "<br>";

$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];

echo $arr['en'][2];
echo "<br>";

$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];

$summ_zp = $arr[0]['salary'] + $arr[2]['salary'];
echo $summ_zp;
echo "<br>";

$arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];
$summ_item = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1]  + $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
echo $summ_item;
echo "<br>";

$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
$summ_item = 0;
$summ_subitem = 0;
$item = 0;
foreach ($arr as $sub){
    foreach ($sub as $item){
        $summ_item += $item;
    }
    $summ_subitem += $summ_item;
    $summ_item = 0;
}
echo $summ_subitem;
echo "<br>";


$summ_2 = 0;
$summ_3 = 0;
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];
$summ_1 = 0;
foreach ($arr as $first_l){
    foreach ($first_l as $second_l){
        foreach ($second_l as $third_l){
            $summ_3 +=$third_l;
        }
        $summ_2 += $summ_3;
        $summ_3 = 0;
    }
    $summ_1 += $summ_2;
    $summ_2 = 0;
}
echo $summ_1;
echo "<br>";

$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
$item = "";
foreach ($arr as $key1 => $item1){
    foreach ($item1 as $key2 => $item2){
    echo $key2;
        echo "<br>";
    echo $item2;
        echo "<br>";
}}

$arr = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];
foreach ($arr as $group => $users){
    foreach ($users as $user){
        echo $group . " " . $user;
        echo "<br>";
    }
}

for ($i = 0; $i < 5; $i++){
    for ($j = 0; $j <5; $j++){
        $arr[$i][$j] = $j + 1;
    }
}
var_dump($arr);
echo "<br>";

$arr = [];
for ($i = 0; $i < 4; $i++){
    for ($j = 0; $j <4; $j++){
        $arr[$i][$j] = "x";
    }
}
var_dump($arr);
echo "<br>";
$arr = [];


echo "--//start//--";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 5; $k++) {
            $arr[$i][$j][$k] = $k + 1;
        }
    }
}
var_dump($arr);
echo "<br>";
$arr = [];

echo "--//start//--";
$k = 1;
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++) {
            $arr[$i][$j] = $k++;
        }
    }

var_dump($arr);
echo "<br>";
$arr = [];

echo "--//start//--";
$k = 2;
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $k;
        $k +=2;
    }
}

var_dump($arr);
echo "<br>";
$arr = [];

echo "--//start//--";
$kk = 1;
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 2; $k++) {
        $arr[$i][$j][$k] = $kk++;
    }
}}

var_dump($arr);
echo "<br>";
$arr = [];

echo "--//start//--";
echo "<br>";
$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];
foreach ($products as $prod){
    echo $prod["name"] . ". " . $prod["amount"] . " pc-s. za " . $prod["price"] . " rub.";
    echo "<br>";
}
$products[] = ["name" => "рыба", "price" => 123, "amount" => 12];
var_dump($products);
echo "<br>";

echo pow(2,10);
echo "<br>";

echo sqrt(245);
echo "<br>";

$q = 0;
$ss = 0;
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $item){
    $q = pow($item,2);
    $ss += $q;
}
echo sqrt($ss);
echo "<br>";

echo round(sqrt(379),0);
echo "<br>";
echo round(sqrt(379),1);
echo "<br>";
echo round(sqrt(379),2);
echo "<br>";

$up = ceil(sqrt(587));
$down = floor(sqrt(587));
$arr_up = ["flour" => $down, "ceil" => $up];
var_dump($arr_up);
echo "<br>";

$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr);
echo "<br>";
echo max($arr);
echo "<br>";

echo mt_rand(1,100);
echo "<br>";

$arr_rand = [];
for ($i=1; $i <= 10; $i++){
    $arr_rand[] = mt_rand(1,20);
}
var_dump($arr_rand);
echo "<br>";

$a = 10;
$b = 200;
echo abs($a - $b);
echo "<br>";

echo strtoupper("vitalik");
echo "<br>";
echo strtolower("VITALIK");
echo "<br>";
echo ucfirst("vitalik");
echo "<br>";
echo lcfirst("VITALIK");
echo "<br>";
echo ucwords("london is the capital of great britain");
echo "<br>";

$str="LONDON";
$str_1 = strtolower($str);
$str_fin = ucfirst($str_1);
echo $str_fin;
echo "<br>";

echo strlen("html css php");
echo "<br>";

$password = 1234567;
if (strlen($password) >= 5 and strlen($password) <= 10){
    echo "pass is OK";
} else echo "pass is NOT GOOD";
echo "<br>";

echo substr("html css php", 0,4);
echo "<br>";
echo substr("html css php", 5,3);
echo "<br>";
echo substr("html css php", 9,3);
echo "<br>";

echo substr("html css php", -3);
echo "<br>";

$str="http://code.mu/ru/php/book/prime/inbuilt/string/";
if (substr($str,0,7) == "http://") {
    echo "It`s HTTP";
} else echo "It`s NOT HTTP";
echo "<br>";

$str="http://code.mu/ru/php/book/prime/inbuilt/string.png";
if (substr($str,-4) == ".png") {
    echo "It`s .png";
} else echo "It`s NOT .png";
echo "<br>";

$str="http://code.mu/ru/php/book/prime/inbuilt/string.png";
if (substr($str,-4) == ".png" or substr($str,-4) == ".jpg") {
    echo "It`s .png/jpg";
} else echo "It`s NOT .png/jpg";
echo "<br>";

$str="http://code.mu/ru/php/book/prime/inbuilt/string/";
if (strlen($str) >5){
    echo substr($str,0,5) . "...";
    echo "<br>";
} else{echo $str;
echo "<br>";}

$str_orig = '31.12.2013';
echo str_replace(".", "-", $str_orig);
echo "<br>";

$str_orig = 'http://code.mu/ru/php/book/prime/inbuilt/string.png';
echo str_replace(["a","b","c"], ["1","2","3"], $str_orig);
echo "<br>";

$str_orig = '1a2b3c4b5d6e7f8g9h0';
echo str_replace(["1","2","3","4","5","6","7","8","9","0"], [""], $str_orig);
echo "<br>";

$str_orig = 'http://code.mu/ru/php/book/prime/inbuilt/string.png';
echo strtr($str_orig, "pbc", "567");
echo "<br>";
echo strtr($str_orig, ["p" => 5, "b" => 6, "c" => 7]);
echo "<br>";

$str_orig = 'http://code.mu/ru/php/book/prime/inbuilt/string.png';
echo substr_replace($str_orig, "!!!", 2, 5);
echo "<br>";

$str_orig = 'abc abc abc';
echo strpos($str_orig, "b");
echo "<br>";

$str_orig = 'abc abc abc';
echo strrpos($str_orig, "b");
echo "<br>";

$str_orig = 'abc abc abc';
echo strpos($str_orig, "b", 3);
echo "<br>";

$str_orig = 'aaa aaa aaa aaa aaa';
echo strpos($str_orig, " ", 4);
echo "<br>";

$str_orig = 'aaa aaa aaa aaa.. aaa';
if (strpos($str_orig, "..")!= false){
    echo "У нас есть две точки подряд";
}else {echo "У нас нет двух точек подряд";};
echo "<br>";

$str_orig = 'http://code.mu/ru/php/book/prime/inbuilt/string.png';
if (strpos($str_orig, "http://") == 0){
    echo "Строка начинается с http://";
}else {echo "Строка НЕ начинается с http://";};
echo "<br>";

$str_orig = 'html css php';
$arr_exp = explode(" ", $str_orig);
var_dump($arr_exp);
echo "<br>";

$arr_imp = ['html', 'css', 'php'];
echo implode(",", $arr_imp);
echo "<br>";

$date = "2000-12-31";
$arr_god = explode("-", $date);
echo $arr_god[2] . "." . $arr_god[1] . "." . $arr_god[0];
echo "<br>";

$str = '1234567890';
$arr_god = str_split($str,2);
var_dump($arr_god);
echo "<br>";

$str = '1234567890';
$arr_god = str_split($str,1);
var_dump($arr_god);
echo "<br>";

$str = '1234567890';
$arr_god = str_split($str,2);
echo implode("-",$arr_god);
echo "<br>";

$str = ' 1234567890   ';
echo trim($str);
echo "<br>";

$str = '/php/';
echo trim($str,"/");
echo "<br>";

$str = 'слова слова слова.';
echo rtrim($str,".") . ".";
echo "<br>";

$str = "madam";
if ($str == strrev($str)){
    echo "Слово является палиндромом";
} else {
    echo "Слово НЕ является палиндромом";}
echo "<br>";

$str = "madam";
    echo str_shuffle($str);
echo "<br>";

$characters = 'abcdefghijklmnopqrstuvwxyz';
$chars = ""; //итоговая строка
$i = 1;
while ($i <=6){
    $str_tmp = str_shuffle($characters); //перемешали строку
    $char_tmp = $str_tmp[0]; // первый символ перемешанной строки
    if (strpos($chars, $char_tmp) === false){ //если в итоговой строке мы не находим первый символ перемешанной строки, то добавляем симовл к итоговой строке
        $chars .= $char_tmp;
        $i++;
    }
}
echo $chars;
echo "<br>";

$str = "12345678";
echo number_format($str,0,""," ");
echo "<br>";

$x = "x";
for ($i = 1; $i <=9; $i++){
    echo str_repeat($x, $i);
    echo "<br>";
}

for ($i = 1; $i <=9; $i++){
    echo str_repeat($i, $i);
    echo "<br>";
}

$str = "html, <b>php</b>, js";
echo strip_tags($str);
echo "<br>";


$str = "<i>html</i>, <b>php</b>, <li>js</li>";
echo strip_tags($str, "<b>,<i>");
echo "<br>";

$str = "html, <b>php</b>, js";
echo htmlspecialchars($str);
echo "<br>";

echo "Буква а - " . ord("a");
echo "<br>";
echo "Буква b - " . ord("b");
echo "<br>";
echo "Буква c - " . ord("c");
echo "<br>";
echo "Пробел - " . ord(" ");
echo "<br>";

echo "Код 33 - " . chr(33);
echo "<br>";

$str = chr(rand(65,90));
echo $str;
echo "<br>";

$len = 5;
$str = "";
for ($i = 1; $i <= $len; $i++){
    $str_tmp = chr(rand(97,122));
    $str .= $str_tmp;
}
echo $str;
echo "<br>";

$str = "ab-cd-ef";
echo strchr($str,"-");
echo "<br>";

$str = "ab-cd-ef";
echo strrchr($str,"-");
echo "<br>";

$str = "ab--cd--ef";
echo strstr($str,"--");
echo "<br>";