<?php
include("link_bd.php");
if ($_GET["article"]!='') {
	$sql = "SELECT `id` FROM `article` WHERE `article` LIKE '%".$_GET["article"]."%' "; ;
	$result = $connection->query($sql);
	if ($result->rowCount() == 0) {
	} else {
		$row=$result->fetch();
		$_GET["article"] = $row['id'];
	}
}
$k = 0;
$find[4];
if($_GET["id"]!='') {$k++; $find[$k]="`id` =".$_GET["id"]." ";   }

if($_GET["fio"]!='') {$k++; $find[$k]="`fio` LIKE '%".$_GET["fio"]."%' ";   }

if($_GET["article"]!='') {$k++; $find[$k]="`article` LIKE '%".$_GET["article"]."%' ";   }

if($_GET["hash"]!='') {$k++; $find[$k]="`hash` LIKE '%".$_GET["hash"]."%' ";   }

if($_GET["pasp"]!='') {$k++; $find[$k]="`pasp` LIKE '%".$_GET["pasp"]."%' ";   }

switch ($k) {
	case 0:
		echo "<td colspan='4'><center>Вы ничего не ввели</center></td>";
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
	case 5:
		$tmp = $find[1]." AND ".$find[2]." AND ".$find[3]." AND ".$find[4]." AND ".$find[5];
		break;
	default:
		echo "Ошибочная ошибка";
		break;
}
$sql = "SELECT * FROM `criminal` WHERE ".$tmp ;
$result = $connection->query($sql);
?>
<table id="table-after-search">
	<thead>
    <tr>
      <td>ID</td>
      <td>ФИО</td>
      <td>Статья</td>
      <td>Отпечаток</td>
      <td>Паспорт</td>
    </tr>
  	</thead>
  	<tbody>
  		<?php 

  		function arcticle($art) {
			include("link_bd.php");
			if ($art == '') {
				echo "нет";
			} else {
				$mass = split(" ", $art);
				for ($i=0; $i < count($mass); $i++) { 
					$sql = "SELECT article FROM article WHERE id = ".$mass[$i];
					$result = $connection->query($sql);
					$row=$result->fetch();
					echo $row['article']."<br>";
				}
			}
		}

  		if ($k !=0) {
  			if ($result->rowCount() == 0) {
  			echo "<td colspan='5'><center>Ничего не найдено</center></td>";
  			}
	  		else {
	  			while($row=$result->fetch()) {
				    $id[$i] = $row['id'];
				    $fio[$i] = $row['fio'];
				    $hash[$i] = $row['hash'];
				    $pasp[$i] = $row['pasp'];
				    echo "<tr><td>", $id[$i], "</td>","<td>", $fio[$i], "</td>","<td>", arcticle($row['article']), "</td>","<td>", $hash[$i], "</td>","<td>", $pasp[$i], "</td>","</tr>"; 
				    $i++;
				}
	  		}
  		}
		 ?>
	</tbody>
	</table>
