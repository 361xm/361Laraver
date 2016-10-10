<?php
	//自定义test控制器
	namespace App\Http\Controllers\mytest;
	//第二种引入控制器的方式
	use App\Http\Controllers\Controller;
	//第一种引入控制器的方式
	class TestController extends Controller
	{
		public function index()
		{
			return "Test控制器Index方法";
		}
	}
