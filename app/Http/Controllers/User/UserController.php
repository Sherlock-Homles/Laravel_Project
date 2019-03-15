<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// 引入自定义的字符串截取函数
use App\Http\Controllers\Cut;

class UserController extends Controller
{
    function __construct()
    {
        // 开启session
        session_start();
    }
    // 显示用户列表
    public function Index(){
        // 获取url
        $url = Cut::cut_str($_SERVER["REQUEST_URI"],'/','-2');
        // 查询数据
        // $data = DB::select('select * from users');
        $data = DB::table('users')->get();
        // 渲染视图
        return view("home.user",compact('data','url'));
    }
    // 搜索
    public function Search(){
        // 获取url
        $url = Cut::cut_str($_SERVER["REQUEST_URI"],'/','-2');
        $text = request()->all();
        // 模糊查找
        // DB+SQL语句
        // $data = DB::select('select * from users where name like "%'.$text['text'].'%"');
        // DB构建器方式
        # 查询出来的为对象
        $data = DB::table('users')->where('name','like','%'.$text['text'].'%')->get();
        // 判断是否查询到数据
        # 判断对象是否为空---count(object)----无数据：0----有数据：1
        if(!count($data)){
            echo "<div class='alert alert-warning' role='alert'>
                <strong>警告!</strong> 未查询到数据，请更换关键词。
            </div>";
            return view("home.user",compact('data','url'));
        }else{
            return view("home.user",compact('data','url'));
        }
    }
}
