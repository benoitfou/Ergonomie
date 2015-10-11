<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Para-Vent</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="ergo.css">
    <link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="bower_components/nativeDroid2/css/nativedroid2.css">
    <link rel="stylesheet" href="bower_components/nativeDroid2/css/nativedroid2.color.red.css">
    <script src="bower_components/nativeDroid2/js/nativedroid2.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<a data-rel="back" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-arrow-back"></i></a>        <a href="#settings" data-icon="menu"></a>
			<h1>Chronomètre</h1>
		</div>
		<div data-role="main">
		<div data-role="main" id="calque">
			<div class="title">Combien de temps avez-vous passé dans les airs ?</div>
			<br><br><br>
			<?php 
				include("chrono.php");
		 	?>
		 	<br><br><br><br><br>
		</div>
	</div>
</body>
</html>