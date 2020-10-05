<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=w1kr9ijlozl9l79i.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";"dbname=jnzg8wzhk5fyhzxd",
			            "yxp9ws1ljdru1oc1",
			            "jhmaguzyqhkofugn");

		$link->exec("set names utf8");

		return $link;

	}

}
