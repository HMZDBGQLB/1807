"use strict";require(["config"],function(){require(["jquery","template","jquerycookie"],function(m,t){new Promise(function(t,e){m.ajax({type:"get",url:"/html/component/login_register.html",success:function(t){m(document.body).prepend(t)},complete:function(){m("form").append(m("#register").children()),t()}})}).then(function(){var l=/^1(3|4|5|7|8)\d{9}$/,c=/^[\w]{8,}$/;m("form").submit(function(t){var e=m("#tel").val(),r=m("#psd").val(),o=m("#re-psd").val(),n=!0;return""===e?(m("form .err1").html("手机号码不能为空！"),n=!1):e.match(l)||(n=!1,m("form .err1").html("手机号码格式不正确！")),""===r?(n=!1,m("form .err2").html("密码不能为空！")):r.match(c)||(n=!1,m("form .err2").html("密码必须是数字字母下划线，且不少于8位！")),""===o?(n=!1,m("form .err3").html("密码不能为空！")):r!==o&&(n=!1,m("form .err3").html("两次密码输入不一致！")),n?m.ajax({method:"POST",data:{tel:e,password:r},dataType:"json",url:"http://localhost/project/app/php/api/register.php",success:function(t){console.log(t),t.exit?alert("该手机号已被注册！"):1===t.code&&(alert("注册成功！"),m.cookie("tel",e,{path:"/"}),location.href="/html/login.html")}}):m("form input").focus(function(){m(this).next().html("")}),t.preventDefault(),!1})})})});