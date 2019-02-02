<?php
include("link_bd.php");
$find = '';
if($_GET["id"]!='') $find =$find." `id` LIKE '%".$_GET["id"]."%' AND";
echo "<h3>".$find."</h3>";

if($_GET["fio"]!='') {$find =$find." `fio` LIKE '%".$_GET["fio"]."%' AND"; $k=0;}
else {$find = substr($find, 0, 4);}
echo "<h3>".$find."</h3>";

if($_GET["article"]!='') {$find =$find." `article` LIKE '%".$_GET["article"]."%' AND";  $k=0;}
else {$find = substr($find, 0, 4);}
echo "<h3>".$find."</h3>";

if($_GET["hash"]!='')     {$find =$find." `hash` LIKE '%".$_GET["hash"]."%'"; } 
else {$find = substr($find, 0, 4); }

echo "<h3>".$find."</h3>";
$sql = "SELECT * FROM criminal WHERE ".$find;
$result = $connection->query($sql);
?>




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


