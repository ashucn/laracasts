<?php 

namespace App\Core;

class Request {

	public static function uri (){
		//die(var_dump(trim($_SERVER['REQUEST_URI'], '/'))); // $_SERVER super global
		return trim(
			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
			);
	}

	public static function method(){
		return $_SERVER['REQUEST_METHOD']; // 
	}
}