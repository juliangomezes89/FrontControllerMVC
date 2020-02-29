<?php
if(isset($_GET['t'])){	
	require_once "dispatcher.php";
	$dispatcher = new Dispatcher();
	$dispatcher::doGet();
}else{
	require_once "controllers/error.controller.php";
	$error = new ErrorController();
	$error::UnAuthorized();
}