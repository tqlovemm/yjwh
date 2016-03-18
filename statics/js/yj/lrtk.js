/*"<div class=\"btn btn-wx\"><img class=\"pic\" src=\"images/weixin.jpg\" onclick=\"window.location.href=\'http://www.lanrentuku.com\'\"/></div>" +*/
$(function(){
	var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\">" +

		"<div class=\"btn btn-phone\"><div class=\"phone\">0512-62747413</div></div>" +
		"<div class=\"btn btn-cel\"><div class=\"cel\">18021245073</div></div>" +
		"<a target='_blank' href=\"http://wpa.qq.com/msgrd?v=3&uin=1607962445&site=qq&menu=yes\" class=\"btn btn-qq\"></a>" +
		"<div class=\"btn btn-top\"></div>" +

		"</div>";
	$("#top").html(tophtml);
	$("#izl_rmenu").each(function(){
		$(this).find(".btn-wx").mouseenter(function(){
			$(this).find(".pic").fadeIn("fast");
		});
		$(this).find(".btn-wx").mouseleave(function(){
			$(this).find(".pic").fadeOut("fast");
		});
		$(this).find(".btn-phone").mouseenter(function(){
			$(this).find(".phone").fadeIn("fast");
		});
		$(this).find(".btn-phone").mouseleave(function(){
			$(this).find(".phone").fadeOut("fast");
		});

		$(this).find(".btn-cel").mouseenter(function(){
			$(this).find(".cel").fadeIn("fast");
		});
		$(this).find(".btn-cel").mouseleave(function(){
			$(this).find(".cel").fadeOut("fast");
		});
		$(this).find(".btn-top").click(function(){
			$("html, body").animate({
				"scroll-top":0
			},"fast");
		});
	});
	var lastRmenuStatus=false;
	$(window).scroll(function(){//bug
		var _top=$(window).scrollTop();
		if(_top>200){
			$("#izl_rmenu").data("expanded",true);
		}else{
			$("#izl_rmenu").data("expanded",false);
		}
		if($("#izl_rmenu").data("expanded")!=lastRmenuStatus){
			lastRmenuStatus=$("#izl_rmenu").data("expanded");
			if(lastRmenuStatus){
				$("#izl_rmenu .btn-top").slideDown();
			}else{
				$("#izl_rmenu .btn-top").slideUp();
			}
		}
	});
});