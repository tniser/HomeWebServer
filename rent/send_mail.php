<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
// Сообщение
if(isset($_POST['send_mail'])){
	$message = "ФИО:\r\n".$_POST['fio']."\r\ne-mail:\r\n".$_POST['email']."\r\nТелефон:\r\n".$_POST['phone']."\r\nПомещение:\r\n".$_POST['pom']."\r\nКоментарий:\r\n".$_POST['comment']."\r\n";

	// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
	$message = wordwrap($message, 70, "\r\n");

	// Отправляем
	$mail=mail('root@mars-rus.ru', 'Заявка с сайта - аренда', $message);
	if($mail == true){
		echo "<b>Ваша заявка успешна отправлена</b>";
	}
	else {
		echo "<b>Не удалось отправить сообщение</b>";
	}

}
header( "refresh:5;url=/rent/" );
// var_dump($mail);
// phpinfo();

?>