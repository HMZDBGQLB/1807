"use strict";define(["jquery","jquerycookie","catchTop"],function(n){function i(){}return i.prototype.init=function(){n(".pageNav li").click(function(){n(this).addClass("nowPage").siblings().removeClass("index nowPage").removeClass("sportPage")})},i.prototype.isLogin=function(){n.cookie("user")&&(n(".login").show().find(".user").html(n.cookie("user")),n(".unlogin").hide(),n("#exit").click(function(){n(".unlogin").show(),n(".login").hide(),console.log(123),n.cookie("user","",{expires:-7,path:"/"})})),n(".nnav").ceilling("xiding"),this.virtualPlaceholder().slide().init()},i.prototype.virtualPlaceholder=function(){var i=n(".txt").val();return n(".txt").focus(function(){n(this).val()===i&&n(this).val("")}).blur(function(){""===n(this).val()&&n(this).val(i)}),this},i.prototype.slide=function(){var i=null;return n(".sportPage").hover(function(){n(".li_down").show()},function(){i=setTimeout(function(){n(".li_down").hide()},100)}),n(".li_down").hover(function(){clearInterval(i)},function(){n(".li_down").mouseleave(function(){n(this).hide()})}),this},new i});