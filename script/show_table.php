<?php 
include("link_bd.php");

function arcticle($id) {
	include("link_bd.php");
    $sql = "SELECT article FROM article_ykrf WHERE id = (SELECT article_ykrf FROM criminal WHERE id = ".$id.")";
	$result = $connection->query($sql);
	$arcticle_ykrf=$result->fetch();
	if ($arcticle_ykrf['article'] == '') {
		echo "УКРФ: нет <br>";
	} else {
		echo "УКРФ: ".$arcticle_ykrf['article']."<br>";
	}
	
	$sql = "SELECT article FROM article_koaprf WHERE id = (SELECT article_koaprf FROM criminal WHERE id = ".$id.")";
	$result = $connection->query($sql);
	$arcticle_koaprf=$result->fetch();
	if ($arcticle_koaprf['article'] == '') {
		echo "КоАПРФ: нет <br>";
	} else {
		echo "КоАПРФ: ".$arcticle_koaprf['article'];
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

