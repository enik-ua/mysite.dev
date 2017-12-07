<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$leftMenu = [
    ['link'=>'Домой','href'=>'index.php'],
    ['link'=>'О нас','href'=>'about.php'],
    ['link'=>'Контакты','href'=>'contact.php'],
    ['link'=>'Таблица умножения','href'=>'table.php'],
    ['link'=>'Калькулятор','href'=>'calc.php'],
]

?>
<!DOCTYPE html> 
<html> 
    <head>
        <title>Сайт нашей школы</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php 
        echo system('locale -a'), '<br>';
        //echo setlocale($category, 'uk_UA.utf8'), '<br>';
        //echo strftime('Сегодня %d-%B-%Y'), '<br>';
        ?>
        <a href='phpinfo.php'> phpinfo </a>
        <div id="header">
            <!-- Верхняя часть страницы -->
            <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
            <span class="slogan">приходите к нам учиться</span>
            <!-- Верхняя часть страницы -->
        </div> <div id="content">
            <!-- Заголовок -->
            <blockquote>
                <?php
                //setlocale(LC_ALL, "russian");
                $day = strftime('%d');
                $mon = strftime('%B');
                $year = strftime('%Y');
                echo strftime('%H');
                $hour = (int) strftime('%H');
                If ($hour <6) { 
                    $welcome = 'Доброй ночи';
                } else if ($hour >= 6 && $hour <12) {
                    $welcome = 'Доброе утро';
                } else if ($hour >=12 && $hour <18) {
                    $welcome = 'Добрый день';
                } else if ($hour >=18 && $hour <=23){
                    $welcome = 'Доброй ночи';
                } else {
                    $welcome = 'Доброй ночи';
                }
                echo 'Сегодня ', $day, ' число, ', $mon, ' месяц, ', $year, ' год.<br>';
                echo date('Сегодня: d число, F месяц, Y год ');
                ?>
            <h1><?= $welcome ?></h1>
            </blockquote>
            <!-- Заголовок -->
            <!-- Область основного контента -->
            <h3>Зачем мы ходим в школу?</h3>
            <p> У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски,
                кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают
                за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые
                готовятся к соревнованиям, другие участвуют в репетициях праздников… </p>
            <h3>Что такое ЕГЭ?</h3>
            <p> Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и
                вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются
                однотипные задания и единая система оценки. </p>
            <p> Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого
                государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому
                у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет. </p>
            <!-- Область основного контента --> </div>
        <div id="nav">
            <!-- Навигация -->
            <h2>Навигация по сайту</h2>
            <!-- Меню -->
            <ul>
                <li><a href=<?php echo $leftMenu[0]['href']?>><?php echo $leftMenu[0]['link'] ?></a> </li>
                <li><a href=<?php echo $leftMenu[1]['href']?>><?php echo $leftMenu[1]['link'] ?></a> </li>
                <li><a href=<?php echo $leftMenu[2]['href']?>><?php echo $leftMenu[2]['link'] ?></a> </li>
                <li><a href=<?php echo $leftMenu[3]['href']?>><?php echo $leftMenu[3]['link'] ?></a> </li>
                <li><a href=<?php echo $leftMenu[4]['href']?>><?php echo $leftMenu[4]['link'] ?></a> </li>
            </ul>
            <!-- Меню -->
            <!-- Навигация -->
        </div> <div id="footer">
            <!-- Нижняя часть страницы -->
            &copy; Супер Мега Веб-мастер, 2000 &ndash; <?php echo $year; ?>
            <!-- Нижняя часть страницы -->
        </div>
    </body>
</html>