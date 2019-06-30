<?php
$login = $_POST['login'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$description = $_POST['description'];

$login = htmlspecialchars($login);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$description= htmlspecialchars($description);

$login = urldecode($login);
$email = urldecode($email);
$tel = urldecode($tel);
$description = urldecode($description);

$login = trim($login);
$email = trim($email);
$tel = trim($tel);
$description = trim($description);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("timyakovlev.westparfume@gmail.com", "Заявка с сайта", "ФИО:".$login." $tel $description E-mail: ".$email ,"From: money23tim@gmail.com \r\n"))
 { echo "Благодарим Вас за обращение в High Tech Aerosol. Мы свяжемся с Вами в течении 5 минут";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
