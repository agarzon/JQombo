<?php
include("class.php");
include("config.php");

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  JCombo::ver_ciudades($_GET["cod"]);
} else {
	die("Vete!");
}
?>
