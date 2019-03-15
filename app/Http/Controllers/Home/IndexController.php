<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// 引入自定义的字符串截取函数
use App\Http\Controllers\Cut;

class IndexController extends Controller
{
    function __construct()
    {
        // 开启session
        session_start();
    }
    // 显示主页
    public function Index(){
        // 获取url
        $url = '/';
        // 读取数据库数据
        // $data = DB::select('select * from servant');
        // DB构建器查询
        $data = DB::table('servant')->get();
        // 渲染视图
        return view("home.index",compact('data','url'));
    }
    // 搜索
    public function Search(){
        // 获取url
        $url = '/';
		$text = request()->all();
		// 模糊查找
        // $data = DB::select('select * from servant where name like "%'.$text['text'].'%"');
        $data = DB::table('servant')->where('name','like','%'.$text['text'].'%')->get();
        // 判断是否查询到数据
        if(!count($data)){
            echo "<div class='alert alert-warning' role='alert'>
                <strong>警告!</strong> 未查询到数据，请更换关键词。
            </div>";
            return view("home.index",compact('data','url'));
        }else{
            return view("home.index",compact('data','url'));
        }
    }
}
