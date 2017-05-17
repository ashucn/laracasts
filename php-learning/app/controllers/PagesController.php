<?php 

namespace App\Controllers;

class PagesController {

	public function home (){
		// receive the request.
		// delegate
		// return a response.

		return view('index');
	}

	public function about (){
		return view('about');
	}

	public function contact (){
		return view('contact');
	}
	
}