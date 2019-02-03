<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Курсовик</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="script/script.js"></script>
	<link rel="shortcut icon" href="src/1.ico" type="image/x-icon">
	<script type="text/javascript"
src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<!-- <script type="text/javascript" src="http://insideonline.ru/free_versia_dla_slabovidyashih/special.js"></script> -->
</head>
<body>
	<div class="counter">
		<?php include ('script/counter.php') ?>
	</div>
	<div class="container-fluid">
		<div class="header">
			<div class="menu-item" id="find" onclick="find()"><label>ПОИСК</label></div>
			<div class="menu-item" id="editor" onclick="editor()"><label>РЕДАКТОР</label></div>
			<div class="menu-item" id="settings" onclick="settings()"><label>НАСТОЙКИ</label></div>
		</div>
		<div class="main">
			<div id="find-block">
				<div id="find-block-side">
					<label style="font-weight: 600; font-size: 16pt">Поиск по:</label><br><br>
					<input type="text"class="textbox" placeholder="id" name="id" id="id"><br><br>
					<input type="text"class="textbox" placeholder="ФИО" name="fio" id="fio"><br><br>
					<input type="text"class="textbox" placeholder="Статья" name="article" id="article"><br><br>
					<input type="text"class="textbox" placeholder="Отпечаток" name="hash" id="hash"><br><br>
					<div id="submit-find" onClick="show()">НАЙТИ</div><br>
				</div>
				<div id="find-block-info">
					<label style="font-weight: 600; font-size: 16pt">Инструкция по поиску:</label><br>
					<p>1. В поле 'id' для точного поиска введите номер осуждённого</p> 
					<p>2. В поле 'ФИО' можно указать те данные что знаете</p> 
					<p>3. В поле 'Статья' введите номер статьи осуждённого</p> 
					<p>4. В поле 'Отпечаток' введите 72-значный хэш отпечатка пальца осуждённого</p> 
				</div>
				<br>
				<div id="find-block-table">
					<?php include("script/show_table.php"); ?>
				</div>
				
			</div>
			<div id="editor-block" style="display: none; max-height: 80vh">
				<iframe src="http://kursovik/1/querytable_.php?database=kursovik&table=criminal" width="100%" height="100%"  style="border:0; overflow: hidden;" scrolling="no"></iframe>
			</div>


			<div id="settings-block"  style="display: none;">
				<div class="login-block"><label for="" style="font-weight: 600; font-size: 15pt;">Войти: &#128712;</label><br><br>
					<div>
						<label for="">Логин: </label>
						<input type="text" class="textbox" id="log_log"><br><br>
						<label for="">Пароль: </label>
						<input type="password" class="textbox" id="log_pas">
					</div><br>
					<div id="submit-find" onClick="login()">Войти</div><br>
				</div>
				<div class="reg-block">
					<label for="" style="font-weight: 600; font-size: 15pt;">Зарегистрироваться: &#128712;</label><br><br>
					<div>
						<label for="">Логин: </label>
						<input type="text" class="textbox" id="reg_log"><br><br>
						<label for="">Пароль: </label>
						<input type="password" class="textbox" id="reg_pas">
					</div><br>
					<div id="submit-find" onClick="reg()">Зарегистрироваться</div><br>
				</div>
			</div>
			
			
				
			
		</div>
	</div>

	
<script type="text/javascript">
	
$.getJSON('https://api.ipify.org?format=json', function(data){
    console.log(data.ip);
      $.ajax({
      url: "script/counter.php?ip="+data.ip,
      success: function(data){
    }
});


});

   



$(function() {
    var iframe = $('#editor-block', parent.document.body);
    iframe.height($(document.body).height());
});

if (localStorage.getItem('klad') == "find"){find()}
if (localStorage.getItem('klad') == "editor"){editor()}
if (localStorage.getItem('klad') == "settings"){settings()}


</script>
</body>
</html>