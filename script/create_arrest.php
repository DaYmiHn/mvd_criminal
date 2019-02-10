<?php 
	session_start();
	include("link_bd.php");
	$tmp_sql = '';
	$sql = "SELECT * FROM criminal WHERE fio = '".$_GET['arrested']."'";
	$tmp_sql = $tmp_sql.$sql."<br>";
	$result = $connection->query($sql);
	if ($result->rowCount() == 0) {
		$sql = "INSERT INTO `criminal` (`id`, `fio`, `article_ykrf`, `article_koaprf`, `hash`) VALUES (NULL,
		  '".$_GET['arrested']."',
		 '".$_GET['article_ykrf']."',
		 '".$_GET['article_koaprf']."',
		 'хээээш')";
		 $tmp_sql = $tmp_sql.$sql."<br>";
		$result = $connection->query($sql);
	} else {
		$sql = "SELECT article_koaprf, article_ykrf  FROM criminal WHERE fio = '".$_GET['arrested']."'";
		$result = $connection->query($sql);
		$tmp_sql = $tmp_sql.$sql."<br>";
		$row = $result->fetch();

if ($_GET['article_koaprf']!='') {
	if ($row['article_koaprf'] != ' ' && $row['article_koaprf'] != ''  && strpos($row['article_koaprf'], $_GET['article_koaprf']) === false){
			$tmp = $row['article_koaprf']." ".$_GET['article_koaprf'];
			$sql = "UPDATE criminal SET article_koaprf = '".$tmp."' WHERE fio = '".$_GET['arrested']."'";
			$tmp_sql = $tmp_sql.$sql."<br>";
			$result = $connection->query($sql);
		} else {
			$tmp = $_GET['article_koaprf'];
			$sql = "UPDATE criminal SET article_koaprf = '".$tmp."' WHERE fio = '".$_GET['arrested']."'";
			$tmp_sql = $tmp_sql.$sql."<br>";
			$result = $connection->query($sql);
		}
}
if ($_GET['article_ykrf']!='') {
	if ($row['article_ykrf'] != ' ' && $row['article_ykrf'] != '' && strpos($row['article_ykrf'], $_GET['article_ykrf']) === false){
			$tmp = $row['article_ykrf']." ".$_GET['article_ykrf'];
			$sql = "UPDATE criminal SET article_ykrf = '".$tmp."' WHERE fio = '".$_GET['arrested']."'";
			$tmp_sql = $tmp_sql.$sql."<br>";
			$result = $connection->query($sql);
		} else {
			$tmp = $_GET['article_ykrf'];
			$sql = "UPDATE criminal SET article_ykrf = '".$tmp."' WHERE fio = '".$_GET['arrested']."'";
			$tmp_sql = $tmp_sql.$sql."<br>";
			$result = $connection->query($sql);
		}
}

		



		

	}
	$sql = "INSERT INTO `arrest` (`id`, `police`, `arrested`, `date`, `article_ykrf`, `article_koaprf`, `region`, `opic`) 
			VALUES (NULL,
			 '".$_GET['police']."',
			 '".$_GET['arrested']."',
			 '".$_GET['date']."',
			 '".$_GET['article_ykrf']."',
			 '".$_GET['article_koaprf']."',
			 '".$_GET['region']."',
			 '".$_GET['opic']."')";
			 $tmp_sql = $tmp_sql.$sql."<br>";
	$result = $connection->query($sql);
	echo $tmp_sql;
 ?>