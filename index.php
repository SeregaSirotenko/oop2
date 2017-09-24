<?php

include __DIR__ . 'Email.php';

$user = new Email();
$user -> setAddres('serega@mail.ru');
$user -> setTopic('Письмо');
$user -> setMessage('мое письмо');
$user -> send();