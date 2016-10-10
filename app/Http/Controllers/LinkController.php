<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	class LinkController extends Controller
	{
		public function link()
		{
			return view('home/link');
		}
	}