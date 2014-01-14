<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
</head>
<body>
<?php

/* Проверка на заполнение полей */
echo 'im in php';
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];

/* Убираем все лишние пробелы и переносы строк  и преобразуем все теги html в символы*/
$name = htmlspecialchars(trim($name));
$email = htmlspecialchars(trim($email));
$message = htmlspecialchars(trim($message));

/* Формируем сообщение */
$yourmail = "index@yandex.ru"; // email на который будут приходить письма
$sub = "Сообщение с сайта index.pro"; //название сайта
$messsage = "Пользователь: $name \nс email адресом: $email \nОтправил сообщение: \n$message";

/* Отправка */
$sendmail = mail ($yourmail,$sub,$messsage,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
if ($sendmail == 'true'){
    echo '<script type="text/javascript">alert(\'Сообщение отправлено!\');</script>';
}
else {
    echo '<script type="text/javascript">alert(\'Ошибка! Сообщение не отправлено.\');d</script>';
}

}
echo '<script type="text/javascript">document.location.href="http://energoline.pro/query.html";</script>';
//header('Location: http://www.blogzor.ru/feedback');
//die();

?>
</body>
</html>