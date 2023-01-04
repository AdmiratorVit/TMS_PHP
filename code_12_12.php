<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Задание на 12.12.2022</title>
    <link rel="stylesheet" href="1212.css">


<?php
require_once "config.php";
require_once "functions.php";

$page = $_REQUEST['page'];

switch ($page) {
    case 'hello':
        hello($_REQUEST['fio']);
        break;
    case 'digits_form':
        digits_form();
        break;
    case 'digitsshow':
        digitsshow($_REQUEST['d1'], $_REQUEST['d2'], $_REQUEST['d3']);
        break;
    case 'data_form':
        data_form();
        break;
    case 'datashow':
        datashow($_REQUEST['name'], $_REQUEST['age'], $_REQUEST['salary']);
        break;
    case 'pass_form':
        pass_form();
        break;
    case 'passshow':
        passshow($pass_etalon, $_REQUEST['pass']);
        break;
    case 'country_form':
        country_form($countryes);
        break;
    case 'countryshow':
        countryshow($_REQUEST['country'], $countryes);
        break;
    case 'arrshow':
        arrshow($_REQUEST['man_key'], $countryes); //вызываем руками урлом http://localhost/code_12_12.php?page=arrshow&man_key=4, меняя значение man_key.
        break;
    default:
        who_form();
}