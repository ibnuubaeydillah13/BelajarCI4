<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
		// echo "hello word!";
		// echo "<br>";
		// echo "Saya sedang belajar CodeIgniter 4";
	}
	// public function dashboard()
	// {
	// 	return view('dashboard/index');
	// }

	public function login()
	{
		return view('login');
	}

	public function panel()
	{
		return view('dashboard');
	}
	//--------------------------------------------------------------------

}
