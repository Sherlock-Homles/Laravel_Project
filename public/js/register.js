//取消网页鼠标右键菜单
// document.oncontextmenu = function() {
//     return false;
// }
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

window.onload=function(){
    //失去焦点--邮箱
    var email=document.getElementById('email');
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
        }
        //验证邮箱是否已经注册过-->发送ajax请求，传递email参数
        //1.创建ajax对象
        var ajax=new XMLHttpRequest();
        //2.设置回调函数
        ajax.onreadystatechange=function(){
            //6.处理数据
            if(ajax.readyState==4&&ajax.status==200){
                //接收数据，处理数据
                var res=ajax.responseText;
                //处理todo
                if (res==1) {console.log(res);
                    //已查到，邮箱已被注册
                    document.getElementById('DZYXerror').innerHTML = "邮箱已被注册，前去登录！";
                    return false;
                }else{
                    console.log(res);
                    //未查到，可以注册
                    document.getElementById('DZYXerror').innerHTML = "";
                    return false;
                }
            }
        }
        //3.设置请求方式和地址
        ajax.open('post','../register.php');
        //4.设置post请求的请求头
        ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        //5.发送ajax请求
        ajax.send("email="+email.value);
    }
    //密码
    var password = document.getElementById("password");
    password.onblur=function(){
        var re = /^(?=.*\d)(?=.*[a-zA-Z])[\da-zA-Z]{6,}$/;
        // var reg=/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/;
        if (password.value == "") {
            document.getElementById('MMerror').innerHTML = "请输入密码！";
            return false;
        } else if (password.value.length < 6) {
            document.getElementById('MMerror').innerHTML = "密码长度至少为6位！";
            return false;
        } else if (!re.test(password.value)) {
            document.getElementById('MMerror').innerHTML = "格式错误，必须包含英文大小写字母和数字！";
            return false;
        } else {
            document.getElementById('MMerror').innerHTML = "";
            return true;
        }
    } 
} 

//注册表单验证
function subSheck() {
    if (email() == true && password() == true) {
        return true;
    } else {
        return false;
    }
}

//电子邮箱
function email() {
    var email = document.getElementById("email");
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
function password() {
    var password = document.getElementById("password");
    var re = /^(?=.*\d)(?=.*[a-zA-Z])[\da-zA-Z]{6,}$/;
    // var reg=/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/;
    if (password.value == "") {
        document.getElementById('MMerror').innerHTML = "请输入密码！";
        return false;
    } else if (password.value.length < 6) {
        document.getElementById('MMerror').innerHTML = "密码长度至少为6位！";
        return false;
    } else if (!re.test(password.value)) {
        document.getElementById('MMerror').innerHTML = "格式错误，必须包含英文大小写字母和数字！";
        return false;
    } else {
        document.getElementById('MMerror').innerHTML = "";
        return true;
    }
}

function DZYXonfocu() {
    document.getElementById('DZYXerror').innerHTML = "";
}
