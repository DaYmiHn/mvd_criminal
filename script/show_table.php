<?php 
include("link_bd.php");

$sql = "SELECT * FROM criminal";
$result = $connection->query($sql);?>




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
	    $article[$i] = $row['article'];
	    $hash[$i] = $row['hash'];
	    echo "<tr><td>", $id[$i], "</td>","<td>", $fio[$i], "</td>","<td>", $article[$i], "</td>","<td>", $hash[$i], "</td>","</tr>"; 
	    $i++;
		}
		 ?>
	</tbody>



