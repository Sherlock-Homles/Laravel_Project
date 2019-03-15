<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel|主页</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{-- 富文本编辑器 --}}
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key"></script>
    {{-- 自定义css文件 --}}
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    {{-- 导航栏 start --}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Chaldea </a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li @if ($url == '/') class="active" @endif><a href="/">主页 <span class="sr-only">(current)</span></a></li>
              <li @if ($url == 'user') class="active" @endif><a href="/user/index">达·芬奇工房</a></li>
              <li @if ($url == 'article') class="active" @endif><a href="/article/index">文章列表</a></li>
            </ul>
            <form class="navbar-form navbar-left" method="get" action="search">
              <div class="form-group">
                <input type="text" name="text" class="form-control" placeholder="输入关键词">
              </div>
              <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li>
                @if ($_SESSION==NULL)
                  <a href="/login/index">登录</a>                      
                @else
                  <a href="#">{{$_SESSION['name']}}</a>
                @endif
                
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">管制室 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">御主信息</a></li>
                  <li><a href="#">灵基一览</a></li>
                  <li><a href="#">装备一览</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">灵基召唤</a></li>
                  <li><a href="\logout">退出登录</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      {{-- 导航栏 end --}}

      @yield('content');
</body>
</html>