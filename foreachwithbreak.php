<?php

$users = [
	['username' => 'Ahmet'],
	['username' => 'Kees'],
	['username' => 'Henk'],
	['username' => 'Theo'],
	['username' => 'Thomas'],
	['username' => 'Koen'],
];

//$toFind = 'Ahmet';
//$result = null;
//
//
//foreach($users as $user){
//	if ($user['username'] === $toFind){
//		$result = $user;
//		break;
//}
//}
//
//var_dump($result)

$toSkip = 'Kees';
	
foreach($users as $user){
 if ($user['username'] === $toSkip){
	 continue;
 }
echo $user['username']. '<br>';
}

?>