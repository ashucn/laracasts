<?php

class Connection {
	// static方法可以不用创建类的对象直接使用的方法Connection::make();
	public static function make (){
		try {
		    return new PDO('mysql:host=127.0.0.1:33060;dbname=tasks', 'homestead', 'secret');
		} catch (PDOException $e) {
		    die($e->getMessage());
		}
	}
}