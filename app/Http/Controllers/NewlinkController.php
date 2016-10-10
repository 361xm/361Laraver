<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class NewlinkController extends Controller
	{
		public function newlink()
		{
			return view('home/newlink');
		}

		public function info()
		{
			return view('home/xinwen');
		}

		public function page()
		{
			return view('home/ganchao');
		}

		public function product()
		{
			return view('home/shangpin');
		}
		public function ShopList()
		{
			return view('home/ShopList');
		}
                public function abc()
                {
                    return "12345";
                }
                 public function cda()
                {
                    return "12345";
                }
	}
