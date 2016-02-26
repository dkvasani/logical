<?php

//Swap two variables value without using third variable in php

// First logic
$a = 5;
$b = 6;
list($a, $b) = array($b, $a);
print $a . ',' . $b;

// Second logic
$a =  $a + $b;  // 5 + 6 = 11
$b = $a - $b;   // 11 - 6 = 5
$a = $a - $b;  // 11 - 5 = 6

echo '<br>';
print $a . ',' . $b;

$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo '<br>With Xor ' . $a , ',' . $b;
