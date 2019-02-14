<?php
function arcticle($art) {
	include("link_bd.php");

	if ($art == '') {
		return;
	} else {
		$mass = split(" ", $art);
		for ($i=0; $i < count($mass); $i++) { 
			$sql = "SELECT article FROM article WHERE id = ".$mass[$i];
			$result = $connection->query($sql);
			$row=$result->fetch();
			return($row['article']." УКРФ");
		}
	}
}
function info($art) {
	include("link_bd.php");

	if ($art == '') {
		return;
	} else {
		$mass = split(" ", $art);
		for ($i=0; $i < count($mass); $i++) { 
			$sql = "SELECT info FROM article WHERE id = ".$mass[$i];
			$result = $connection->query($sql);
			$row=$result->fetch();
			return($row['info']." УКРФ");
		}
	}
}

$url = 'http://chart.apis.google.com/chart?choe=UTF-8&chld=H&cht=qr&chs=200x200&chl='.$id;
$path = 'logo.png';
file_put_contents($path, file_get_contents($url));

require 'vendor/autoload.php';

$phpWord = new  \PhpOffice\PhpWord\PhpWord();

$admin_reion = "Курортный";
$admin_fio = "Савин Денис Алексеевич";
$title = "майор";
$police = $_GET['police'];
$datetime = $_GET['date'];
$arested = $_GET['arrested'];
$info = $_GET['opic'];
$region = $_GET['region'];
$artikle = arcticle($_GET['article']);
$info_art = info($_GET['article']);
$hash = $_GET['hash'];
$passport = $_GET['pasp'];
 
$mass = split(" ", $police);
$q=substr_replace($mass[1],'.', 2);
$w=substr_replace($mass[2],'.', 2);
$inic = $mass[0]." ".$q.$w;

$document = $phpWord->loadTemplate('Template.zip'); 
$document->setValue('admin_reion', $admin_reion);
$document->setValue('admin_fio', $admin_fio); 
$document->setValue('arest_id', $id); 
$document->setValue('title', $title); 
$document->setValue('police', $police);
$document->setValue('datetime', $datetime);
$document->setValue('arested', $arested);
$document->setValue('info', $info);
$document->setValue('region', $region);
$document->setValue('artikle', $artikle);
$document->setValue('info_art', $info_art);
$document->setValue('hash', $hash);
$document->setValue('passport', $passport);
$document->setImageValue('image1.png', 'logo.png');
$document->setValue('inic', $inic);

$document->setValue('today_date', date("d/m/Y"));
$document->saveAs('../src/arrest/arrest_'.$id.'.docx');
unlink('logo.png');
