<?php
//if(!empty($_POST['fullname']) and !empty($_POST['email']) and !empty($_POST['message'])){
   //внутрення часть обработчикаy


      $fullname = trim(strip_tags($_POST['fullname']));
      $phone = trim(strip_tags($_POST['phone']));
      $email = trim(strip_tags($_POST['email']));
      $topic = trim(strip_tags($_POST['topic']));
     // $message = trim(strip_ta

$sendto   = "goryachihs@yandex.ru"; // почта, на которую будет приходить письмо
$username = $_POST['fullname'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['phone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
 
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Сайт:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<center>yes</center>";
} else {
    echo "<center>no</center>";
}
?>
