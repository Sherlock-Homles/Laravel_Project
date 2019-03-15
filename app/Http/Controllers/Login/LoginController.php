<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function __construct()
    {
        // 开启session
        session_start();
    }
    // 显示登录页面
    public function Index(){
        // 渲染视图
        return view('login.login');
    }
    // 登录方法
    public function Login(){
        $data = request()->all();
        // 查询数据库，验证
        $userinfo = DB::select("select * from master where email='".$data['email']."' and password='".$data['password']."'");
        // var_dump($s);
        if(empty($userinfo)){
            echo "<script>alert('登录失败！');history.go(-1);</script>";
        }else{
            // 登录信息保存到session中
            /* 将用户信息保存到session中 */
            foreach($userinfo as $k=>$v){
                $v=(array)$v;
                $_SESSION['uid'] = $v['id'];
                $_SESSION['name'] = $v['name'];
                $_SESSION['userinfo'] = $v;
            }
            request()->session()->put('user',$data['email']);
            // echo "<script>alert('登录成功！')</script>";
            echo "<br /><h3 align='center'>正在跳转到主页……</h3>";
            // return redirect()->route('index.index');
            header("refresh:0.5;url=/");//定时跳转页面->时间为3秒
        }
    }
    // 显示注册页面
    public function Register(){
        // 渲染视图
        return view('login.register');
    }
    // 注册方法
    public function doRegister(){
        // 后台验证
        // 验证方式1
        $this->validate(request(),[
            'email'=>''
        ]);
    }
    // 退出方法
    public function Logout(){
        // 清除session
        session_destroy();
        echo "<br /><h3 align='center'>退出成功……</h3>";\
        header("refresh:0.5;url=/");//定时跳转页面->时间为3秒
    }
}
