<?php


// function add(array $numbers){
//	 $total = 0;
//	 
//	 foreach($numbers as $number){
//		 $total += $number;
//		 
//	 }
//    return $total;
//// }
////
////echo add([5,10]);
//
//function add(){
//	$total=0;
//	
//	foreach(func_get_args() as $number){
//		if(!is_numeric($number)){
//			continue;
//		}
//	   $total+=$number;	
//    }
//	return $total;
//}
//echo add(5,10,10,'hallo');

function add()
{
	return array_sum(func_get_args());
}
echo add(5,5,5) . "<br>";
echo array_sum([5,6,7,8,9]);
?>