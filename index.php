<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Курсовик</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=d40fb052-95ef-400a-b9ad-d8e14749a9be"></script>
	<script src="https://ruseller.com/lessons/les1896/demo/lib/device.min.js"></script>
	<script src="script/script.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="shortcut icon" href="src/1.ico" type="image/x-icon">
	<script type="text/javascript" src="http://ip-jobs.staff-base.spb.ru/ip.cgi"></script>
<!-- <script>
	if (localStorage.getItem('klad')== "find") {
			document.write('<link type="text/css" id="dark-mode" rel="stylesheet" href="chrome-extension://jabpfojepndedlelamfloejfoopkogcf/data/content_script/general/dark_1.css">');
	}
</script> -->

<!-- <script type="text/javascript" src="http://insideonline.ru/free_versia_dla_slabovidyashih/special.js"></script> -->
</head>
<body><script>  localStorage.setItem('map', 'no-show');</script>
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
					<div id="submit-find" onClick="find_show()">НАЙТИ</div><br>
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
				<!-- <iframe src="http://kursovik/1/querytable_.php?database=kursovik&table=criminal" width="100%" height="100%"  style="border:0; overflow: hidden;" scrolling="no"></iframe> -->
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio officiis sit molestiae magnam inventore impedit, architecto ducimus commodi illum, maxime quod, magni harum dolor dicta totam voluptatem nesciunt atque consequatur.
			</div>


			<div id="settings-block"  style="display: none;">
				<?php 
				if (!isset($_SESSION["login"])) {
					echo '<div class="login-block">
					<label for="" style="font-weight: 600; font-size: 15pt;" class="tooltip">Войти: &#128712;<span class="custom help">Данные админа: <br>log: admin<br>pas: admin</span></a></label></label><br><br>
					<div>
						<label for="">Логин: </label>
						<input type="text" class="textbox" id="log_log"><br><br>
						<label for="">Пароль: </label>
						<input type="password" class="textbox" id="log_pas">
					</div><br>
					<div id="submit-find" onClick="login()">Войти</div><br>
				</div>
				<div class="reg-block" >
					<label for="" style="font-weight: 600; font-size: 15pt;" class="tooltip">Зарегистрироваться: &#128712;<span class="custom help">Логин и пароль должны быть не мение 8 символов</span></a></label><br><br>
					<div>
						<label for="">Логин: </label>
						<input type="text" class="textbox" id="reg_log"><br><br>
						<label for="">Пароль: </label>
						<input type="password" class="textbox" id="reg_pas">
					</div><br>
					<div id="submit-find" onClick="reg()">Зарегистрироваться</div><br>
				</div>';
				}
				 ?>
				
				<?php 
				if (isset($_SESSION["login"])) {
					echo '<div id="menu-block">
					<div class="settings-menu-item" onClick="anket()">Моя анкета</div>
					<div class="settings-menu-item" onClick="chat()">Чат сотрудников</div>
					<div class="settings-menu-item" onClick="marshrut()">Маршрут домой</div>
					<div class="settings-menu-item" onClick="news()">Новости</div>
					<div class="settings-menu-item" onClick="arrest()">Задержание</div>
					<div class="settings-menu-item" onClick="exit()">Выйти</div>
				</div>';
				}
				 ?>

				


				<div class="settings-menu-block" id="map" style="display: none;"> </div>
				<div class="settings-menu-block" id="anket" style="display: none;"> </div>
				<div class="settings-menu-block" id="chat" style="display: none;"> </div>
				<div class="settings-menu-block" id="news" style="display: none;"> </div>
				<div class="settings-menu-block" id="arrest" style="display: none;">
					<div class="new-arrest" onClick="new_arrest()">Новое задержание</div>
					<div class="show-arrest" onClick="show_arrest()">Показать задержания</div>
					<div id="settings-menu-block-new-arrest" style="display: none;"><?php include('script/new-arrest.php') ?></div>
					<div id="settings-menu-block-show-arrest" style="display: none;"><?php include('script/show-arrest.php') ?></div>
				</div>
				
				<?php 
				if ($_SESSION["login"] == 'admin') {
					echo '<div id="menu-block-admin">
					<div class="settings-menu-item-admin" onClick="anket()">Удалить аккаунты</div>
					<div class="settings-menu-item-admin" onClick="chat()">Удалить сообщения</div>
					<div class="settings-menu-item-admin" onClick="marshrut()">Редактировать БД</div>
					<div class="settings-menu-item-admin" onClick="news()">Удалить новости</div>
				</div>';
				}
			?>


			</div>
			
			
				
			
		</div>
	</div>

	

<div id="footer">
   <?php include ('script/counter.php')?>
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