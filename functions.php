<?php
function who_form(): void
{
    ?>
    <div class="container">
        <h2>Представьтесь, пожалуйста</h2>
        <form action="?page=hello" method="post">
            <div class="inputBox">
                <input type="text" name="fio" required="required">
                <span>ФИО</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
    </div>
    <?php
}

function data_form(): void
{
    ?>
    <div class="container">
        <h2>Пожалуйста, введите данные</h2>
        <form action="?page=datashow" method="post">
            <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>Имя</span>
            </div>
            <div class="inputBox">
                <input type="text" name="age" required="required">
                <span>возраст</span>
            </div>
            <div class="inputBox">
                <input type="text" name="salary" required="required">
                <span>з/п</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
    </div>
    <?php
}

function digits_form(): void
{
    ?>
    <div class="container">
        <h2>Пожалуйста, введите три числа</h2>
        <form action="?page=digitsshow" method="post">
            <div class="inputBox">
                <input type="text" name="d1" required="required">
                <span>Число 1</span>
            </div>
            <div class="inputBox">
                <input type="text" name="d2" required="required">
                <span>Число 2</span>
            </div>
            <div class="inputBox">
                <input type="text" name="d3" required="required">
                <span>Число 3</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
    </div>
    <?php
}

function pass_form(): void
{
    ?>
    <div class="container">
        <h2>Введите пароль для проверки</h2>
        <form action="?page=passshow" method="post">
            <div class="inputBox">
                <input type="password" name="pass" required="required">
                <span>Пароль</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
    </div>
    <?php
}

