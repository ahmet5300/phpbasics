<?php
//
//echo $_GET['page'];
//$page=null;
//	
//if(isset($_GET['page'])){
//	$page = $_GET['page'];
//	
//}
//
////echo $page;
//
//$page = isset($_GET['page']) ? $_GET['page'] : 3;
//echo $page;

$page= $_GET['page'] ?? 1;
echo $page;
?>