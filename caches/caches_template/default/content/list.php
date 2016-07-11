<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_self"); ?>
<style>
    #masonry .box{margin-bottom: 5px;padding:5px;}
    #masonry .box:hover{box-shadow: 0 0 4px red;}

</style>
<script src="<?php echo JS_PATH;?>yj/masonry-docs.js"></script>

<!--main-->
<main>
<section>
<div class="container" style="min-height: 700px;">
    <div class="row">
        <div class="col-md-9">
            <ol class="breadcrumb">
                <li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
                <li><?php echo $catname;?></li>
            </ol>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <div class="row" id="masonry">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                <div class="col-md-3 col-sm-4 col-xs-4 box">
                    <a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>>
                    <img class="img-responsive center-block" src="<?php echo $r['thumb'];?>">
                    <div class="text-center">
                        <span style="font-size: 12px;"><?php echo $r['title'];?></span>
                        <span style="font-size: 12px;" class="rt">【<?php echo date('m-d',$r[inputtime]);?>】</span>
                    </div>
                    </a>
                </div>
                <?php $n++;}unset($n); ?>
            </div>
            <div id="pages" class="text-c"><?php echo $pages;?></div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </div>
        <div class="col-md-3 hidden-xs hidden-sm" style="font-size: 12px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">频道总排行</h3>
                </div>
                <div class="panel-body">
                    <ul class="content digg">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">频道本月排行</h3>
                </div>
                <div class="panel-body">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2caa10e576ba663010144233732308cd&action=hits&catid=%24catid&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'monthviews DESC',)).'2caa10e576ba663010144233732308cd');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <ul class="content rank">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><span class="badge" style="margin-right: 10px;"><?php echo number_format($r[monthviews]+1);?></span><a href="<?php echo $r['url'];?>"<?php echo title_style($r[style]);?> class="title" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],56,'...');?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>

        </div>

        </div>

    </div>

</div>
</section>
</main>
<script>$(function() {
    var $container = $('#masonry');
    $container.imagesLoaded(function() {
        $container.masonry({
            itemSelector: '.box',
            gutter: 0,
            isAnimated: true,
        });
    });
});</script>
<?php include template("content","footer"); ?>