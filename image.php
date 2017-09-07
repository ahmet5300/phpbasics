<?php

//$directory = opendir('images');
//
//while($imageFiles=readdir($directory)){
//	var_dump($imageFiles);
//}

function directoryReader($directory, array $exclude=['.','..']){
	$files=[];
	
if(!is_dir($directory)){
	return null;
}
if(!($filesDirectory=opendir($directory))){
	return null;
}
	
$files[]= $directory;
return $files;
}


?>