<?php 



$count = 0 ; 
$f1 = 0; 
$f2 = 1;

echo $f1." , "; 
echo $f2." , "; 
while ($count < 20 ) { 
	$f3 = $f2 + $f1 ;
	echo $f3." , "; 
	$f1 = $f2 ;
	$f2 = $f3 ; 
	$count = $count + 1; 
} 

// define('NUM',11);
// $a = 0;
// $b = 1;

// echo "$a $b "; // 0 1

// for($i=1   ; $i<= NUM-2 ;  $a=$b, $b=$c, $i++ ) {
  // echo $c = $a+$b;
  // echo " ";

?> 