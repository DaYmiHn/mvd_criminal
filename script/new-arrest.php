<?php session_start();
	include("link_bd.php");
	$sql = "SELECT * FROM users WHERE login = '".$_SESSION["login"]."'";
	$result = $connection->query($sql);
	$sotrydnik=$result->fetch();


function display_article_ykrf() {
	include("link_bd.php");
    $sql = "SELECT * FROM article_ykrf";
	$result = $connection->query($sql);
	echo " <option></option>"; 
	while($row=$result->fetch()) {
	    $id[$i] = $row['id'];
	    $article[$i] = $row['article'];
	    echo " <option value=".$id[$i].">", $article[$i], "</option>"; 
	    $i++;
		}
}

function display_article_koaprf() {
	include("link_bd.php");
    $sql = "SELECT * FROM article_koaprf";
	$result = $connection->query($sql);
	echo " <option></option>"; 
	while($row=$result->fetch()) {
	    $id[$i] = $row['id'];
	    $article[$i] = $row['article'];
	    echo " <option value=".$id[$i].">", $article[$i], "</option>"; 
	    $i++;
		}
}
?>

<h2>Задержание:</h2>
<label for="police">Задержал:   </label><input class="arrest" type="text" id="police" value="<?php echo $sotrydnik['surname']," ",$sotrydnik['name']," ",$sotrydnik['fathername']; ?>">    
<label for="arrested">Задержан:   </label><input class="arrest" type="text" id="arrested"><br><br>
<label for="localdate">Дата и время: </label> <input class="arrest" type="datetime-local" id="localdate" name="date"/>     

<label for="article">Нарушил: </label>УКРФ: <select class="arrest" name="" id="article"><?php  display_article_ykrf();?></select>  КоАПРФ: <select class="arrest" name="" id="article"><?php  display_article_koaprf();?></select><br><br>

<label for="rayon">Район:   </label><input class="arrest" type="text" id="rayon" value="<?php echo $sotrydnik['region']; ?>">  
<label for="opic">Краткое описание: </label><input class="arrest" type="text" id="opic"><br><br>
<div id="submit-find" onclick="send_arrest()" style="margin:0 auto">ОТПРАВИТЬ</div>