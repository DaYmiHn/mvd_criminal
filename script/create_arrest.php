<?php 
	session_start();
	include("link_bd.php");
	$sql = "INSERT INTO `arrest` (`id`, `police`, `arrested`, `date`, `article`,  `region`, `opic`, `hash`, `pasp`) 
			VALUES (NULL,
			 '".$_GET['police']."',
			 '".$_GET['arrested']."',
			 '".$_GET['date']."',
			 '".$_GET['article']."',
			 '".$_GET['region']."',
			 '".$_GET['opic']."',
			 '".$_GET['hash']."',
			 '".$_GET['pasp']."')";
			 echo $sql;
	$result = $connection->query($sql);

	$sql = "SELECT * FROM criminal WHERE fio = '".$_GET['arrested']."'";
	$result = $connection->query($sql);
	$row=$result->fetch();
	$pos = strpos($row['article'], $_GET['article']);
	echo $pos;
	if ($result->rowCount() != 0) {
		//уже есть в criminal
		if ($pos === false) {
			$tmp = $row['article']." ".$_GET['article'];
			$sql = "UPDATE criminal SET article = '".$tmp."' WHERE fio = '".$_GET['arrested']."'";
			$result = $connection->query($sql);
		} 
	} else {
		//новенький
		$sql = "INSERT INTO `criminal` (`fio`,  `article`, `hash`, `pasp`) 
			VALUES (
			 '".$_GET['arrested']."',
			 '".$_GET['article']."',
			 '".$_GET['hash']."',
			 '".$_GET['pasp']."')";
			 echo $sql;
	$result = $connection->query($sql);
	}
 ?>