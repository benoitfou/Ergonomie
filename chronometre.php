<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tools</title>
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<a href="#" data-rel="back">Retour</a>
			<h1>Chronomètre</h1>
		</div>
		<div data-role="main">
			<h1>Combien de temps avez-vous passsé dans les airs ?</h1>
			<?php 
				include("chrono.php");
		 	?>
		</div>
		<div data-role="footer">
			copyright ma gueule
		</div>
	</div>
</body>
</html>