<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk1Controller extends Controller
	{
		public function lk1()
		{
			return view('home/lk1');
		}
	}