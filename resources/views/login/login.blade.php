<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>登录|pixiv</title>
    <script type="text/javascript" src="/js/login.js"></script>
    <!-- 引入JQuery -->
    <script type="text/javascript" src="/js/jq.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link rel="icon" href="Pixiv.ico">
    <!-- 自定义鼠标指针 -->
    <!-- <script language=>var Loaded=false;var Flag=false;</script>
    <script src='http://files.cometsystems.com//lc2000.js' language=></script>
    <script language=>if(Loaded&&Flag)TheCometCursor('cd_electric',0,626);</script> -->
</head>

<body>
    <div class="box">
        <img src="https://s.pximg.net/www/images/accounts_index/logo.svg" class="h1">
        <h6 style="color:#757C80FF ">让创作变得更有乐趣</h6>
        <form name="form1" onSubmit="return subSheck();" action="login" method="post">
            <input type="text" name="email" class="text" id="username" placeholder="邮箱地址/pixiv ID">
            <br />
            <input type="password" name="password" class="text" id="password" placeholder="密码">
            <br />
            <input type="submit" name="submit" value="登录" id="bun">
        </form>
        <div class="google">
            <a href="#">忘记了</a>
        </div>
        <div class="facebook">
            <p>用其他账号登录</p>
            <a href="#"><img src="/Images/G+.png"></a>
            <a href="#"><img src="/Images/facebook.png"></a>
            <a href="#"><img src="/Images/weibo.png"></a>
        </div>
    </div>
    <div class="box1">
        <img src="/Images/1.png" width="100%" id="test">
    </div>
        <div class="box2">
            <form class="form1">
                <a href="#" class="a1">
                    <img src="https://s.pximg.net/www/js/bundle/b6377bf413065abd8e6ad0a89e41c3f9.svg"></a>
                <input type="text" name="QZ" class="QZ" placeholder="搜索pixiv" value>
            </form>
        </div>
        <div class="box3">
            <a href="register">立即注册</a>
        </div>
        <footer class="footer">
            <a href="#"><span>©pixiv</span></a>
            <a href="#"><span>使用条款</span></a>
            <a href="#"><span>帮助</span></a>
            <div class="box5">
                <div class="box4">
                    <a href="#">日本語</a>
                    <a href="#">English</a>
                    <a href="#">한국어</a>
                    <a href="#">繁體中文</a>
                    <a href="#">简体中文</a>
                </div>
                <a href="#" class="a1"><span>简体中文ⅴ</span></a>
            </div>
        </footer>
</body>

</html>