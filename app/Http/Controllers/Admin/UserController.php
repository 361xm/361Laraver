<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index ()
    {
    	// 获得所有用户信息
    	$list = \DB::table('user')->get();
    	// dd($list);
    	// 将数组传到试图里加载
    	return view("admin.user.user",["list"=>$list]);
    }
    public function index2 (Request $request)
    {
    	// 获得一个连接对象
    	// return 111;
    	$db = \DB::table('user');
    	$where = [];
    	if($request->has('name')){
            $name = $request->input('name');
            $db->where('username', 'like', "%{$name}%");//实现过滤控制器
            $where['name'] = $name;
         // 模板显示
        } 
        $list = $db->paginate(1);
        return view("admin.user.user")->with(["list"=>$list,"where"=>$where]);
        // 数据分页
        
    }
}
