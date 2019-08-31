<?php

namespace App\Controllers;
use App\Core\App;

class UsersController{
	
	public function index()
	{

		
		$users = App::get('query')->selectAll('users','mytodo');

		return view('users',['users'=>$users]);
		
	}

	public function store()
	{
		
			App::get('query')->insert('users',[

			'name' => $_POST['name']

					]);

		return redirect('users');
	}
	
}