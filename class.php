<?php
/**
 * JQombo: Combo dependiente AJAX con todas las ciudades y estados de Venezuela
 * @author Alexander Garzon
 */
class JCombo {
	/**
	 * Conecta a MySQL
	 * @param string $dbhost
	 * @param string $dbuser
	 * @param string $dbpass
	 * @param string $dbname
	 */
	public static function conectar($dbhost, $dbuser, $dbpass, $dbname){
		$link = @mysql_connect($dbhost, $dbuser, $dbpass) or die("ERROR DE CONEXION A BASE DE DATOS");
				@mysql_select_db($dbname) or die("ERROR DE CONEXION A BASE DE DATOS");
	}

	/**
	 * Genera input select con los estados
	 */
	public static function ver_estados(){
		$result = @mysql_query("SELECT * FROM estados;");
		$estados = "<select name=\"estados\" id=\"estados\">\n\r";
		$estados .= "<option value=\"0\"> </option>\n\r"; // Default
		while ($array = mysql_fetch_array($result)){
			$estados .= "<option value=\"$array[id]\">$array[estado]</option>\n\r";
		}

		$estados .= "</select>\n\r";
		echo $estados;

	}

	/**
	 * Genera input select con los estados
	 * @param integer $cod
	 */
	public static function ver_ciudades($cod = 0){
		$result = mysql_query("SELECT * FROM ciudades WHERE cod = '$cod';");
		//var_dump($result);exit;
		$ciudades = "<select name=\"ciudades\" id=\"ciudades\">\n\r";
		$ciudades .= "<option value=\"0\"> </option>\n\r"; // Default

		while ($array = mysql_fetch_array($result)){
			$ciudades .= "<option value=\"$array[id]\">$array[ciudad]</option>\n\r";
		}

		$ciudades .= "</select>\n\r";
		echo $ciudades;
	}
}
?>