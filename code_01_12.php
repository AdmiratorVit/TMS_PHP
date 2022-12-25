<?php
echo "<h2>Задание за 01.12.2022</h2><br>";
echo "<b>Задача 1</b><br>";



$nf = true;
$mass = [1, 7, 5, 65, 32, 4, 48];
foreach ($mass as $key => $data) {
    if (($key ** 2) == $data) {
        echo $key;
        $nf = false;
    }
}
if ($nf) {
    echo "Not found";
}
echo "<br>";


echo "<b>Задача 2</b><br>";
$mass = [1, 7, 5, 65, 32, 7, 48];
foreach ($mass as $key => $sear) {
    if ($key != array_search($sear, $mass)) {
        echo $sear;
        echo "<br>";
        unset($mass[$key]);
    }
}
var_dump($mass);
echo "<br>";

echo "<b>Задача 2 (Это если просто удалить, без вывода ключа)</b><br>";
$mass = [1, 7, 5, 65, 32, 7, 48];
$mass_new = array_unique($mass);
var_dump($mass_new);
echo "<br>";

echo "<b>Задача 3</b><br>";
$mass = [1, 7, 5, 65, 32, 7, 48];
$mass_2 = [43, 5, 245, 34, 98, 24, 76];
$mass_3 = array_merge($mass, $mass_2);
arsort($mass_3);
var_dump($mass_3);
echo "<br>";

echo "<b>Задача 4</b><br>";
$str_mass = [
    "Виталик",
    "Оля",
    "Дима",
    "Валентина",
    "Татьяна",
    "Вольф",
    "Флаффи",
    "Люкс"
];
$etalon = "Вольф";
echo array_search($etalon, $str_mass);
echo "<br>";


echo "<b>Задача 5</b><br>";
$arr_word = [];
$word = "";
for ($i = 1; $i < 5;) {
    $word = readline("Введите слово");
    switch ($word) {
        case "Exit":
            break 2;
        default:
            $arr_word[] = $word;
    }
}
var_dump($arr_word);
echo "<br>";

echo "<b>Задача 6</b><br>";
$mass_6 = [1, 7, 5, 65, 32, 7, 48];
$for_delete = mt_rand(0, count($mass_6) - 1);
unset($mass_6[$for_delete]);
var_dump($mass_6);
echo "<br>";