<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Задание на 15.12.2022</title>
    <link rel="stylesheet" href="1212.css">

<?php
session_start();

require_once "config.php";
require_once "functions.php";

$page = $_REQUEST['page'];

switch ($page) {
    case '1512_1_1':
        CointerOfEntersBySessions();
        break;
    case '1512_1_2':
        CointerOfEntersByCoockies();
        break;
    case '1512_2':
        Birthday_form();
        break;
    case '1512_3':
        EnterForm();
        break;
    case 'user_admin':
        check_role($users_data);
        break;
    case 'bddate':
        BirthdayShow($_REQUEST['bddate']);
        break;
    default:
        index1512();
}

