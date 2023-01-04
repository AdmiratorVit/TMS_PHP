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