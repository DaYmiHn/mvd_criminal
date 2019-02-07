<?php 
	session_start();
	include("link_bd.php");
	$login = $_SESSION["login"];
	$sql = "SELECT * FROM users WHERE login = '".$login."'";
	$result = $connection->query($sql);
	$row=$result->fetch();

	echo 
	"Фамилия: ".$row['surname'].
	"<br>Имя: ".$row['name'].
	"<br>Отчество: ".$row['fathername'].
	"<br>Домашний адрес: ".$row['address'].
	"<br>Звание: ".$row['title'].
	"<br>Моб. номер: ".$row['phone_number'].
	"<br>Стаж: ".$row['seniority'].
	"<br>Район: ".$row['region'];
 ?>