<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
// ���������
if(isset($_POST['send_mail'])){
	$message = "���:\r\n".$_POST['fio']."\r\ne-mail:\r\n".$_POST['email']."\r\n�������:\r\n".$_POST['phone']."\r\n���������:\r\n".$_POST['pom']."\r\n����������:\r\n".$_POST['comment']."\r\n";

	// �� ������ ���� �����-�� ������ ������ ������� 70 �������� �� ���������� wordwrap()
	$message = wordwrap($message, 70, "\r\n");

	// ����������
	$mail=mail('root@mars-rus.ru', '������ � ����� - ������', $message);
	if($mail == true){
		echo "<b>���� ������ ������� ����������</b>";
	}
	else {
		echo "<b>�� ������� ��������� ���������</b>";
	}

}
header( "refresh:5;url=/rent/" );
// var_dump($mail);
// phpinfo();

?>