function country_form($countryes): void
{
    ?>
    <div class="container">
        <h2>Выберите страну</h2>
        <form action="?page=countryshow" method="post">
            <div class="inputBox country">
                <select class="select" name="country">
                    <?php
                    foreach ($countryes as $key => $item) {
                        echo "<option value=\"{$key}\">{$item}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
    </div>
    <?php
}

function EnterForm()
{
    session_start();
    ?>
    <div class="container">
        <h2>Введите свои данные</h2>
        <form action="?page=user_admin" method="post">
            <div class="inputBox">
                <input type="text" name="login" required="required">
                <span>Логин</span>
            </div>
            <div class="inputBox">
                <input type="password" name="pass" required="required">
                <span>Пароль</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
    </div>
    <?php
}

function check_role($users)
{
    session_start();
    $_SESSION['login'] = $_REQUEST['login'];
//    $_SESSION['password'] = $_REQUEST['pass'];
    foreach ($users as $user) {
        if ($user['name'] == $_SESSION['login']) {
            if ($user['pass'] == $_REQUEST['pass']) {
                $founded = 1;
                $_SESSION['role'] = $user['role'];
                if ($user['role'] == 'admin') {
                    include "page_for_admins.php";
                } else {
                    include "page_for_users.php";
                }
                break;
            } else {
//                echo "Юзера не нашли";
                break;
            }
        }
    }

    if ($founded !== 1) {
        echo "Юзера не нашли";
    }
}

function hello($name): void
{
    echo "Добро пожаловать, $name";
    echo "<a href=\"?page=data_form\">Перейти к заданию 2</a>";
    echo "<a href=\"?page=digits_form\">Перейти к заданию 3</a>";
    echo "<a href=\"?page=pass_form\">Перейти к заданию 4</a>";
    echo "<a href=\"?page=country_form\">Перейти к заданию 5</a>";
}

function datashow($name, $age, $salary): void
{
    echo "Имя: $name<br>Возраст: $age<br>ЗП: $salary<br>";
    echo "<a href=\"?page=digits_form\">Перейти к заданию 3</a>";
    echo "<a href=\"?page=pass_form\">Перейти к заданию 4</a>";
    echo "<a href=\"?page=country_form\">Перейти к заданию 5</a>";
}

function digitsshow($d1, $d2, $d3): void
{
    $sum = $d1 + $d2 + $d3;
    echo "Сумма трех чисел равна $sum.";
    echo "<a href=\"?page=data_form\">Перейти к заданию 2</a>";
    echo "<a href=\"?page=pass_form\">Перейти к заданию 4</a>";
    echo "<a href=\"?page=country_form\">Перейти к заданию 5</a>";
}

function passshow($pass_etalon, $pass): void
{
    if ($pass_etalon === $pass) {
        echo "Пароли совпадают";
    } else {
        echo "Пароли НЕ совпадают";
    }
    echo "<a href=\"?page=data_form\">Перейти к заданию 2</a>";
    echo "<a href=\"?page=digits_form\">Перейти к заданию 3</a>";
    echo "<a href=\"?page=country_form\">Перейти к заданию 5</a>";
}

function countryshow($country, $countryes): void
{
    echo "Страна проживания — {$countryes[$country]}.";
    echo "<a href=\"?page=data_form\">Перейти к заданию 2</a>";
    echo "<a href=\"?page=digits_form\">Перейти к заданию 3</a>";
    echo "<a href=\"?page=pass_form\">Перейти к заданию 4</a>";
}

function arrshow($key, $countryes): void
{
    echo "Страна по запросу — {$countryes[$key]}.";
    echo "<a href=\"?page=data_form\">Перейти к заданию 2</a>";
    echo "<a href=\"?page=digits_form\">Перейти к заданию 3</a>";
    echo "<a href=\"?page=pass_form\">Перейти к заданию 4</a>";
    echo "<a href=\"?page=country_form\">Перейти к заданию 5</a>";
}

function index1512(): void
{
    echo "<h2 style='margin-bottom: 20px'>Привет. Что будем делать?</h2>";
    echo "<a href=\"?page=1512_1_1\">Перейти к заданию 1_1</a>";
    echo "<a href=\"?page=1512_1_2\">Перейти к заданию 1_2</a>";
    echo "<a href=\"?page=1512_2\">Перейти к заданию 2</a>";
    echo "<a href=\"?page=1512_3\">Перейти к заданию 3</a>";
}

function CointerOfEntersBySessions(): void
{
    if (!isset($_SESSION['counter1_1'])) {
        $_SESSION['counter1_1'] = 1;
    } else {
        $_SESSION['counter1_1']++;
    }
    ?>
    <div class="container">
        <h2><?php echo "Вы зашли на нашу страничку {$_SESSION['counter1_1']} раз.  Это почитано через сессии" ?></h2>
    </div>
    <?php
}

function CointerOfEntersByCoockies(): void
{
    if (!isset($_COOKIE['counter1_2'])) {
        setcookie('counter1_2', 1);
    } else {
        $tmp = $_COOKIE['counter1_2'] + 1;
        setcookie('counter1_2', $tmp);
    }
    ?>
    <div class="container">
        <h2><?php echo "Вы зашли на нашу страничку {$_COOKIE['counter1_2']} раз. Это почитано через куки" ?></h2>
    </div>
    <?php
}

function Birthday_form(): void
{
    ?>
    <div class="container">
        <h2>Подскажите Ваш день рождения</h2>
        <form action="?page=bddate" method="post">
            <div class="inputBox">
                <input type="date" name="bddate" required="required">
            </div>
            <div class="inputBox">
                <input type="submit" name="">
            </div>
        </form>
    </div>
    <?php
}

function BirthdayShow($bddate): void
{
    $bdetalon = (mktime(23, 59, 59, substr($bddate, 5, 2), substr($bddate, 8, 2), date('Y')));
    if (time() - $bdetalon < 0) { // если текущая дата меньше даты ДР в этом году
        $x = floor(($bdetalon - time()) / (24 * 60 * 60)); // считаем разницу в днях
    } else { // если ДР в этом году уже прошел
        $bdetalon = (mktime(23, 59, 59, substr($bddate, 5, 2), substr($bddate, 8, 2), date('Y') + 1));
        $x = floor(($bdetalon - time()) / (24 * 60 * 60)); // прибавляем к ДР один год и уже от него отнимаем текущую дату
    }
    if ($x == 0) {
        echo "<h2>Поздравляем с днем рождения.</h2>";
    } else {
        echo "<h2>До Вашего дня рождения осталось $x дней.</h2>";
    }
}

function WriteDataToFile()
{
    $fstream = fopen('myDB.csv', 'a+');
    $data = [$_REQUEST['name'], $_REQUEST['lastname'], $_REQUEST['age'], $_REQUEST['address']];
    fputcsv($fstream, $data);
    fclose($fstream);
    echo "<h2>Данные записаны</h2>";
    echo "<div><a href=?action=showdata>Вывести данные</a></div>";
    echo "<div><a href=code_19_12.php>Добавить данные</a></div>";
}

function ShowDataFromFile()
{
    $fstream = fopen('myDB.csv', 'r');
    while (!feof($fstream)) {
        echo fgets($fstream) . "<br>";
    }
    echo "<br>";
    echo "<div><a href=code_19_12.php>Добавить данные</a></div>";
}