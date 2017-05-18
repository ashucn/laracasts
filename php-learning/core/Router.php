<?php 

namespace App\Core;

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
			// PagesController@home
			
			return $this->callAction(
				// 三个点就是把array变成参数 PHP5.6的功能
				...explode('@', $this->routes[$requestType][$uri])
			);
		}
		
		throw new Exception('No route defined for this URI.');
	}

    /**
     * Load and call the relevant controller action.
     *
     * @param string $controller
     * @param string $action
     */
	protected function callAction ($controller, $action){
		$controller = "App\\Controllers\\{$controller}";
		// die(var_dump($controller));
        $controller = new $controller;

		if (! method_exists($controller, $action)) {
			throw new Exception(
				"{$controller} does not respond to the {$action} action."
				);
		}

		return $controller->$action();
	}
}