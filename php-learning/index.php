<?php
// 载入 bootstrap, config project
$query = require 'core/bootstrap.php';//db instance

$router = new Router;

require Router::load('routes.php')->direct(
	Request::uri(), Request::method()
); // chain
