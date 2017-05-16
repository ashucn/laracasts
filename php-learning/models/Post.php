<?php 
class Post {
	public $title;
	public $published;

	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;
	}	
}

$posts = [
	new Post('ashu1', true),
	new Post('ashu2', true),
	new Post('ashu3', true),
	new Post('ashu4', false),
];


$posts = array_map(function ($post) {
	return (array) $post;
}, $posts);

var_dump($posts);