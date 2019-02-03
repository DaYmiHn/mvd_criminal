<?php 
include("link_bd.php");
if (isset($_GET["log_log"]) && isset($_GET["log_pas"])) {
	
	$log = $_GET["log_log"];
	$pas = md5($_GET["log_pas"]);
	$sql = "SELECT `password` FROM `users` WHERE `login` =  '".$log."'";
	$result = $connection->query($sql);
	$assocArray = $result->fetch();
	if ($assocArray['password'] == $pas) {
		echo "Пароль совпал";
	} else {
		echo "Пароль не совпал<br><br>".md5($_GET["log_pas"])."<br>".$assocArray['password'];
	}
	

}
if (isset($_GET["reg_log"]) && isset($_GET["reg_pas"])) {
	$log = $_GET["reg_log"];
	$pas = md5($_GET["reg_pas"]);
	$sql = "INSERT INTO `users` (`login`, `password`) VALUES ('".$log."', '".$pas."')";
	echo $sql;
	$result = $connection->query($sql);

}
?>