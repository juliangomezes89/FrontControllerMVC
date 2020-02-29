<?php
class InicioController{
	private $model;

	public function _CONSTRUCT(){
		
	}

	public function Inicio(){
		require_once "views/inicio/main.php";
	}

	public function Contenido(){
		require_once "views/inicio/content.php";
	}
}