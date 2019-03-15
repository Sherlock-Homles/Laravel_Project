<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// 引入自定义的字符串截取函数
use App\Http\Controllers\Cut;

class ArticleController extends Controller
{
    function __construct()
    {
        // 开启session
        session_start();
    }
    // 文章展示
    public function Index(){
        // 获取url
        $url = Cut::cut_str($_SERVER["REQUEST_URI"],'/','-2');
        // 查询数据
        $data = DB::table('la_article')->get();
        // 渲染视图
        return view('article.index', compact('data','url'));
    }
    // 添加页面展示
    public function add(){
        // 获取url
        $url = Cut::cut_str($_SERVER["REQUEST_URI"],'/','-2');
        // 渲染视图
        return view('article.add',compact('url'));
    }
    // 添加数据到数据库
    public function Store(){
        $data = request()->all();
        // 数据验证
        if($data['title'] == null||$data['desn'] == null||$data['body'] == null){
            echo "<script>alert('请检查文章内容的完整性！');history.go(-1);</script>";
        }else{
            $data['ctime'] = $post['mtime'] = time();
            $data['dt'] = date('Y-m-d');
            DB::table('la_article')->insert($data);
            echo "<br /><h3 align='center'>正在跳转到文章列表页……</h3>";
            // return redirect()->route('index.index');
            // header("refresh:0.5;url=index");//定时跳转页面->时间为3秒
            // 跳转到了列表页
            return redirect(route('article.index'));
        } 
    }
}
