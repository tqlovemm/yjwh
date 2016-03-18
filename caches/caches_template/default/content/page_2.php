<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","crumb"); ?>
<div id="content">
	<div class="uk-container uk-container-center">
		<!-- Main -->
		<main class="uk-width-1-1">
			<div id="main">
			<article class="uk-article">
				<h1 class="uk-article-title"><?php echo $title;?></h1>
				<hr>
				<div class="uk-article-lead">
					<!-- JiaThis Button BEGIN -->
					<div class="jiathis_style">
						<span class="jiathis_txt">分享到：</span>
						<a class="jiathis_button_qzone">QQ空间</a>
						<a class="jiathis_button_tsina">新浪微博</a>
						<a class="jiathis_button_tqq">腾讯微博</a>
						<a class="jiathis_button_renren hidden-small">人人网</a>
						<a class="jiathis_button_douban hidden-small">豆瓣</a>
						<a class="jiathis_button_weixin hidden-small">微信</a>
						<a class="jiathis_button_fav hidden-small">收藏夹</a>
						<a class="jiathis_button_copy hidden-small">复制网址</a>
					</div>
					<!-- JiaThis Button END -->
				</div>
				<div class="content"><?php echo $content;?></div>				
			</article>
			<!-- article -->
			</div>
		</main>
		<!-- / Main -->
		<?php include template("content","sidebar"); ?>
		<!-- otherItem -->
	</div>
</div>
<script type="text/javascript">
$(function(){$('#Article .content img').LoadImage(true,660,660,'<?php echo IMG_PATH;?>s_nopic.gif')})
</script>
<script src="http://v3.jiathis.com/code/jia.js?uid=1372342552954323" charset="utf-8"></script>
<?php include template("content","footer"); ?>