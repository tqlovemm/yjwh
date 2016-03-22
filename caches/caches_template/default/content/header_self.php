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

</head>


<body>

<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-inverse animated-header" style="border-bottom: 2px solid #EAA322;">
	<div class="container">
		<div class="row hidden-xs hidden-sm" style="padding-right: 4%;">
			<div class="text-right"><span style="font-weight: bold;font-size: 14px;">联系方式：</span>
				<i style="font-size: 20px;font-weight: bold;color:#EAA322;">0512-62747413</i>
			</div>

		</div>
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
				<a href=""><img class=" img-responsive" src="<?php echo IMG_PATH;?>yj/logo.png" alt="遇见传媒"/></a>
			</div>
			<!-- /logo -->
		</div>

		<!-- main nav -->
		<nav class="collapse navbar-collapse navbar-right">
			<map>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<ul id="nav" class="nav-site nav navbar-nav  list-inline">
				<li><a class="yj-home-link" title="" href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a <?php if($r[catid] == $catid) { ?> style="color: #EAA322;" <?php } ?> href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</map>

		</nav>
		<!-- /main nav -->

	</div>
</header>
<div id="top" class="hidden-sm hidden-xs"></div>
<!--
End Fixed Navigation
==================================== -->
