<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view ('Pages/contacts');
    }

	public function profile()
	{
		return view('Pages/profile');
	}

	
	public function projects()
	{
		return view('Pages/projects');
	}

}
