<?php 
// Global functions and db Statement
// 
use App\Core\App;

App::bind('config', require 'config.php');
$config = App::get('config');
// die(var_dump(App::get('config')));

App::bind('database', 
	new QueryBuilder(
		Connection::make($config['database'])
	)
);

function view ($name, $data=[]) {
	extract($data);
	return require "app/views/{$name}.view.php";
}

function redirect($path) {
	header("Location: /{$path}");
}