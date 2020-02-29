<?php
class ErrorController{

	public function _CONSTRUCT(){
		
	}

	public function UnAuthorized(){
		require_once "views/error/unauthorized.php";
	}

}