<?php
echo "<h2>Задание за 09.12.2022</h2><br>";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Задание на 09.12.2022</title>
<link rel="stylesheet" href="0912.css">

<?php
$page = "detai";

$userid = $_REQUEST['id'];

$userarray = [
    ['login' => 'Dad',
        'name' => 'Vitali',
        'lastname' => 'Novikow',
        'middlename' => 'Mihailovich',
        'birthday' => '31.12.1976',
        'regdate' => '20.05.2000',
        'lastenter' => '12.05.2012',
        'avatar' => './img/dad.jpg'
    ],
    ['login' => 'Mom',
        'name' => 'Tatsiana',
        'lastname' => 'Zelenko',
        'middlename' => 'Vladimirovna',
        'birthday' => '09.12.1967',
        'regdate' => '22.08.2002',
        'lastenter' => '14.08.2015',
        'avatar' => './img/mom.jpg'
    ],
    ['login' => 'Son',
        'name' => 'Dima',
        'lastname' => 'Novikow',
        'middlename' => 'Vitalievich',
        'birthday' => '12.09.2000',
        'regdate' => '20.10.2016',
        'lastenter' => '17.11.2021',
        'avatar' => './img/son.jpg'
    ],
    ['login' => 'Dog',
        'name' => 'Wolf',
        'lastname' => 'Novikow',
        'middlename' => 'n/a',
        'birthday' => '12.05.2020',
        'regdate' => '20.07.2020',
        'lastenter' => '29.12.2022',
        'avatar' => './img/dog.jpg'
    ]
];
function start($array)
{
    echo "<table>";
    echo "<caption>Список пользователей</caption>";
    echo "<th>ID</th>";
    echo "<th>Логин</th>";
    echo "<th>Фамилия</th>";
    echo "<th>Имя</th>";

    foreach ($array as $key => $who) {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td><a href='code_09_12.php?id=$key'>{$who['login']}</a></td>";
        echo "<td>{$who['lastname']}</td>";
        echo "<td>{$who['name']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function userdetails($array, $userid)
{
    echo "<table>";
    echo "<caption>Информация о пользователе с ID $userid</caption>";
    echo "<th>ID</th>";
    echo "<th>Логин</th>";
    echo "<th>Фамилия</th>";
    echo "<th>Имя</th>";
    echo "<th>Отчество</th>";
    echo "<th>Дата рождения</th>";
    echo "<th>Дата регистрации</th>";
    echo "<th>Дата предыдущего входа</th>";
    echo "<th>Аватар</th>";
    echo "<tr>";
    echo "<td>$userid</td>";
    echo "<td>{$array[$userid]['login']}</td>";
    echo "<td>{$array[$userid]['lastname']}</td>";
    echo "<td>{$array[$userid]['name']}</td>";
    echo "<td>{$array[$userid]['middlename']}</td>";
    echo "<td>{$array[$userid]['birthday']}</td>";
    echo "<td>{$array[$userid]['regdate']}</td>";
    echo "<td>{$array[$userid]['lastenter']}</td>";
    echo "<td><img src=\"{$array[$userid]['avatar']}\" alt=\"Аватар {$array[$userid]['login']}\"></td>";
    echo "</tr>";
    echo "</table>";
    echo "<span><a href='code_09_12.php'><< На главную</a></span>";
}

if (is_null($userid)) {
    start($userarray);
} else {
    userdetails($userarray, $userid);
}