<?php
	$root = str_replace('\\', '/', $_SERVER["DOCUMENT_ROOT"]);
	$dir = str_replace('\\', '/', __DIR__);
	if(strpos($dir, $root) == 0) {
		$path = str_replace($root, "", $dir);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>leftover</title>

		<!-- Bootstrap -->
		<link href="<?php echo $path; ?>/main.css" rel="stylesheet">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo $path; ?>/bootstrap-3.3.6/js/bootstrap.min.js"></script>
		<!-- Main JavaScript Datei einbinden-->
		<script src="<?php echo $path; ?>/js/main.js" type="text/javascript"></script>
		<link href="<?php echo $path; ?>/img/icon.png" type="image/png" rel="shortcut icon">
	</head>
