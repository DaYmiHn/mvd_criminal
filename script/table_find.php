<?php
include("link_bd.php");
$k = 0;
$find[4];
if($_GET["id"]!='') {$k++; $find[$k]="`id` =".$_GET["id"]." ";   }

if($_GET["fio"]!='') {$k++; $find[$k]="`fio` LIKE '%".$_GET["fio"]."%' ";   }

if($_GET["article"]!='') {$k++; $find[$k]="`article` LIKE '%".$_GET["article"]."%' ";   }

if($_GET["hash"]!='') {$k++; $find[$k]="`hash` LIKE '%".$_GET["hash"]."%' ";   }

switch ($k) {
	case 0:
		echo "Вы нихуя не ввели";
		break;

	case 1:
		$tmp= $find[1];
		break;
	
	case 2:
		$tmp = $find[1]." AND ".$find[2];
		break;
	case 3:
		$tmp = $find[1]." AND ".$find[2]." AND ".$find[3];
		break;
	
	case 4:
		$tmp = $find[1]." AND ".$find[2]." AND ".$find[3]." AND ".$find[4];
		break;
	
	
	default:
		echo "Ошибочная ошибка";
		break;
}
$sql = "SELECT * FROM `criminal` WHERE ".$tmp ;
$result = $connection->query($sql);
echo $sql;
?>

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
	    $article[$i] = $row['article'];
	    $hash[$i] = $row['hash'];
	    echo "<tr><td>", $id[$i], "</td>","<td>", $fio[$i], "</td>","<td>", $article[$i], "</td>","<td>", $hash[$i], "</td>","</tr>"; 
	    $i++;
		}
		 ?>
	</tbody>

	</table>
