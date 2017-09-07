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
$quoteText=$quote['text'];
$quoteAuthor=$quote['author'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>random</title>
</head>
	<body>
		<blockquote>
			<h2>&ldquo;<?php echo $quoteText;?>&rdquo;</h2>
			<strong>---<?php echo $quoteAuthor;?></strong>
		</blockquote>

	</body>
</html>
