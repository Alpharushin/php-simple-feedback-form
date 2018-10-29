<?php 

$adminEmail = 'ayazfaritovich@rambler.ru';
$emailSubject = 'Сообщение с сайта';
$headersEmail = 'From: Alpharushin';

//print_r($_POST);



$message = "Вам поступило письмо с сайта. <br>" . 
           "Пользователь <b>" . $_POST['name'] . "</b><br>" .
           "Email <b>" . $_POST['email'] . "</b><br>" .
           "Указал сайт: <b>" . $_POST['website'] . "</b><br>" .
           "Отправил сообщение <br>" . $_POST['message'] . "<br>";

           


$result = mail($adminEmail, $emailSubject, $message, $headersEmail );

if ($_POST) {
  header('location: ../success.html ');
} else {
  echo "Отправка не удалась! Попробуйте позднее";
}


?>