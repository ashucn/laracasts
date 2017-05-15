<?php

class Connection {
	// static方法可以不用创建类的对象直接使用的方法Connection::make();
	public static function make ($config){
		try {
		    // return new PDO('mysql:host=127.0.0.1:33060;dbname=tasks', 'homestead', 'secret');

		    return new PDO(
		    		$config['connection'].';dbname='.$config['dbname'], 
		    		$config['username'], 
		    		$config['password'],
		    		$config['options']
		    	);
		} catch (PDOException $e) {
		    die($e->getMessage());
		}
	}
}