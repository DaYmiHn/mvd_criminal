<?php 
include("link_bd.php");

function arcticle($id) {
	include("link_bd.php");
	$sql = "SELECT article FROM criminal WHERE id = ".$id;
	$result = $connection->query($sql);
	$row=$result->fetch();
	if ($row['article'] == '') {
		return("нет");
	} else {
		$mass = split(" ", $row['article']);
		for ($i=0; $i < count($mass); $i++) { 
			$sql = "SELECT article FROM article WHERE id = ".$mass[$i];
			$result = $connection->query($sql);
			$row=$result->fetch();
			echo $row['article']."<br>";
		}
	}
}



$sql = "SELECT * FROM criminal";
$result = $connection->query($sql);?>



<table id="table-after-search">
	<thead>
    <tr>
      <td>ID</td>
      <td>ФИО</td>
      <td>Статья</td>
      <td>Отпечаток</td>
    </tr>
  	</thead>
  	<tbody>
  		<?php 
  		while($row=$result->fetch()) {
	    $id[$i] = $row['id'];
	    $fio[$i] = $row['fio'];
	    $hash[$i] = $row['hash'];
	    echo "<tr><td>", $id[$i], "</td>","<td>", $fio[$i], "</td>","<td style='font-size: 10pt;'>", arcticle($id[$i]), "</td>","<td>", $hash[$i], "</td>","</tr>"; 
	    $i++;
		}
		 ?>
	</tbody>

</table>

