<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=muowdopceqgxjn2b.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;
		                 dbname=lmwyiyw1s0xlqfzk",
			            "nvxassa9gwm0mmhi",
			            "r1xkjaw6p87ufn9j");

		$link->exec("set names utf8");

		return $link;

	}

}
