<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="tq">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta name="baidu-site-verification" content="xzuKGirh5c" />

	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/font-awesome.min.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/jquery.fancybox.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/bootstrap.min.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/owl.carousel.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/slit-slider.css">
	<!-- bootstrap.min -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/animate.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/lrtk.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>yj/main.css">

	<link rel="shortcut icon" href="<?php echo IMG_PATH;?>yj/icons/favicon.ico">

	<!-- Modernizer Script for old Browsers -->
	<script src="<?php echo JS_PATH;?>yj/modernizr-2.6.2.min.js"></script>

	<!-- Essential jQuery Plugins
    ================================================== -->
	<!-- Main jQuery -->
	<script src="<?php echo JS_PATH;?>yj/jquery-1.11.1.min.js"></script>
	<!-- Twitter Bootstrap -->
	<script src="<?php echo JS_PATH;?>yj/bootstrap.min.js"></script>
	<script src="<?php echo JS_PATH;?>yj/lrtk.js"></script>
	<!-- Single Page Nav -->
	<script src="<?php echo JS_PATH;?>yj/jquery.singlePageNav.min.js"></script>
	<!-- jquery.fancybox.pack -->
	<script src="<?php echo JS_PATH;?>yj/jquery.fancybox.pack.js"></script>
	<!-- Google Map API -->

	<!-- Owl Carousel -->
	<script src="<?php echo JS_PATH;?>yj/owl.carousel.min.js"></script>
	<!-- jquery easing -->
	<script src="<?php echo JS_PATH;?>yj/jquery.easing.min.js"></script>
	<!-- Fullscreen slider -->
	<script src="<?php echo JS_PATH;?>yj/jquery.slitslider.js"></script>
	<script src="<?php echo JS_PATH;?>yj/jquery.ba-cond.min.js"></script>
	<!-- onscroll animation -->
	<script src="<?php echo JS_PATH;?>yj/wow.min.js"></script>
	<!-- Custom Functions -->
	<script src="<?php echo JS_PATH;?>yj/main.js"></script>
	<script src="<?php echo JS_PATH;?>yj/jquery.event.drag-1.5.min.js"></script>
	<script src="<?php echo JS_PATH;?>yj/jquery.touchSlider.js"></script>
	<style>

		/* main_image */
		.main_visual{height:100%;border-top:1px solid #d7d7d7;overflow:hidden;position:relative;}
		.main_image{height:100%;overflow:hidden;position:relative;}
		.main_image ul{width:9999px;height:100%;overflow:hidden;position:absolute;top:0;left:0}
		.main_image li{float:left;width:100%;height:100%;}
		.main_image li span{display:block;width:100%;height:100%}
		.main_image li a{display:block;width:100%;height:100%;position: relative;}
		.main_image li a div{width: 500px;height: 160px;background-color: rgba(255, 255, 255, 0.66);position: absolute;top:50%;left:50%;margin-top: -80px;margin-left: -250px;text-align: center;font-size: 28px;line-height: 140px;padding:10px;display: none;}
		.main_image li a div h1,.main_image li a div h3{color: #616161;}
		@media (max-width: 768px) {
			.main_visual{height:100%;}
			.hotspot-title h2{ font-size: 25px;}

		}
		.my-active{color:white !important;background:rgb(234, 163, 34); }
		.hotspot-title li{ height: 15px;}
		#btn_prev,#btn_next{z-index:11111;position:absolute;width:73px!important;height:74px!important;top:50%;margin-top:-37px;display: none;}
		#btn_prev{left:100px;}
		#btn_next{right:100px;}
		.notice-box{font-size: 14px;line-height: 25px;padding-top: 20px;}
		.notice-box a{display: block;color:gray;margin-bottom: 3px;}
		.notice-box a:hover{color:#DF9017;}
		.breadcrumb a:after {
			padding: 0 5px;
			color: #ccc;
			content: " /\00a0";
		}
		.breadcrumb > li+li:before {
			padding: 0 5px;
			color: #ccc;
			content: none !important;
		}
		.friendly a{color:white;}
		.friendly a:hover{color:#EAA322;}
	</style>
	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "//hm.baidu.com/hm.js?b315857d2517b788eb87c59fbf56ba99";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script>

</head>


<body>

<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-inverse animated-header" style="border-bottom: 2px solid #EAA322;">
	<div class="container">
		<div class="row">
		<div class="navbar-header">
			<!-- responsive nav button -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- /responsive nav button -->

			<!-- logo -->
			<div class="navbar-brand" style="padding: 0;">
				<a href="/"><img class="img-responsive" src="<?php echo IMG_PATH;?>yj/logo2.png" alt="遇见传媒"/></a>
			</div>
			<!-- /logo -->
		</div>

		<!-- main nav -->
		<nav class="collapse navbar-collapse navbar-right">
			<map>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<ul id="nav" class="nav-site nav navbar-nav  list-inline text-center">
				<li style="width: 101px;"><a class="yj-home-link" title="" href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a <?php if($r[catid] == $catid) { ?> class="my-active" <?php } ?> href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</map>

		</nav>
		<!-- /main nav -->
</div>
	</div>
</header>
<div id="top" class="hidden-sm hidden-xs"></div>
<!--
End Fixed Navigation
==================================== -->
