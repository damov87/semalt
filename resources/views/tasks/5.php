<?php

// 5) Нужно поменять 2 переменные местами без использования третьей:
// $а = [1,2,3,4,5];
// $b = ‘Hello world’;

$a = [1,2,3,4,5];
$b = 'Hello world';

// list($a, $b) = [$b, $a];
[$a, $b] = [$b, $a];

print_r($a);
echo '<br>';
print_r($b);

// 2:33.56 (переменная a в задании кириллицей была, не сразу понял в чем дело)