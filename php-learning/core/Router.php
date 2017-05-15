<?php 

class Router {
	protected $routes = [];

	public static function load ($filename)
	{
		$router = new static; // 等同于 new Router;
		require $filename;

		return $router;
	}

	public function define ($routes)
	{
		$this->routes = $routes;
	}

	public function direct ($uri){
		// $uri : about/culture
		if ( array_key_exists($uri, $this->routes) ) {
			return $this->routes[$uri]; 
		}
		
		throw new Exception('No route defined for this URI.');
	}
}