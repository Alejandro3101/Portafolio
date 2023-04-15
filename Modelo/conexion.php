<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=portafolio",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}