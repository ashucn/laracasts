<?php

function connectToDb()
{
	try {
	    return new PDO('mysql:host=127.0.0.1:33060;dbname=tasks', 'homestead', 'secret');
	} catch (PDOException $e) {
	    die($e->getMessage());
	}
}

function fetchAllTasks($pdo) 
{
	$statement = $pdo->prepare('select * from todos'); // query
	$statement->execute();
	
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data = null) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';

}