<?php 
	session_start();
	include("link_bd.php");
	$login = $_SESSION["login"];
	$sql = "SELECT address FROM users WHERE login = '".$login."'";
	$result = $connection->query($sql);
	$row=$result->fetch();
	echo $row['address'];
 ?>