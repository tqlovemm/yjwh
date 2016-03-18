<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_self"); ?>
<main class="site-content" role="main">
    <div class="container-fluid">
        <div class="row">
            <img src="<?php echo $CATEGORYS[$catid]['image'];?>">
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">

        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#brand" data-toggle="tab">品牌设计</a></li>
            <li><a href="#adv" data-toggle="tab">传媒广告</a></li>
            <li><a href="#network_marketing" data-toggle="tab">网络营销</a></li>
            <li><a href="#activities" data-toggle="tab">活动公关</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="brand">

                <div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=68f6204da259bcc103f7fe4cfd11f646&action=lists&catid=20&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'20','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php echo $v['url'];?>" target="_blank">
                            <p class="bannerBottomImage"><img class="center-block img-thumbnail" title="250x200" style="width: 100%;height:200px;" src="<?php echo $v['thumb'];?>"></p>
                            <p class="bannerBottomTitle"><?php echo $v['title'];?><br>
                                <span style="display: block;"><?php echo $v['description'];?></span>
                            </p>
                        </a>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>

            </div>
            <div class="tab-pane fade" id="adv">
                <div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af9a657164888270141420c16f475867&action=lists&catid=23&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'23','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php echo $v['url'];?>" target="_blank">
                            <p class="bannerBottomImage"><img class="center-block img-thumbnail" title="250x200" style="width: 100%;height:200px;" src="<?php echo $v['thumb'];?>"></p>
                            <p class="bannerBottomTitle"><?php echo $v['title'];?><br>
                                <span style="display: block;"><?php echo $v['description'];?></span>
                            </p>
                        </a>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
            <div class="tab-pane fade" id="network_marketing">
                <div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aa69a2955fa7b9fb6d10215335d01f2c&action=lists&catid=24&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'24','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php echo $v['url'];?>" target="_blank">
                            <p class="bannerBottomImage"><img class="center-block img-thumbnail" title="250x200" style="width: 100%;height:200px;" src="<?php echo $v['thumb'];?>"></p>
                            <p class="bannerBottomTitle"><?php echo $v['title'];?><br>
                                <span style="display: block;"><?php echo $v['description'];?></span>
                            </p>
                        </a>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
            <div class="tab-pane fade" id="activities">
                <div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c42af5390e89e717d5ccd9a0a90ef2f9&action=lists&catid=25&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'25','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php echo $v['url'];?>" target="_blank">
                            <p class="bannerBottomImage"><img class="center-block img-thumbnail" title="250x200" style="width: 100%;height:200px;" src="<?php echo $v['thumb'];?>"></p>
                            <p class="bannerBottomTitle"><?php echo $v['title'];?><br>
                                <span style="display: block;"><?php echo $v['description'];?></span>
                            </p>
                        </a>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>








    </div>


   <!-- <div class="" id="content">
        <div class="col-left left-nav">
            <h1>关于我们</h1>

            <ul class="content">
                <?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
                    <li<?php if($catid==$cid) { ?> class="cur"<?php } ?>><a href="<?php echo $CATEGORYS[$cid]['url'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
            </ul>
            <div class="bottom"></div>
        </div>
      <div class="col-auto">
            <img src="<?php echo IMG_PATH;?>v9/about_ad.png" width="659" height="171" />
            <h1 class="title"><?php echo $title;?></h1>
            <div class="content">
                    <?php echo $content;?>
            </div>
        </div>
     </div>-->
</main>

<?php include template("content","footer"); ?>