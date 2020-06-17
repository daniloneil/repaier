<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$promo = $_POST['user_promo'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$promo = htmlspecialchars($promo);

$name = urldecode($name);
$phone = urldecode($phone);
$promo = urldecode($promo);

$name = trim($name);
$phone = trim($phone);
$promo = trim($promo);

if (mail("emasterforyou@gmail.com", 
"Заявка с сайта",
//  "Имя: ".$name., "Телефон: ".$phone, .$promo, 
"Имя: ".$name.". Номер телефона: ".$phone.". Промокод: ".$promo,
"From: mail@emaster29.ru \r\n"))
 {  header("Location: https://emaster29.ru/request.html");
      ;
} else {
    echo "при отправке сообщения возникли ошибки";
}?>