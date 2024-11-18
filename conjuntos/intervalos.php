<?php
echo 'INTERVALO INCLUSO'.'<br />';
$meu_intervalo = [
	"0" => -1,
	"1" => 0,
	"2" => 1,
	"3" => 2,
	"4" => 3,
	"5" => 4,
	"6" => 5
];
$i = 0;
foreach($meu_intervalo as $item){
	echo "[$i] - ";
	var_dump($item);
	echo '<br />';
	$i++;
}
