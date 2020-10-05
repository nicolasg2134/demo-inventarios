<?php

class Conexion{

	static public function conectar(){

		//$link = new PDO("mysql:host=w1kr9ijlozl9l79i.chr7pe7iynqr.eu-west-1.rds.amazonaws.com, dbname=jnzg8wzhk5fyhzxd",
			            //"yxp9ws1ljdru1oc1",
			            //"jhmaguzyqhkofugn");

		//$link->exec("set names utf8");

		//return $link;
//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
	
	//Conectar a la base de datos
	
	$hostname="mysql:host=w1kr9ijlozl9l79i.chr7pe7iynqr.eu-west-1.rds.amazonaws.com, dbname=jnzg8wzhk5fyhzxd";
	$username="yxp9ws1ljdru1oc1";
	$password="jhmaguzyqhkofugn";
	$dbname="jnzg8wzhk5fyhzxd";
	//$usertable="your_tablename";
	//$yourfield = "your_field";
	
	mysqli_connect($hostname,$username, $password) o morir ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);
	
	# Comprobar si existe registro
	
	$query = “SELECCIONAR * DESDE $usertable”;
	
	$result = mysqli_query($query);
	
	si($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Nombre: ".$name."br/>";
		}
	}
?>
