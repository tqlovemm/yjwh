<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer" style="margin-top:20px;background-color: #262626;padding:20px 10%;font-size: 14px;">
	<div class="footer-left pull-left">
		<ul class="list-unstyled list-inline">
			<li><a href="/"><img src="statics/images/yj/yujian-logo.png" alt="遇见文化传媒" title="年终总结" height="53"/></a><span> |</span></li>
			<li><p>Copyright &copy; 2012-2016. <a href="http://www.yujianchuanmei.cn"><span style="color: #F4A718;">苏州遇见文化传媒有限公司</span></a>. AllRights reserved. </p></li>
		</ul>
	</div>
	<div class="footer-right pull-right">
		<ul class="list-unstyled list-inline">
			<li><a href="http://www.yujianchuanmei.cn"><span style="color: white;">苏州遇见文化传媒有限公司旗下项目：&nbsp;&nbsp;&nbsp;</span></a><a href="http://www.tecclub.cn" target="_blank"><img class="tec-logo" alt="TEC引擎俱乐部" title="点击进入TEC引擎俱乐部" src="statics/images/yj/tec link.png"></a></li>
		</ul>
	</div>
	<div class="clearfix"> </div>
	<div class="row">
		<ul class="list-unstyled list-inline text-center friendly">
			<li><a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接：</a>

				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=0f78b763d64bc584f076557d8f584de9&action=type_list&siteid=%24siteid&order=listorder+DESC&num=20&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'20',));}?>

					<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
					<?php if($type!==0) { ?>
					<a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><?php echo $v['name'];?></a>&nbsp;&nbsp;
					<?php } else { ?>
					<a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" style="border: 1px solid #FFBE7A;"></a>
					<?php } ?>
					<?php $n++;}unset($n); ?>

				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

			</li>

		</ul>
	</div>
</div>
</body>
</html>