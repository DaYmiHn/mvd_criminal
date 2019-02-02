<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Курсовик</title>
	<link rel="stylesheet" href="style/style.css">

</head>
<body>
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
			
			
				
			
		</div>
	</div>
	<script src="script/script.js"></script>
</body>
</html>