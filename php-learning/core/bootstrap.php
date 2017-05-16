<?php 
// Global db Statement
// 
$app = [];

$app['config'] = require 'config.php';
// 使用composer, 定义了autoload的classmap，以下4行就不需要要了
/*require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';*/

$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);