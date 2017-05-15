<?php 
class Request {

	public static function uri (){
		
//die(var_dump(trim($_SERVER['REQUEST_URI'], '/'))); // $_SERVER super global
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}