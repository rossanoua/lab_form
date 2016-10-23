<?php
//echo 'hello world';

$name = htmlspecialchars($_POST['name']);
$nickname = htmlspecialchars($_POST['nickname']);
$sex = htmlspecialchars((int)$_POST['sex']);

if($sex == '2'){
    $sex = 'Парень';
}else $sex = 'Девушка';

$date = htmlspecialchars($_POST['date']);
$email = htmlspecialchars($_POST['email']);
$site = htmlspecialchars($_POST['site']);
$card = htmlspecialchars($_POST['card']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab Form</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script>
        jQuery(function($){
            $("#dateNOT").mask("99/99/9999");
            $("#tel").mask("+38(099) 999 99 99");
            $("#card").mask("9999 9999 9999 9999");
        });

    </script>
<body>
<!--<a href="#">Вурнуться к форме</a>-->
    <div class="wrapper">
        <?php
            echo '</br>';
            echo '</br>';
            echo 'Форма обработана. Данные сохранены.' . '</br>';
            echo 'Введенные Вами данные: ' . '</br>';
            echo '</br>';
            echo 'Ваши имя и фамилия: ' . $name . '</br>';
            echo '</br>';
            echo 'Логин: ' . $nickname . '</br>';
            echo '</br>';
            echo 'Пол: ' . $sex . '</br>';
            echo '</br>';
            echo 'Дата рождения: ' . $date . '</br>';
            echo '</br>';
            echo 'Адрес електронной почты: ' . $email . '</br>';
            echo '</br>';
            echo 'Страничка в сети интернет: ' . $site . '</br>';
            echo '</br>';
            echo 'Номер пластиковой карты: ' . $card . '</br>';
            echo '</br>';
            echo 'Номер мобильного телефона: ' . $phone . '</br>';
            echo '</br>';
            echo 'Кратко о Вас: ' . $message . '</br>';
            echo '</br>';
            echo 'Информация записана в базу данных СБУ.' . '</br>';
            echo '</br>';
            echo 'С Вами в ближайшие несколько рабочих дней свяжется прокурор.' . '</br>';
            echo '</br>';
            echo 'Большое спасибо за внимание!' . '</br>';
            echo '</br>';
            echo '</br>';
            echo '<a href="index.html">Вернуться к форме</a>';
            echo '</br>';

        ?>



    </div>

</body>
</html>

