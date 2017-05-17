<?php 

namespace App\Controllers;
use App\Core\App;
class UsersController {
	public function index (){

		$users = App::get('database')->selectAll('users');
		return view('users', compact('users'));
	}

	public function store (){
		// insert the user associated with the req
		App::get('database')->insert('users', [
			'name' => $_POST['name'],
			]);
		return redirect('users');
	}
}