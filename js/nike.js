"use strict";require(["config"],function(){require(["jquery","template","header","footer"],function(t,n,a){new Promise(function(o,e){t("header").load("/html/component/header.html",function(){a.isLogin(),o()}),t("footer").load("/html/component/footer.html",function(){t(".goTop").gotoTop()})}).then(function(){t.ajax({type:"get",url:"http://localhost/project/app/php/api/nike.php",dataType:"json",success:function(o){var e=n("prodShoes",{dataShoes:o});t("#shoes").html(e)},complete:function(){t.ajax({type:"get",url:"http://rap2api.taobao.org/app/mock/116941/nike",dataType:"json",success:function(o){console.log(o);var e=n("prod",{data:o.dec});t("#ceshi").html(e).find(".test").appendTo(t("#shoes"))}})}})})})});