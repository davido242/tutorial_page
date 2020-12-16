<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}


	public function help()
	{
		return view('welcome_message');
	}

	public function log_in()
	{
		return view('login');
	}

	public function page()
	{
		return view('land');
	}

	//--------------------------------------------------------------------

}
