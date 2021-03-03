<?php

class Conexion{

	static public function conectar(){

		//$link = new PDO("mysql:host=localhost;dbname=lestrade_pos",
		//	            "lestrade_factura",
		//	            "matilda91098");

		$link = new PDO("mysql:host=localhost;dbname=pos",
									"root",
									"");

	return $link;



//return $link;

	}

}
