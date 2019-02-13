<?php session_start();
	include("link_bd.php");
	$sql = "SELECT * FROM users WHERE login = '".$_SESSION["login"]."'";
	$result = $connection->query($sql);
	$sotrydnik=$result->fetch();


	function display_article() {
		include("link_bd.php");
	    $sql = "SELECT * FROM article";
		$result = $connection->query($sql);
		echo " <option></option>"; 
		while($row=$result->fetch()) {
		    $id[$i] = $row['id'];
		    $article[$i] = $row['article'];
		    echo " <option value=".$id[$i].">", $article[$i], "</option>"; 
		    $i++;
			}
}
function generate_hash($length = 6) {
    $string = 'abcdefghijklmnopqrstuvwxyz'; //ABCDEFGHIJKLMNOPQRSTUVWXYZ
    $int = '0123456789';
    $charactersLength = strlen($string);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $string[rand(0, $charactersLength - 3)];
        // $randomString .= $string[rand(0, $charactersLength - 3)];
        $randomString .= mt_rand(1,9).",".mt_rand(1,9);
    }
    return $randomString;
}
?>

<h2>Задержание:</h2>
<label for="police">Задержал:   </label><input class="arrest" type="text" id="police" value="<?php echo $sotrydnik['surname']," ",$sotrydnik['name']," ",$sotrydnik['fathername']; ?>">    
<label for="arrested">Задержан:   </label><input class="arrest" type="text" id="arrested" placeholder="Иванов Иван Иванович"><br><br>
<label for="localdate">Дата и время: </label> <input class="arrest" type="datetime-local" id="localdate" name="date" max="2019-12-31T23:59" min="2019-01-01T00:00"/>     

<label for="article">Нарушил: </label><select class="arrest" name="" id="article"><?php  display_article();?></select> <br><br>

<label for="rayon">Район:   </label><input class="arrest" type="text" id="rayon" value="<?php echo $sotrydnik['region']; ?>">  
<label for="opic">Краткое описание: </label><input class="arrest" type="text" id="opic" placeholder="нарушил что-то"><br><br>
<label for="hash">Отпечаток пальца: </label><input class="arrest" type="text" id="hash" value="<?php echo generate_hash(); ?>">      
<label for="pasp">Номер паспорта: </label><input class="arrest" type="text" id="pasp" placeholder="4014 123456"><br><br>
<div id="submit-find" onclick="send_arrest()" style="margin:0 auto">ОТПРАВИТЬ</div>