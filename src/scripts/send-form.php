<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$house = $_POST['house'];
$building = $_POST['building'];
$apt = $_POST['apt']; 
$floor = $_POST['floor'];
$comment = $_POST['comment'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$adress = htmlspecialchars($adress);
$house = htmlspecialchars($house);
$building = htmlspecialchars($building);
$apt = htmlspecialchars($apt);
$floor = htmlspecialchars($floor);
$comment = htmlspecialchars($comment);
$name = urldecode($name);
$phone = urldecode($phone);
$adress = urldecode($adress);
$house = urldecode($house);
$building = urldecode($building);
$apt = urldecode($apt);
$floor = urldecode($floor);
$comment = urldecode($comment);
$name = trim($name);
$phone = trim($phone);
$adress = trim($adress);
$house = trim($house);
$building = trim($building);
$apt = trim($apt);
$floor = trim($floor);
$comment = trim($comment);

$ch  = stripslashes($_POST['ch']);
$radio_value = $_POST['pay'];

//echo $name;
//echo "<br>";
//echo $phone;
if (mail("julia_ajs@mail.ru", "Заявка с сайта", "Name:".$name.". Phone: ".$phone ,"From: aseeva.ays@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>