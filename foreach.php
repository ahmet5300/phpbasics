<?php

$names = ['Ahmet','Henk','Thomas'];

//for($i = 0; $i<count($names); $i++){
//echo $names[$i] . "<br>";}
//foreach($names as $index => $name){
//	echo $index. ': ' .$name . "<br>";
//}	
$topics = [
	
	[ 
		'id' => 1,
		'title' =>  'The best way to learn PHP?',
		'posts' => [
			['body' => 'Practise a lot'],
			['body' => 'Work on a project'],
		
		
	]
],
	[
		'id' => 2,
		'title' =>  'The best way to learn JAVA?',
		'posts' => [
			['body' => 'Practise a lot'],
			['body' => 'Work on a project'],
		
	]
]];
foreach($topics as $topic){
	echo $topic['title'] . '<br>' . '<br>' ;
    foreach($topic['posts'] as $postt){
 		echo $postt['body'] . '<br>';
	}
}
?>