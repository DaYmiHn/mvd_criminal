<?php 
include("link_bd.php");

function arcticle($id) {
	include("link_bd.php");

    $sql = "SELECT article_ykrf FROM criminal WHERE id = ".$id;
    $result = $connection->query($sql);
	$row=$result->fetch();
	if ($row['article_ykrf'] == '') {
		echo "УКРФ: нет <br>";
	} else{
		$split = explode(" ", $row['article_ykrf']);
		echo "УКРФ: ";
		for ($i=0; $i < count($split); $i++) { 

			$sql = "SELECT article FROM article_ykrf WHERE id LIKE ".$split[$i];
			$result = $connection->query($sql);
			$arcticle_ykrf=$result->fetch();
			if ($i == count($split)-1) {
				echo $arcticle_ykrf['article']." ";
			}else{
				echo $arcticle_ykrf['article'].", ";
			}
			
		}
	}
	
 	
	$sql = "SELECT article_koaprf FROM criminal WHERE id LIKE ".$id;
    $result = $connection->query($sql);
	$row=$result->fetch();
	if ($row['article_koaprf'] == '') {
		echo "КоАПРФ: нет <br>";
	} else{
		$split = explode(" ", $row['article_koaprf']);
		echo "КоАПРФ: ";
		for ($i=0; $i < count($split); $i++) { 
			$sql = "SELECT article FROM article_koaprf WHERE id = ".$split[$i];
			$result = $connection->query($sql);
			$arcticle_koaprf=$result->fetch();
			if ($i == count($split)-1) {
				echo $arcticle_koaprf['article']." ";
			}else{
				echo $arcticle_koaprf['article'].", ";
			}
			
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
	    // $article_ykrf[$i] = $row['article_ykrf'];
	    // $article_koaprf[$i] = $row['article_koaprf'];
	    $hash[$i] = $row['hash'];
	    echo "<tr><td>", $id[$i], "</td>","<td>", $fio[$i], "</td>","<td style='font-size: 10pt;'>", arcticle($id[$i]), "</td>","<td>", $hash[$i], "</td>","</tr>"; 
	    $i++;
		}
		 ?>
	</tbody>

</table>

