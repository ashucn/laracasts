<?php

require 'vendor/autoload.php'; // 使用composer 一定要加这一行

use App\Core\Router; //
use App\Core\Request; //
// 载入 bootstrap, config project
$query = require 'core/bootstrap.php';//db instance

$router = new Router;

Router::load('app/routes.php')->direct(
	Request::uri(), Request::method()
); // chain
