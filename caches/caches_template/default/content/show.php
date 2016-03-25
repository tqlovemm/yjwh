<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_self"); ?>
<div class="container" style="margin-top: 20px;">
	<div class="row">

		<div class="col-md-3">

			<img class="img-responsive img-thumbnail" alt="<?php echo $title;?>" src="<?php echo $thumb;?>">
			<h4 style="color:gray;">服务项目：<span style="color:black;"><?php echo $title;?></span></h4>
			<h4 style="color:gray;">服务内容：<span><?php echo $description;?></span></h4>

		</div>
		<div class="col-md-9">

			<div id="Article" style="min-height: 500px;">
					<span><?php echo $inputtime;?>&nbsp;&nbsp;&nbsp;来源：<?php echo $copyfrom;?>&nbsp;&nbsp;&nbsp;</span></h1>
				<?php if($description) { ?><div class="summary" ><?php echo $description;?></div><?php } ?>
				<div class="content">
					<?php if($allow_visitor==1) { ?>
					<?php echo $content;?>
					<!--内容关联投票-->
					<?php if($voteid) { ?><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=<?php echo $voteid;?>&type=2"></script><?php } ?>

					<?php } else { ?>
					<CENTER><a href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>"><font color="red">阅读此信息需要您支付 <B><I><?php echo $readpoint;?> <?php if($paytype) { ?>元<?php } else { ?>点<?php } ?></I></B>，点击这里支付</font></a></CENTER>
					<?php } ?>
				</div>
				<?php if($titles) { ?>
				<fieldset>
					<legend class="f14">本文导航</legend>
					<ul class="list blue row-2">
						<?php $n=1;if(is_array($titles)) foreach($titles AS $r) { ?>
						<li><?php echo $n;?>、<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
						<?php $n++;}unset($n); ?>
					</ul>
				</fieldset>
				<?php } ?>
				<div id="pages" class="text-c"><?php echo $pages;?></div>

			</div>

		</div>

	</div>

</div>

<?php include template("content","footer"); ?>