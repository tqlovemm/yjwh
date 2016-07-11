<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_self"); ?>

<main class="site-content" role="main">

    <!--Home Slider==================================== -->

    <section id="home-slider">
            <div class="main_visual">
                <div class="main_image">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ca3eee49b3a9e204621c0ea4965af7a7&action=lists&catid=11&order=updatetime+DESC&thumb=1&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'11','order'=>'updatetime DESC','thumb'=>'1','limit'=>'5',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <li>

                            <a href="#">
                            <span style="background: url(<?php echo $v['thumb'];?>) center no-repeat;"></span>
                            <div>
                                <h1><?php echo $v['title'];?></h1>
                                <h3><?php echo $v['description'];?></h3>

                            </div>
                            </a>
                        </li>

                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <a href="javascript:;" id="btn_prev" style="color:white;font-size: 60px;"> < </a>
                    <a href="javascript:;" id="btn_next" style="color:white;font-size: 60px;"> > </a>
                </div>
            </div>
    </section>
<script>

    $('.main_image li a').mouseover(function(){

        $(".main_image li a div").fadeIn();

    }).mouseleave(function(){

        $(".main_image li a div").fadeOut();

    });

</script>

    <section id="what-we-can">
        <div class="container">
            <div class="row">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=16b87aa82712bc011ca85d123276ef48&action=lists&catid=12&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'12','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="col-md-2 col-sm-6 col-xs-6 bannerBottom">
                        <a href="<?php echo $v['url'];?>">
                            <p class="bannerBottomImage"><img class="center-block" src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>" title="<?php echo $v['title'];?>"></p>
                            <p class="bannerBottomTitle"><?php echo $v['title'];?><br>
                                <span class="bben"><?php echo $v['description'];?></span>
                            </p>
                        </a>
                    </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>

    </section>
    <!-- portfolio section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>案例展示</h2>
                </div>

                <ul class="project-wrapper wow animated fadeInUp">

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f541e0b3a6cc9046c16cc7853b0de3c8&action=position&posid=1&order=listorder+DESC&num=32\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'32',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                    <li class="portfolio-item">
                        <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" style="height: 200px;width: 100%;" class="img-responsive" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                        <figcaption class="mask">
                            <h3><?php echo $r['title'];?></h3>
                            <p><?php echo str_cut($r['description'],80);?> </p>
                        </figcaption></a>
             <!--           <ul class="external">
                            <li><a class="fancybox" title="<?php echo str_cut($v['description'],150);?>" data-fancybox-group="works" href="<?php echo thumb($v[thumb],381,290,0);?>"><i class="fa fa-search"></i></a></li>
                            <li><a href="<?php echo $v['url'];?>"><i class="fa fa-link"></i></a></li>
                        </ul>-->
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </section>
    <!-- end portfolio section -->

    <!-- Service section -->
    <section id="service">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center">
                    <h2 class="wow animated bounceInLeft">服务</h2>
                    <p class="wow animated bounceInRight" style="padding: 0 10px;">
                        只有专注，才有专业 ！
                        苏州遇见文化传媒有限公司一直在坚持自己的理念：我们致力于活动策划执行！
                        遇见传媒成功服务于房产、汽车、银行、服装、IT、通讯、时尚品牌等多个行业的品牌企业，
                        服务范围遍布全国、在各个领域发展了一批相当稳固的客户群体，为不同领域的客户提供最优质的服务。
                        我们与苏州园区世界五百强企业、大型房地产集团、商会、机构等建立长期合作关系，
                        可独立完成各类活动前期策划筹备及后期的制作执行，在业内独树一帜。</p>
                </div>


                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=683088ede309a2db0e1e8e8a0ef13b3e&action=lists&catid=13&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'13','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                    <a href="<?php echo $v['url'];?>" target="_blank">
                    <div class="service-item">
                        <div class="service-icon">
                            <img class="img-responsive center-block" src="<?php echo $v['thumb'];?>">
                        </div>
                        <h4 class="text-left"><?php echo $v['title'];?></h4>
                        <p style="font-size: 14px;text-align: left;color:grey;"><?php echo $v['description'];?> </p>
                    </div>
                    </a>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </section>
    <!-- end Service section -->

    <!--Hotspot  section-->
        <section id="hotspot">
            <div class="container" style="margin-bottom: 50px;">
            <div class="row">
                <hr style="border-bottom: 1px solid #9f9f9f;">

                 <ul class="list-inline text-center hotspot-title" style="font-size: 25px;margin-bottom: 40px;">
                     <li class="hidden-sm hidden-xs"><div style="width: 80px;background-color:#DF9017;height: 5px;"></div></li>
                     <li class="text-center"><h2 style="background-color: #DF9017;padding:3px 20px;">遇见热点</h2></li>
                     <li class="hidden-sm hidden-xs"><div style="width: 80px;background-color:#DF9017;height: 5px;"></div></li>
                 </ul>
            </div>
            <div class="row">
                <div class="col-md-4 notice wow animated zoomInLeft">
                    <div style="border-bottom: 1px solid #9f9f9f;display: block;padding:5px;font-weight: bold;">
                        <div class="hotspot-banner pull-left" style="color:#DF9017;">【活动】</div><a class="pull-right" href="/index.php?m=content&c=index&a=lists&catid=35" target="_blank" style="color:#8e8e8e;" title="点击查看更多"> >> </a>
                        <div class="clearfix"></div>
                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1f4d083971f903949c0c50c2df064c22&action=lists&catid=35&order=updatetime+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'35','order'=>'updatetime DESC','limit'=>'5',));}?>
                    <div class="notice-box">
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <?php $num++; ?>
                        <a href="<?php echo $v['url'];?>" target="_blank"><span><?php echo $num;?>.</span><?php echo str_cut($v[title],60);?>
                            <span class="pull-right">【<?php echo date('m-d',$v[inputtime]);?>】</span>
                            <?php if($num==1) { ?>
                                <?php if($v[thumb]!='') { ?>
                                <img class="img-responsive" src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>" title="<?php echo $v['title'];?>">
                                <?php } ?>
                            <?php } ?>
                        </a>
                    <?php $n++;}unset($n); ?>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>


                <div class="col-md-4 wow animated zoomIn">
                    <div style="border-bottom: 1px solid #9f9f9f;display: block;padding:5px;font-weight: bold;">
                        <div class="hotspot-banner pull-left" style="color:#DF9017;">【通知】</div><a href="/index.php?m=content&c=index&a=lists&catid=36" target="_blank" class="pull-right" style="color:#8e8e8e;" title="点击查看更多"> >> </a>
                        <div class="clearfix"></div>
                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e5c0e98fc63e37e44b8edd4c29e628e4&action=lists&catid=36&order=updatetime+DESC&num=7&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'36','order'=>'updatetime DESC','limit'=>'7',));}?>
                    <div class="notice-box">
                    <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" target="_blank">
                            <?php if($r[thumb]!='') { ?>
                            <img style="width: 20px;height: 18px;" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                            <?php } ?>&nbsp;&nbsp;<?php echo str_cut($r[title],60);?><span class="pull-right">【<?php echo date('m-d',$r[inputtime]);?>】</span>
                        </a>
                    <?php $n++;}unset($n); ?>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>

                <div class="col-md-4 wow animated zoomInRight ">
                    <div style="border-bottom: 1px solid #9f9f9f;display: block;padding:5px;font-weight: bold;">
                        <div class="hotspot-banner pull-left" style="color:#DF9017;">【视频】</div><span class="pull-right" style="color:#8e8e8e;" title="点击查看更多"> >> </span>
                        <div class="clearfix"></div>
                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9e5f11e097be6c527a6106cb23fab6d5&action=lists&catid=37&order=updatetime+DESC&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'37','order'=>'updatetime DESC','limit'=>'8',));}?>
                    <?php $num=0?>
                    <div class="notice-box">
                        <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                        <?php $num++; ?>
                        <?php if($num==1) { ?>

                        <a href="<?php echo $r['url'];?>" target="_blank" style="float: left;margin-right: 10px;">
                            <img style="width: 150px;height: 100px;" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                        </a>

                        <?php } elseif ($num>5) { ?>
                        <a href="<?php echo $r['url'];?>" target="_blank">
                            <?php echo $r['title'];?>
                        </a>
                        <?php } else { ?>

                        <a href="<?php echo $r['url'];?>" target="_blank">
                            <img src="<?php echo IMG_PATH;?>yj/icons/videoNewsLeft.gif">&nbsp;&nbsp;<?php echo mb_substr($r[title],0,12,"utf-8");?>
                        </a>

                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>

            </div>

            </div>

        </section>

    <!--end Hotspot  section-->
</main>

<script>
    $(function(){

        $(".yj-home-link").addClass('my-active');
    });

            $(document).ready(function(){

              $(".main_visual").hover(function(){
                    $("#btn_prev,#btn_next").fadeIn()
                },function(){
                    $("#btn_prev,#btn_next").fadeOut()
                });

                $dragBln = false;

                $(".main_image").touchSlider({
                    flexible : true,
                    speed : 200,
                    btn_prev : $("#btn_prev"),
                    btn_next : $("#btn_next"),
                    paging : $(".flicking_con a"),
                    counter : function (e){
                        $(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
                    }
                });

                $(".main_image").bind("mousedown", function() {
                    $dragBln = false;
                });

                $(".main_image").bind("dragstart", function() {
                    $dragBln = true;
                });

                $(".main_image a").click(function(){
                    if($dragBln) {
                        return false;
                    }
                });

                timer = setInterval(function(){
                    $("#btn_next").click();
                }, 3000);

                $(".main_visual").hover(function(){
                    clearInterval(timer);
                },function(){
                    timer = setInterval(function(){
                        $("#btn_next").click();
                    },3000);
                });

                $(".main_image").bind("touchstart",function(){
                    clearInterval(timer);
                }).bind("touchend", function(){
                    timer = setInterval(function(){
                        $("#btn_next").click();
                    }, 3000);
                });

            });

</script>
<?php include template("content","footer"); ?>