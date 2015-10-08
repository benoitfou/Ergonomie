<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Para-vent</title>
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
<style>
#footer{
	text-align: center;
}
</style>
</head>
<body>
	<div data-role="page">
		<div data-role="panel" id="menu" data-display="overlay">
			<h1>Outils</h1>
			<ul data-role="listview">
				<li><a href="stats.html">Statistiques</a></li>
				<li><a href="meteo.html">Météo</a></li>
				<li><a href="chronometre.php">Chronomètre</a></li>
				<li><a href="ergo_2.html">Mes Amis</a></li>
				<li><a href="param.html">Paramètres</a></li>
			</ul>
		</div>
		<div data-role="header">
			<a href="#menu" data-icon="bars">Outils</a>
			<h1>Para-Vent</h1>
		</div>
		<div data-role="main" id="main">
			<div class="title">Bienvenue dans l'application de Para-vent</div>
			<img id="montagneimg" src="images/indeximg.png">
		</div>
	</div>

</body>
</html>