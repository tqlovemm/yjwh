<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="content_main">
  <div id="content" class="layout_center">
    <div id="left">
      <div class="left_title">
        <h2>À¸Ä¿µ¼º½</h2>
      </div>
      <div class="left_body">
        <dl>
          <?php if($top_parentid) { ?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">ç¼–è¾‘</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <dt><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></dt>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          <?php } ?>
        </dl>
      </div>
      <div class="left_bottom"></div>
    </div>
    <div id="right">
      <div class="right_title"></span>
        <h2><?php echo $r['catname'];?></h2>
      </div>
      <div class="right_body">
        <h2 class="news_title"><?php echo $title;?></h2>
        <div class="news_content"> <?php echo $content;?> </div>
      </div>
      <div class="right_bottom"></div>
    </div>
    <div class="float_clear"></div>
  </div>
</div>
<?php include template("content","footer"); ?>