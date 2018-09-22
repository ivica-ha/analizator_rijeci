<?php

setlocale(LC_ALL, 'hr_HR.UTF-8');

$specialCharacters = "";
$specialCharacters .= "Latin-1 Supplement".PHP_EOL;
$specialCharacters .= "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ".PHP_EOL;
$specialCharacters .= "Latin Extended-A".PHP_EOL;
$specialCharacters .= "ĀāĂăĄąĆćĈĉĊċČčĎďĐđĒēĔĕĖėĘęĚěĜĝĞğĠġĢģĤĥĦħĨĩĪīĬĭĮįİıĲĳĴĵĶķĸĹĺĻļĽľĿŀŁłŃńŅņŇňŉŊŋŌōŎŏŐőŒœŔŕŖŗŘřŚśŜŝŞşŠšŢţŤťŦŧŨũŪūŬŭŮůŰűŲųŴŵŶŷŸŹźŻżŽžſ".PHP_EOL;
$specialCharacters .= "Latin Extended-B".PHP_EOL;
$specialCharacters .= "ƒǺǻǼǽǾǿ".PHP_EOL;
$specialCharacters .= "Latin Extended Additional".PHP_EOL;
$specialCharacters .= "ẀẁẂẃẄẅỲỳ".PHP_EOL;

echo 'Analizator riječi';
require 'form.php';

if(isset($_POST['submit'])){
	require 'validation.php';
}
