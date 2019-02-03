<?php 
include("link_bd.php");
if (isset($_GET["ip"])) {
	$ip = $_GET["ip"];
$sql = "INSERT INTO `counter` (`id`, `ip`) VALUES (NULL, '".$ip."')";
$result = $connection->query($sql);
}
$sql = "SELECT * FROM counter";
$result = $connection->query($sql);

echo "Посещений сайта:  ".$result->rowCount();

?>
