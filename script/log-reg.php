<?php 
session_start(); 
include("link_bd.php");
if (isset($_GET["log_log"]) && isset($_GET["log_pas"])) {
	
	$log = $_GET["log_log"];
	$pas = md5($_GET["log_pas"]);
	$sql = "SELECT `password` FROM `users` WHERE `login` =  '".$log."'";
	$result = $connection->query($sql);
	$assocArray = $result->fetch();
	if ($assocArray['password'] == $pas) {
		
    	$_SESSION["login"] = $log;
    	$_SESSION["password"] = $pas;
		print_r("да");
	} else {
		$_SESSION["login"] = "Не вошёл";
		echo "не";
	}
	

}
if (isset($_GET["reg_log"]) && isset($_GET["reg_pas"])) {
	echo "Пароль не совпал";
	$log = $_GET["reg_log"];
	$pas = md5($_GET["reg_pas"]);
	$sql = "INSERT INTO `users` (`login`, `password`) VALUES ('".$log."', '".$pas."')";
	echo $sql;
	$result = $connection->query($sql);

}
?>