<?php
class Dispatcher {
	public function _CONSTRUCT(){
		
	}
	public static function doGet(){
		if(!isset($_GET['c'])){
			require_once "controllers/inicio.controller.php";
			$controller = new InicioController();
			call_user_func(array($controller,"Inicio"));
		}else{
			$controller = $_GET['c'];
			require_once "controllers/".$controller.".controller.php";
			$controller = ucwords($controller)."Controller";
			$controller = new $controller;
			$action = isset($_GET['a']) ? $_GET['a'] : "Inicio";
			call_user_func(array($controller,$action));
		}
	}
}

