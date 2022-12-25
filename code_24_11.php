<?php
echo "<h2>Задание за 24.11.2022</h2><br>";

echo "<b>Задача 1</b><br>";
$a = 20;
if ($a > 10) {
    $a = $a + 100;
} else {
    $a = $a - 30;
}
echo $a;
echo "<br>";


echo "<b>Задача 2</b><br>";
$a = 21;
if ($a % 2 == 0) {
    $a = $a / 2;
} else {
    $a = $a * 3;
}
echo $a;
echo "<br>";

echo "<b>Задача 3</b><br>";
$a = 20;
$i = 1;
$summ_q = 0;
while ($i >= 1 && $i <= $a) {
    $temp = $i * $i;
    $summ_q = $summ_q + $temp;
    $i++;
}
echo $summ_q;
echo "<br>";

echo "<b>Задача 4</b><br>";

for ($a = 1; $a < 11; $a++) {
    for ($b = 1; $b < 11; $b++) {
        $c = $a * $b;
        echo $a . " x " . $b . " = " . $c;
        echo "<br>";
    }
}

echo "<b>Задача 5</b><br>";
$arr = [];
$str_my = "Poydem po puti naimenshego soprotivleniya";
$len = strlen($str_my);
$new_word = '';

for ($i = 0; $i <= $len - 1; $i++) {
    if ($str_my[$i] !== " ") {
        $new_word = $new_word . $str_my[$i];
    } else {
        $arr[] = $new_word;
        $new_word = '';
    }
    if ($i == $len - 1) {
        $arr[] = $new_word;
    }
}

$max_wordlen = 0;
$max_word = "";
foreach ($arr as $words) {
    if (strlen($words) == $max_wordlen) {
        $max_word = $max_word . ', ' . $words;
    } elseif (strlen($words) > $max_wordlen) {
        $max_word = $words;
        $max_wordlen = strlen($words);
    }
}
echo "Iz frazy " . "<b>" . $str_my . "</b>" . ", Samoe dlinnoe slovo - " . "<b>" . $max_word . "</b>";
echo "<br>";



echo "<b>Задача 6</b><br>";
$arr = ["proverka", "madam", "zapas", "kazak"];
$pal_count = 0;
$try = 0;

foreach ($arr as $words) {
    $try++;
    $revers = "";
    for ($i = strlen($words)-1; $i >= 0; $i--) {
        $revers = $revers . $words[$i];
    }
    if ($revers == $words) {
        $pal_count++;
        echo $revers;
        echo "<br>";
    }
    if ($pal_count == 0 && $try == count($arr)) {
        echo "v spiske palindroma net";
    }
}