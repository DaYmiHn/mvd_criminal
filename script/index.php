<?php
$id = "123123";
$url = 'http://chart.apis.google.com/chart?choe=UTF-8&chld=H&cht=qr&chs=250x250&chl='.$id;
$path = 'logo.png';
file_put_contents($path, file_get_contents($url));

require 'vendor/autoload.php';

$phpWord = new  \PhpOffice\PhpWord\PhpWord();





// $admin_reion = 
// $admin_fio =
// $title =
 $police = 'Алексеев Илья Максимович';
// $datetime =
// $arested =
// $info =
// $region =
// $artikle =
// $hash =
// $passport =
 
$mass = split(" ", $police);
$q=substr_replace($mass[1],'.', 2);
$w=substr_replace($mass[2],'.', 2);
$inic = $mass[0]." ".$q.$w;

$document = $phpWord->loadTemplate('Template.zip'); //шаблон
$document->setValue('admin_reion', 'Курортный район'); //номер договора
$document->setValue('admin_fio', 'Савин Денис Алексеевич'); //дата договора
$document->setValue('arest_id', $id); //дата договора
$document->setValue('title', 'прапорщик'); //фамилия
$document->setValue('police', $police);// имя
$document->setValue('datetime', '17.11.2019 16:00');// имя
$document->setValue('arested', 'Осейкин Даниил Сергеевич');// имя
$document->setValue('info', 'пил в парке алкоголь');// имя
$document->setValue('region', 'Разлив');// имя
$document->setValue('artikle', 'КоАП РФ 20.2');// имя
$document->setValue('hash', 'wx9,4he8,4ik4,9gt6,3hl3,2op2,3vg4,8eq3,3qn2,9ij3,7tm2,5xq4,2');// отчество
$document->setValue('passport', '4014 45987');// отчество
$document->setImageValue('image1.png', 'logo.png');

$document->setValue('inic', $inic);// отчество

$document->setValue('today_date', date("d/m/Y"));// отчество
$document->saveAs('arrest_'.$id.'.docx');
?>