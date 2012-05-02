<?php
include("class.php");
include("config.php");
?>
<!DOCTYPE>
<html>
<head>
<title>JQombo v2.0</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
	<h1>JQombo v2.0</h1>
	<p>
		<em>Combo dependiente AJAX con todas las ciudades y estados de Venezuela usando JQuery, PHP5 y MySQL</em><br />
		(Pero facilmente usable con otros paises)
	</p>
	<hr />
	<p>
		<div>Estados: <?php JCombo::ver_estados(); ?></div>
		<div>Ciudades: <span id="ciudadesCombo"></span></div>
	</p>
	<hr />
	<p align="right">Desarrollado por: <a href="http://php.org.ve/">Alexander Garzon</a></p>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="jqombo.js"></script>
</body>
</html>
