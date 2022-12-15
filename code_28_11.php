<?php
echo "<h2>Задание за 28.11.2022</h2><br>";
echo "<b>Задача 1</b><br>";

$nf = true;
$mass = [1,7,5,65,32,4,48];
foreach ($mass as $key => $data) {
    if (pow($key, 2) == $data) {
        echo $key;
        $nf = false;
    }
}
if ($nf) {
    echo "Not found";
}
echo "<br>";



echo "<b>Задача 2</b><br>";
$mass = [1,7,5,65,32,7,48];
foreach ($mass as $key => $sear) {
    if ($key != array_search($sear, $mass)) {
        echo $mass[$key];
        echo "<br>";
        unset($mass[$key]);
    }
}
var_dump($mass);
echo "<br>";

echo "<b>Задача 2 (Это если просто удалить, без вывода ключа)</b><br>";
$mass = [1,7,5,65,32,7,48];
$mass_new = array_unique($mass);
var_dump($mass_new);
echo "<br>";

echo "<b>Задача 3</b><br>";
$mass = [1,7,5,65,32,7,48];
$mass_2 = [43,5,245,34,98,24,76];
$mass_3 = array_merge($mass, $mass_2);
arsort($mass_3);
var_dump($mass_3);
echo "<br>";

echo "<b>Задача 4</b><br>";