<?php

$quotes =[
	['author' => 'Ahmet Sahin',
	 'text' => 'Chocolade is leven'
	],
	['author' => 'Burak Yilmaz',
	 'text' => 'Goollaaasooo'
	],
	['author' => 'Fernando Muslera',
	 'text' => 'Elke bal is van mij!'
	]
];

$quote=$quotes[rand(0,count($quotes)-1)];
$squoteText= $quote['text'];
$squoteAuthor= $quote['author'];
//foreach($quotes as $quote){
//echo $quote['text']."<br>";
//echo $quote['author']."<br>";
//}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Random</title>
	</head>
	
	<body>
		<blockquote>
			<h2 >&ldquo;<?php  echo  $squoteText;?>&rdquo;</h2>
			<strong >--<?php  echo  $squoteAuthor;?></strong>
		</blockquote>

	</body>
	</html>