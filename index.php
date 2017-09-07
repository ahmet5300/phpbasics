<?php
//require 'include.php' ;
//echo "<br>";
//$name = 'Ahmet';
//echo $name. "<br>";
//$daysInWeek =7;
//echo $daysInWeek. "<br>";
//echo 'There is a ' . $daysInWeek . ' in a week.' . "<br>";
//$text = 'There is a ' . $daysInWeek . ' in a week.' . "<br>";
//echo $text;
require 'image.php';

$images = directoryReader('images');

if(!$images){
	echo 'could not find';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gallery</title>
</head>
<body>
<?php foreach($images as $image);?>
<img src="<?php echo $image; ?>">
<?php endforeach; ?>
	
</body>
</html>