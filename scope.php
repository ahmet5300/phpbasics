<?php

//step 1
//$config = 
//	['seperator' => ' '];
//
//function names($firstName, $lastName){
//	global $config;
//	return "{$firstName}{$config['seperator']}{$lastName}";
//}
//
//echo names('Ahmet','Sahin');

//step 2
$config = 
	['seperator' => ' '];

$names = function  ($firstName, $lastName) use ($config) {
	
	return "{$firstName}{$config['seperator']}{$lastName}";
};

echo $names('Ahmet','Sahin');


?>