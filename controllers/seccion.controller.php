<?php
class SeccionController{
	private $model;

	public function _CONSTRUCT(){
		
	}

	public function Inicio(){
		require_once "views/seccion/main.php";
	}

	public function Contenido(){
		require_once "views/seccion/content.php";
	}

	public function Noticias(){
		require_once "views/seccion/news.php";
	}
}
