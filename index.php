<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Para-vent</title>
    <link rel="shortcut icon" href="">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="bower_components/nativeDroid2/js/nativedroid2.js"></script>
    <link rel="stylesheet" href="ergo.css">
    <link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="bower_components/Waves/dist/waves.css">
    <link rel="stylesheet" href="bower_components/nativeDroid2/css/nativedroid2.css">
    <link rel="stylesheet" href="bower_components/nativeDroid2/css/nativedroid2.color.blue.css">
</head>
<body>
<div data-role="page">
    <div data-role="panel" id="menu"  data-display="overlay">
        <h1>Menu</h1>
        <ul data-role="listview">
            <li><a href="#">undefined</a></li>
            <li><a href="#">undefined</a></li>
            <li><a href="#">undefined</a></li>
            <li><a href="index.php">Se deconnecter</a></li>

        </ul>
    </div>
    <div data-role="panel" id="settings"  data-display="overlay" data-position="right">
        <h1>Settings</h1>
        <ul data-role="listview">
            <li><a href="#">Notifications</a></li>
            <li><a href="#">Connexion</a></li>
            <li><a href="#">Langue et texte</a></li>
        </ul>
    </div>
    <div data-role="header">
        <a href="#menu  " class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-menu"></i></a>        <a href="#settings" data-icon="menu"></a>
        <h1 class="wow fadeIn" data-wow-delay='0.4s'>Para-Vent</h1>
        <!--<div data-role="navbar">
            <ul>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
            </ul>
        </div>-->
    </div>
    <!--<div data-role="main" class="ui-content">
        
    </div>-->
    <div data-role="main" id="main" class="ui-content">
        <!--<div id="title"><br><br><br><br><br><br>Bienvenue dans l'application de Para-Vent<br><br><br><br><br><br><br><br><br><br></div>-->
        <ul data-role="listview" data-filter="true" id="content">
            <li><a href="stats.html" data-transition="flow">Statistiques</a></li>
            <li><a href="meteo.html" data-transition="flow">Météo</a></li>
            <li><a href="chronometre.php" data-transition="flow">Chronomètre</a></li>
            <li><a href="amis.html" data-transition="flow">Mes amis</a></li>
        </ul>
        <br><br><br><br><br><br><br><br><br><br>
    </div>
    <!--<div data-role="footer" data-position="fixed">

        <div class="row center-xs">
            <div class="col-xs-4">
                <div class="box">
                    <a href="#" class="ui-btn ui-mini nd2-btn-icon-block"><i class='zmdi zmdi-edit'></i> edit</a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="box">
                    <a href="#" class="ui-btn ui-mini nd2-btn-icon-block"><i class='zmdi zmdi-plus'></i> add</a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="box">
                    <a href="#" class="ui-btn ui-mini nd2-btn-icon-block"><i class='zmdi zmdi-minus'></i> remove</a>
                </div>
            </div>
        </div>
    </div>-->
</div>
</body>
</html>
