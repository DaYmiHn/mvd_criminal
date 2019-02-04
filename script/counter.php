<?php 
include("link_bd.php");
if (isset($_GET["ip"])) {
	$ip = $_GET["ip"];
$sql = "INSERT INTO `counter` (`id`, `ip`) VALUES (NULL, '".$ip."')";
$result = $connection->query($sql);
}
$sql = "SELECT * FROM counter";
$result = $connection->query($sql);

echo "Посещений сайта:  ".$result->rowCount()." <div class='tab'></div> +7(921)871-09-65 <div class='tab'></div>	sawi.denis@yandex.ru";

?>
