<?php 
include("link_bd.php");
if ($_GET["func"]=="delete_akk") {
	$sql = "DELETE FROM users WHERE login != 'admin'";
	$result = $connection->query($sql);
}
if ($_GET["func"]=="delete_arr") {
	$sql = "DELETE FROM criminal; DELETE FROM arrest;";
	$result = $connection->query($sql);
}
 ?>