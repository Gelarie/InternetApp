<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Start</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php 
	include "menu.php";
	include "content.php";
	if (array_key_exists('page', $_GET)) $page = $_GET['page'];
			else $page = 1;
			echo Menu::renderMenu($page);
			echo Content::getPages($page - 1);
	?>
</body>	
</html>