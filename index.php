<?php

if(!isset($_GET['c'])){
	require_once "controllers/inicio.controller.php";
	$controlador = new InicioController();
	call_user_func(array($controlador,"Inicio"));

}else{
	$controlador = $_GET['c'];
	require_once "controllers/".$controlador.".controller.php";
	$controlador = ucwords($controlador)."Controller";
	$controlador = new $controlador;
	$accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
	call_user_func(array($controlador,$accion));
}