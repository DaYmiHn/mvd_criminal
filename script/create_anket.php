<?php 
	session_start();
	include("link_bd.php");
	// $login = $_SESSION["login"];
	// $surname = $_GET['surname'];
	// $name = $_GET['name'];
	// $fathername = $_GET['fathername'];
	// $address = $_GET['address'];
	// $title = $_GET['title'];
	// $phone_number = $_GET['phone_number'];
	// $seniority = $_GET['seniority'];
	// $region = $_GET['region'];

	// $sql = "UPDATE * FROM users WHERE login = '".$login."' SET";
	$sql = "UPDATE users
			SET surname = '".$_GET['surname']."',
				name = '".$_GET['name']."',
				fathername = '".$_GET['fathername']."',
				address = '".$_GET['address']."',
				title = '".$_GET['title']."',
				phone_number = '".$_GET['phone_number']."',
				seniority = '".$_GET['seniority']."',
				region = '".$_GET['region']."',
				anket = 'true'
			WHERE login = '".$_SESSION["login"]."'";
	echo $sql;
	$result = $connection->query($sql);
	$info = $_GET['fathername'].$_GET['name'].$_GET['surname']."добавил анкету";
	include "logging.php";
 ?>