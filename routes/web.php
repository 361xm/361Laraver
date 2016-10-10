<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// //配置请求的路由器 
// //以下两种为路由传值方式 
// 	//接收方式 在方法中传递变量就可以了
// // Route::get("/demo1/{id}","DemoController@request");
// // Route::get("/demo2/{id}",function ($did){
// // 	return $did;
// // });

// //以下为url方式传值 url地址?id=100
// Route::get("/demo1","DemoController@request");

// //配置响应的路由
// 	//1 直接走路由响应
// // Route::get("/demo3",function (){
// // 	return "hello laravel";
// // });
// 	//2 直接控制器自定义响应
// Route::get("/demo3","DemoController@response");

// //配置视图的路由
// Route::get("/demo4","DemoController@view");





// //1 基础路由 
// // Route::get[请求方式]("url请求地址",方法);

// Route::get("/aa",function (){
// 	return "aaa";
// });
// //get请求的意思 是我要想服务器要东西 

// Route::post("/",function (){
// 	return "hello POST";
// });
// //post请求的意思 是我们向服务器提交数据 

// Route::put("/",function (){
// 	return "hello PUT";
// });


// Route::delete("/",function (){
// 	return "hello Delete";
// });



// //2 加载控制器的路由
// Route::get("/demo","DemoController@index");//手动建控制器 
// // Route::get("/stu","StuController@index");//使用artisan建控制器 
// // Route::get("/stu/add","StuController@add");
// Route::get("/test","mytest\TestController@index");//使用artisan建控制器 

// //restfull 资源路由 
// Route::resource("/stu","StuController");


// // Route::get("/stu",function (){
// // 	return "查看学生信息2";
// // });


// //3 多种路由方式请求 
// // Route::match(['get', 'post'], '/aa', function () {
// //     return 'Hello AA 可接收get和post请求';
// // });

// // Route::any("","");

// //4 路由传参数 
// //必须要传递参数 
// // Route::get('/test/{id}', function ($did) {
// //     return "Hello Test! ".$did;
// // });

// //参数可有可无 
// // Route::get('/test/{id?}', function ($did=null) {
// //     return "Hello Test! ".$did;
// // });


// // function demo($a=20)
// // {

// // }

// // demo(10);


// //路由参数带约束条件 必须是数字
// // Route::get('/test/{id?}', function ($did=null) {
// //     return "Hello Test! ".$did;
// // })->where("id","[0-9]+");

// //路由取别名 
// Route::get('/aa/bb',['as'=>'cc',function(){
// 	return 123;
    
// }]);
// // //http://local.ak153.com/aa/bb

// 	//取别名作用 实现路由重定向 
// Route::get("/dd",function (){
// 	// echo route('cc');//查看当前路由url地址 
// 	// return 234;
// 	return redirect()->route('cc');

// });

// //抛出404页面没找到 
// // Route::get("/aa",function (){
// // 	// abort(404);
// // 	return 123;

// // });
//前天页面首页
Route::get('/', function () {
    return view('web');
});
Route::get('/link',"LinkController@link");
// Route::get('/admin',"AdminController@admin");
//跳转登录 注册页面
Route::get('/login',"LoginController@login");
//跳转到商品结算
Route::get('/count',"CountController@count");
//第一张图片链接
Route::get('/newlink',"NewlinkController@newlink");
//第二张图片链接
Route::get('/lk1',"Lk1Controller@lk1");
//第三张图片链接
Route::get('/lk2',"Lk2Controller@lk2");
//第四张图片链接
Route::get('/lk3',"Lk3Controller@lk3");
//第五张图片链接
Route::get('/lk4',"Lk4Controller@lk4");
//第六张图片链接
Route::get('/lk5',"Lk5Controller@lk5");
//第七张图片链接
Route::get('/lk6',"Lk6Controller@lk6");
//跳转到新闻
Route::get('/info',"NewlinkController@info");
//跳转到10k
Route::get('/pages',"NewlinkController@page");
//跳转到所有产品
Route::get('/product',"NewlinkController@product");
Route::get('/ShopList',"NewlinkController@ShopList");


//后台登录界面
// Route::get('/login', function () {
//     return view('admin.login.login');
// });

//后台登录验证
// 后台登录路由的配置 
Route::get("/admin/login","Admin\LoginController@login");//加载登录表单
Route::post("/admin/dologin","Admin\LoginController@dologin");//提交登录表单
Route::get("admin/captcha/{tmp}","Admin\LoginController@captcha");//验证码
Route::get("/admin/logout","Admin\LoginController@logout");//提交退出请求


//显示普通用户管理信息表
Route::any('/user', "Admin\UserController@index2");
// 搜索用户
//普通添加用户信息表
Route::get('/add', function () {
    return view('admin.user.add');
});

//显示普通用户管理信息表
Route::get('/adminUser', function () {
    return view('admin.adminuser.user');
});

//普通添加用户信息表
Route::get('/adminAdd', function () {
    return view('admin.adminuser.add');
});

//显示商品类别信息表(父)
Route::get('type/shopList',function () {
	return view('admin.type.shopList');
});

//显示商品类别添加
Route::get('type/addType',function () {
	return view('admin.type.addType');
});

//显示商品类别分类详情表
Route::get('type/shop',function () {
	return view('admin.type.shop');
});

//显示评论中心
Route::get('type/comment',function () {
	return view('admin.type.comment');
});

//显示订单详情表
Route::get('type/order',function () {
	return view('admin.type.order');
});

//显示添加订单表
Route::get('type/addorder',function () {
	return view('admin.type.addorder');
});

//后台管理首页(需要登录才可以访问)
Route::group(["prefix"=>"admin","middleware"=>"myauth"],function(){
		Route::get("index","Admin\IndexController@index");//网站后台首页

		// Route::get("logout","Admin\LoginController@logout");//执行退出 

		// Route::resource("stu","Admin\StuController");//学生信息管理

	});
// Route::get('/admin/index','Admin\IndexController@index');
// 增删改查用户管理
// Route::resource('/user',"UserController");
// Route::get('/user',"Admin\UserController@index");