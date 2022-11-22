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
mb_internal_encoding('UTF-8');
echo $rl[0];
echo "<br>";
echo $rl[strlen($rl)-1] ;
echo "<br>";
echo $rl[strlen($rl)-2] ;
echo "<br>";

echo "<b>Задача 5</b><br>";
$a = 811;
$d1 = intval($a/100);
$d2 = intval(($a-($d1*100))/10);
$d3 = intval(($a-(($d1*100)+($d2*10))));
echo "Это вариант через деление - ", $d1 + $d2 + $d3;  // Это вариант через деление
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