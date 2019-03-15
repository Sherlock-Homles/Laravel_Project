<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>立即注册|pixiv</title>
    <script type="text/javascript" src="/js/register.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/register.css">
    <link rel="icon" href="Pixiv.ico">
    <script type="text/javascript" src="/js/jq.js"></script>
</head>

<body>
    <div class="box">
        <img src="https://s.pximg.net/www/images/accounts_index/logo.svg" class="h1">
        <h6 style="color:#757C80FF ">让创作变得更有乐趣</h6>
        <h3 style="color:#757C80FF ">立即注册</h3>
        <form name="form1" onSubmit="return subSheck();" action="register.php" method="post">
            <!--这里要注意onsubmit="return subSheck();"，不能掉了return，否则表单永远会提交。-->
            <input type="text" name="email" id="email" placeholder="邮箱地址">
            <span id="DZYXerror"></span>
            <br />
            <input type="password" name="password" id="password" placeholder="密码">
            <span id="MMerror"></span>
            <br />
            <input type="submit" name="submit" value="继续" class="bun">
        </form>
        <div class="facebook">
            <p>用其他账号开始</p>
            <a href="#"><img src="/Images/G+.png"></a>
            <a href="#"><img src="/Images/facebook.png"></a>
            <a href="#"><img src="/Images/weibo.png"></a>
        </div>
    </div>
    <div class="box1">
        <img src="/Images/1.png" width="100%" id="test">
    </div>
        <div class="box3">
            <a href="index">登录</a>
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