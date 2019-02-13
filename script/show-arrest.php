<?php 
include("link_bd.php");
$sql = "SELECT * FROM arrest";
$result = $connection->query($sql);?>

<table id="table-after-search">
	<thead>
    <tr>
      <td>ID</td>
      <td>Задержанный</td>
      <td>Когда</td>
      <td>Паспорт</td>
      <td>Скачать <br> отчёт</td>
    </tr>
  	</thead>
  	<tbody>
  		<?php 
  		while($row=$result->fetch()) {
	    $id[$i] = $row['id'];
	    $arrested[$i] = $row['arrested'];
	    $date[$i] = $row['date'];
	    $pasp[$i] = $row['pasp'];
	    $otch[$i] = $row['otch'];
	    echo "<tr>
	    <td>", $id[$i], "</td>",
	    "<td>", $arrested[$i], "</td>",
	    "<td>", $date[$i], "</td>",
	    "<td>", $pasp[$i], "</td>",
	    "<td><a href='#' class='button9'>Скачать отчёт</a></td>",
	    "</tr>"; 
	    $i++;
		}
		 ?>
	</tbody>

</table>

