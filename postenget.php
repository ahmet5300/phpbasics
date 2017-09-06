<?php
//
//$page = $_GET['page'];
//$searchTerm= $_GET['search'];
//$pages=10;
//echo $page . " ". $searchTerm . "<br>";
//
//for($i=1;$i<=$pages;$i++){
//	echo '<a href="?search=' .$searchTerm . '&page=' . $i . '">' . $i . '</a> ';
//}
//	
?>
<!DOCTYPE html>
<html lang="en">


	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>

	<body>
		<form action=signin.php method="post">
			<label for="username">Username</label>
			<input type="text" name="username" id="username">
			<label for="password">Passsssword</label>
			<input type="password" name="password" id="password">
			
			<button type="submit">Sign in</button>
			
			
		</form>

	</body>

</html>