//取消网页鼠标右键菜单
// document.oncontextmenu = function() {
//     return false;
// }

//禁止图片右键行为->jQuery实现
$('img').bind("contextmenu", function(e) { return false; })
//注册表单验证
// function subSheck23() {
// alert(7878);
// $("#bun").onSubmit({ debug: false; });
// }

//失去焦点验证
$(window).ready(function(){
    //失去焦点--邮箱
    var email=document.getElementById('username');
    email.onblur=function(){
        var re = /[a-zA-Z0-9]{1,10}@[a-zA-Z0-9]{1,5}\.[a-zA-Z0-9]{1,5}/;
        if (email.value == "") {
            document.getElementById('DZYXerror').innerHTML = "请输入电子邮箱！";
            return false;
        } else if (!re.test(email.value)) {
            document.getElementById('DZYXerror').innerHTML = "邮箱地址格式不正确！";
            return false;
        } else {
            document.getElementById('DZYXerror').innerHTML = "";
            return true;
        }
    }
    //密码
    var password = document.getElementById("password");
    password.onblur=function(){
        var re = /^(?=.*\d)(?=.*[a-zA-Z])[\da-zA-Z]{6,}$/;
        // var reg=/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/;
        if (password.value == "") {
            document.getElementById('MMerror').innerHTML = "请输入密码！";
            return false;
        } else {
            document.getElementById('MMerror').innerHTML = "";
            return true;
        }
    } 
});

//提交验证
function subSheck() {
    if (username() == true && password() == true) {
        return true;
    } else {
        return false;
    }
}
//验证邮箱
function username() {
    var re = /[a-zA-Z0-9]{1,10}@[a-zA-Z0-9]{1,5}\.[a-zA-Z0-9]{1,5}/;
    var email = document.getElementById("username");
    if (email.value == "") {
        document.getElementById('DZYXerror').innerHTML = "请输入电子邮箱！";
        return false;
    } else if (!re.test(email.value)) {
        document.getElementById('DZYXerror').innerHTML = "邮箱地址格式不正确！";
        return false;
    } else {
        document.getElementById('DZYXerror').innerHTML = "";
        return true;
    }
}
//验证密码
function password() {
    var re = /^(?=.*\d)(?=.*[a-zA-Z])[\da-zA-Z]{6,}$/;
    var password = document.getElementById("password");
    if (password.value == "") {
        document.getElementById('MMerror').innerHTML = "请输入密码！";
        return false;
    } else {
        document.getElementById('MMerror').innerHTML = "";
        return true;
    }
}

//按时间切换图片
function change(n) {
    if (n > 12) {
        n = 1;
    }
    document.getElementById("test").setAttribute("src", "/static/home/Images/" + n + ".png") //图片文件
    n++;
    setTimeout("change(" + n + ")", 10000); //时间间隔
}
window.onload = function() {
    setTimeout("change(1)", 10000);
}