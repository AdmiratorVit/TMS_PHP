<?php
session_start();
if ($_SESSION['role'] == 'admin') {
    echo "<h2>СТРАНИЦА ДЛЯ АДМИНОВ</h2>";
    echo "Привет. Ты, с ролью \"админ\" пришел на правильную страницу";
} else {
    echo "Эта страница для админов. А тебе здесь нечего делать";
}