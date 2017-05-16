<?php 

class Router {
	protected $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load ($filename)
	{
		$router = new static; // 等同于 new self 或 new Router;
		require $filename;

		return $router;
	}

	public function get ($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
		
	}
	public function post ($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
		
	}

	public function direct ($uri, $requestType){
		// $uri : about/culture
		if ( array_key_exists($uri, $this->routes[$requestType]) ) {
			return $this->routes[$requestType][$uri]; 
		}
		
		throw new Exception('No route defined for this URI.');
	}
}