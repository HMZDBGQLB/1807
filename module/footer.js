"use strict";define(["jquery"],function(o){o.fn.extend({gotoTop:function(){var n=!1;this.click(function(){0!==o(document).scrollTop()&&(n||(n=!0,o("html,body").animate({scrollTop:0},500,"swing",function(){n=!1})))})}})});