<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class LoginController extends Controller
	{
		public function login()
		{
			return view('home/login');
		
		}
	}
