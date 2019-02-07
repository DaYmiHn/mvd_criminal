<?php 
include("link_bd.php");
if (isset($_GET["ip"])) {
	$ip = $_GET["ip"];
$sql = "INSERT INTO `counter` (`id`, `ip`) VALUES (NULL, '".$ip."')";
$result = $connection->query($sql);
}
$sql = "SELECT * FROM counter";
$result = $connection->query($sql);

echo "<div class='topic'>Посещений сайта:  ".$result->rowCount()."</div> 
		<div class='topic'>+7(921)871-09-65 	sawi.denis@yandex.ru</div>";

if (isset($_SESSION["login"])) {
	echo "<div class='topic'>Здравствуй,  ".$_SESSION["login"]."</div>";
} else {
	echo "<div class='topic'>Здравствуй, Гость</div>";
}
?>
