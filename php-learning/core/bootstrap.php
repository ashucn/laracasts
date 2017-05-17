<?php 
// Global db Statement
App::bind('config', require 'config.php');
$config = App::get('config');
// die(var_dump(App::get('config')));

App::bind('database', 
	new QueryBuilder(
		Connection::make($config['database'])
	)
);