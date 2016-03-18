<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","crumbs"); ?>
<div id="content">
	<div class="uk-container uk-container-center">
		<!-- Main -->
		<main class="uk-width-1-1">
			<div id="main" style="margin-right:0 !important;">
				<div class="ranklist">
				<?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
				<?php $num++?>
					<div class="uk-grid">
						<div class="uk-width-1-1">
							<div class="menu">
								<?php if($CATEGORYS[$r[catid]][catid]==10) { ?>
								<h2><a href="<?php echo $CATEGORYS['10']['url'];?>" title="查看全部 <?php echo $CATEGORYS['10']['catname'];?> 中的全部内容"><?php echo $CATEGORYS['10']['catname'];?></a></h2>
								<?php } else { ?>
								<h2><a href="<?php echo $CATEGORYS[$r['parentid']]['url'];?>" title="查看全部 <?php echo $CATEGORYS[$r['catid']]['catname'];?> 中的全部内容"><?php echo $CATEGORYS[$r['catid']]['catname'];?></a></h2>
								<?php } ?>
								<span class="sub">
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=66adc707bed3b9e61e374c2ee6117a6a&action=category&catid=%24r%5Bcatid%5D&num=5&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'5',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a>/
									<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</span>
							</div>
						</div>
						<?php if($CATEGORYS[$r[catid]][catid]==10) { ?>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=69f23a669e72ae356b8f2d33d09af8b1&action=hits&catid=10&thumb=1&order=weekviews+DESC&num=12&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'10','thumb'=>'1','order'=>'weekviews DESC',)).'69f23a669e72ae356b8f2d33d09af8b1');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'10','thumb'=>'1','order'=>'weekviews DESC','limit'=>'12',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
						<?php } else { ?>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=95ba52dd11c4f3dfadb87941470ff163&action=hits&catid=%24r%5Bparentid%5D&thumb=1&order=weekviews+DESC&num=12&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$r[parentid],'thumb'=>'1','order'=>'weekviews DESC',)).'95ba52dd11c4f3dfadb87941470ff163');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$r[parentid],'thumb'=>'1','order'=>'weekviews DESC','limit'=>'12',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
						<?php } ?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<div class="uk-width-medium-1-3">
							<div class="thumb"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],120,100);?>" alt="<?php echo $r['title'];?>"></a></div>
							<div class="body">
								<h2 class="title"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36);?></a></h2>
								<div class="entry"><?php echo str_cut($r[description],255);?></div>
							</div>
						</div>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</div>
				<?php $n++;}unset($n); ?>
				</div>
			</div>
		</main>
		<!-- / Main -->
	</div>
</div>
<?php include template("content","footer"); ?>