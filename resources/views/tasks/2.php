<?php

// 2) Реализовать алгоритм извлечения числовых значений со строки:
// This server has 386 GB RAM and 500GB storage

$str = 'This server has 386 GB RAM and 500GB storage';
$result = '';

for ($i=0; $i < strlen($str); $i++) { 
	if (is_numeric($str[$i])) {
		$result .= "$str[$i]";
	}
}

echo $result;

// 4:30.93