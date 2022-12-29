<?php
echo "<h2>Задание за 01.12.2022</h2><br>";
echo "<b>Задача 1</b><br>";

$StrElements = "1,2,8,4,6,9,7";
function SummUnknownElements($arg)
{ // функция вычисления суммы и чисел строки или массива
    if (!is_array($arg))
    {
        $TempArr = explode(",", $arg);
    } else {
        $TempArr = $arg;
    }
    return array_sum($TempArr);
}
echo SummUnknownElements($StrElements);
echo "<br>";

echo "<b>Задача 2</b><br>";
function Square($w, $h){
    return $w * $h;
}
echo Square(7, 8);
echo "<br>";

echo "<b>Задача 3</b><br>";
function Gipotenuza($k1, $k2)
{
    return sqrt($k1**2 + $k2**2);
}
echo Gipotenuza(10, 5);
echo "<br>";

echo "<b>Задача 4</b><br>";
function Palindrom($str){
    if ($str == strrev($str))
    {
        echo $str . " - это палиндром";
    } else {
        echo $str . " - это НЕ палиндром";
    }
    echo "<br>";
}
Palindrom("madam");

echo "<b>Задача 5</b><br>";
function HowMuchIsTheFish($str, $simbol)
{
    $CountEnt = 0;
    for ($i = 0; ($i <= strlen($str)); $i++) {
        if ($str[$i] == $simbol) {
            $CountEnt++;
        }
    } return $CountEnt;
}
$strings = "Scooter No time to chill How much is the fish";
echo HowMuchIsTheFish($strings, "e");
echo "<br>";

echo "<b>Задача 6</b><br>";
function biggestSymbol($str)
{
    if (strlen($str) > 0) {
        $TempArr = str_split($str, 1);
        $sym = "";
        $asc = null;
        foreach ($TempArr as $item) {
            if (ord($item) > $asc) {
                $asc = ord($item);
                $sym = $item;
            }
        }
        echo "Самый большой ASCII номер " . $asc . " имеет символ " . $sym;
    } else {
        echo "Передана пустая строка";
        return null;
    }
}
biggestSymbol($strings);
echo "<br>";

function summOfSymbols($str)
{
    if (strlen($str) > 0) {
        $TempArr = str_split($str, 1);
        $sum = 0;
        foreach ($TempArr as $item) {
            $sum += ord($item);
        }
    } else {
        echo "Передана пустая строка";
        return null;
    }
    echo "Сумма ASCII значений символов строки 	&quot;" . $str . "&quot; равна " . $sum;
}
summOfSymbols($strings);
echo "<br>";


function count_function_calls($request = false)
{
    static $numcalls = 0;
    $numcalls++;

    if ($request) {
        echo "Эта функция была вызвана " . $numcalls . " раз.";
    }
}

count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls(true);