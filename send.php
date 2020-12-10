<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['subscriptionEmail'];
$modalEmail = $_POST['modalMail'];
$button = $_POST['button'];

// Формирование письма из блока фидбэк
$title = "Incoming message Best Tour Plan";
$body = "
<h2>New message</h2>
<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br><br>
<b>Message:</b><br>$message
";

// Формирование письма с подпиской
$titleSub = "New subscription at Best Tour Plan!";
$bodySub = "
<h2>We have got new subscription</h2>
<b>Email:</b> $email
";

// Формирование письма из модального окна
$titleBooking = "Booking Best Tour Plan";
$bodyBooking = "
<h2>New booking</h2>
<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br>
<b>Email:</b> $modalEmail<br><br>

<b>Message:</b><br>$message
";


function sendMessage () {
    // Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ua'; // SMTP сервера вашей почты
    $mail->Username   = 'Olala.files@yandex.ru'; // Логин на почте
    $mail->Password   = '1lisgsus3'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('Olala.files@yandex.ru', 'Olia Kurbatova'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('olala.tsk@yandex.ru');

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

}

if ($button == "subscribeBtn") {
    sendMessage($titleSub, $bodySub);
    header('Location: subscription.php');
} elseif ($action == "feedbackBtn") { 
    sendMessage($title, $body);
    header('Location: thankyou.php');
} elseif ($action == "bookingBtn") {
    sendMessage($titleBooking, $bodyBooking);
    header('Location: booking.php');
}
else {
    echo "Error";
}


// Отображение результата
//echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
//header('Location: thankyou.php');
