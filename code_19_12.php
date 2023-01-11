<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Задание на 19.12.2022</title>
    <link rel="stylesheet" href="1212.css">

    <?php
    session_start();

    require_once "config.php";
    require_once "functions.php";
    $action = $_REQUEST['action'];
    if (!isset($action)){
    ?>
    <div class="container">
        <h2>Пожалуйста, введите данные</h2>
        <form action="?action=writedata" method="post">
            <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>Имя</span>
            </div>
            <div class="inputBox">
                <input type="text" name="lastname" required="required">
                <span>Фамилия</span>
            </div>
            <div class="inputBox">
                <input type="text" name="age" required="required">
                <span>возраст</span>
            </div>
            <div class="inputBox">
                <input type="text" name="address" required="required">
                <span>адрес</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
        <div><a href=?action=showdata>Вывести данные</a></div>
    </div>
<?php
}

switch ($action) {
    case 'writedata':
        WriteDataToFile();
        break;
    case 'showdata':
        ShowDataFromFile();
        break;
}
