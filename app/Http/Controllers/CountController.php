<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class CountController extends Controller
	{
		public function count()
		{
			return view('home/count');
		
		}
	}
