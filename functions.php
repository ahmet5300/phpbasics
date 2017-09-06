<?php

//function fullName(){
//	echo "Ahmet is 25";
//}
//fullName();

//function fullName(){
//	return "Ahmet is 25";
//}
//
//$fullName = fullName();
////echo $fullName;
//
//function firtName($first, $second){
//	return "the firstname is " . ': ' . $first . ' and the second name is ' . ': ' . $second;
//}
//$fullname = firtName('Ahmet', 'Kees');
//
//echo $fullname;

function fullName($firstName, $lastName=null, $seperator = '_'){
	
	if(trim($firstName) === '' ){
		return;
	}
	
	if($lastName === null){
		
		return 'Ahmet';
	}

	return "{$firstName}{$seperator}{$lastName}";
}  
echo fullName('Ahmet', 'Sahin');
?>