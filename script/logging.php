<?php  
include("link_bd.php");
if (isset($info)) {
	$sql = "INSERT INTO `logging` (`info`) VALUES ( '".$info."')";
	$result = $connection->query($sql);
} 

else {

$sql = "SELECT * FROM logging ORDER BY `id` DESC LIMIT 25";
$result = $connection->query($sql);
?>
<table id="table-after-search">
	<thead>
    <tr>
      <td>ID</td>
      <td>Информация</td>
    </tr>
  	</thead>
  	<tbody>
  		<?php 
  		while($row=$result->fetch()) {
	    $id[$i] = $row['id'];
	    $info[$i] = $row['info'];
	    echo "<tr><td>", $id[$i], "</td>","<td>", $info[$i], "</td></tr>"; 
	    $i++;
		}
		 ?>
	</tbody>

</table>
<?php } ?>
