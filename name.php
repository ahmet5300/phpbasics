<?php


if(empty(trim($_POST['name']))){
	header('Location: http://localhost/phpbasics/form.php');
}

echo "Heeyy there, {$_POST['name']}";


?>