<?php 
	session_start();
	include("link_bd.php");
	$sql = "INSERT INTO `arrest` (`id`, `police`, `arrested`, `date`, `article_ykrf`, `article_koaprf`, `region`, `opic`) 
			VALUES (NULL,
			 '".$_GET['police']."',
			 '".$_GET['arrested']."',
			 '".$_GET['date']."',
			 '".$_GET['article_ykrf']."',
			 '".$_GET['article_koaprf']."',
			 '".$_GET['region']."',
			 '".$_GET['opic']."')";
	echo $sql;
	$result = $connection->query($sql);

 ?>