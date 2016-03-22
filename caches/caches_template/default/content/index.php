<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_self"); ?>

<main class="site-content" role="main">

    <!--
    Home Slider
    ==================================== -->

    <section id="home-slider">
        <div id="slider" class="sl-slider-wrapper">
            <div class="sl-slider">

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=be99ec336c40f0b3ea38761d22585a88&action=lists&catid=11&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'11','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                <?php $count=0;?>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>

                <?php $count++;?>
                <?php if($count%2==0) { ?>
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <?php } else { ?>
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <?php } ?>

                  <div class="bg-img" style="background-image: url('<?php echo $v['thumb'];?>');"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown"><?php echo $v['title'];?></h2>
                            <span class="animated fadeInDown"><?php echo $v['description'];?></span>
                            <a href="#" class="btn btn-blue btn-effect">Join US</a>
                        </div>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <!--        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="bg-img bg-img-1"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown">全方位服务</h2>
                            <span class="animated fadeInDown">FULL SERVICE</span>
                            <a href="#" class="btn btn-blue btn-effect">Join US</a>
                        </div>
                    </div>
                </div>
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="bg-img bg-img-2"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2>强有力执行</h2>
                            <span>STRONG EXECUTION</span>
                            <a href="#" class="btn btn-blue btn-effect">Join US</a>
                        </div>
                    </div>
                </div>
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="bg-img bg-img-3"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2>多领域经验</h2>
                            <span>MULTIDISCIPLINARY EXPERIENCE</span>
                            <a href="#" class="btn btn-blue btn-effect">Join US</a>
                        </div>
                    </div>
                </div>
            -->
            </div><!-- /sl-slider -->

            <nav id="nav-arrows" class="nav-arrows">
                <a href="javascript:;" class="sl-prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </a>
                <a href="javascript:;" class="sl-next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </a>
            </nav>

            <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>

        </div><!-- /slider-wrapper -->
    </section>


    <section id="what-we-can" style="padding:20px 0;">
        <div class="container">
            <div class="row">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=16b87aa82712bc011ca85d123276ef48&action=lists&catid=12&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'12','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="col-md-2 col-sm-6 col-xs-6 bannerBottom">
                        <a href="<?php echo $v['url'];?>" target="_blank">
                            <p class="bannerBottomImage"><img class="center-block" src="<?php echo $v['thumb'];?>"></p>
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
                    <h2>我们做过什么</h2>
                    <p>只有专注，才有专业 ！
                        苏州遇见文化传媒有限公司一直在坚持自己的理念：我们致力于活动策划执行！
                        遇见传媒成功服务于房产、汽车、银行、服装、IT、通讯、时尚品牌等多个行业的品牌企业，服务范围遍布全国、在各个领域发展了一批相当稳固的客户群体，为不同领域的客户提供最优质的服务。我们与苏州园区世界五百强企业、大型房地产集团、商会、机构等建立长期合作关系，可独立完成各类活动前期策划筹备及后期的制作执行，在业内独树一帜。</p>
                </div>

                <ul class="project-wrapper wow animated fadeInUp">

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b549d93a3ba79140d1d97d783f3a4169&action=lists&catid=10&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'10','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>

                    <li class="portfolio-item">
                        <img src="<?php echo thumb($v[thumb],381,290,0);?>" class="img-responsive" alt="<?php echo $v['title'];?>" title="<?php echo $v['title'];?>">
                        <figcaption class="mask">
                            <h3><?php echo $v['title'];?></h3>
                            <p><?php echo str_cut($v['description'],100);?> </p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="<?php echo str_cut($v['description'],150);?>" data-fancybox-group="works" href="<?php echo thumb($v[thumb],381,290,0);?>"><i class="fa fa-search"></i></a></li>
                            <li><a href="<?php echo $v['url'];?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--
                    <li class="portfolio-item">
                        <img src="<?php echo IMG_PATH;?>yj/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
                        <figcaption class="mask">
                            <h3>Wall street</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="<?php echo IMG_PATH;?>yj/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
                            <li><a href=""><i class="fa fa-link"></i></a></li>
                        </ul>
                    </li>

                    <li class="portfolio-item">
                        <img src="<?php echo IMG_PATH;?>yj/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                        <figcaption class="mask">
                            <h3>Wall street</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Wall street" href="<?php echo IMG_PATH;?>yj/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
                            <li><a href=""><i class="fa fa-link"></i></a></li>
                        </ul>
                    </li>

                    <li class="portfolio-item">
                        <img src="<?php echo IMG_PATH;?>yj/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                        <figcaption class="mask">
                            <h3>Wall street</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="<?php echo IMG_PATH;?>yj/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
                            <li><a href=""><i class="fa fa-link"></i></a></li>
                        </ul>
                    </li>

                    <li class="portfolio-item">
                        <img src="<?php echo IMG_PATH;?>yj/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                        <figcaption class="mask">
                            <h3>Wall street</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="<?php echo IMG_PATH;?>yj/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
                            <li><a href=""><i class="fa fa-link"></i></a></li>
                        </ul>
                    </li>

                    <li class="portfolio-item">
                        <img src="<?php echo IMG_PATH;?>yj/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                        <figcaption class="mask">
                            <h3>Wall street</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="<?php echo IMG_PATH;?>yj/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
                            <li><a href=""><i class="fa fa-link"></i></a></li>
                        </ul>
                    </li>

                    <li class="portfolio-item">
                        <img src="<?php echo IMG_PATH;?>yj/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                        <figcaption class="mask">
                            <h3>Wall street</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        </figcaption>
                        <ul class="external">
                            <li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="<?php echo IMG_PATH;?>yj/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
                            <li><a href=""><i class="fa fa-link"></i></a></li>
                        </ul>
                    </li>-->
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
                    <p class="wow animated bounceInRight">苏州遇见文化传媒有限公司，致力于为客户提供专业活动策划执行全方位服务</p>
                </div>


                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=683088ede309a2db0e1e8e8a0ef13b3e&action=lists&catid=13&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'13','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                    <div class="service-item">
                        <div class="service-icon">
                            <img class="img-responsive center-block" src="<?php echo $v['thumb'];?>">
                        </div>
                        <h3><?php echo $v['title'];?></h3>
                        <p><?php echo $v['description'];?> </p>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

             <!--   <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                    <div class="service-item">
                        <div class="service-icon">
                            <img class="img-responsive center-block" src="<?php echo $v['thumb'];?>">
                        </div>
                        <h3>Support</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>
-->
<!--                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-tasks fa-3x"></i>
                        </div>
                        <h3>Well Documented</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-clock-o fa-3x"></i>
                        </div>
                        <h3>Design UI/UX</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-heart fa-3x"></i>
                        </div>

                        <h3>Web Security</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>-->

            </div>
        </div>
    </section>
    <!-- end Service section -->


    <!-- Testimonial section -->
  <!--  <section id="testimonials" class="parallax">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="sec-title text-center white wow animated fadeInDown">
                            <h2>最新通知</h2>
                        </div>

                        <div id="testimonial" class=" wow animated fadeInUp">

                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=86fab952d2d31dfdb0c92ac9f4159661&action=lists&catid=14&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'14','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>

                        <a href="<?php echo $v['url'];?>" style="color:#313131;">
                            <div class="testimonial-item text-center">
                                <img src="<?php echo $v['thumb'];?>" alt="Our Clients">
                                <div class="clearfix">
                                    <span><?php echo $v['title'];?></span>
                                    <p><?php echo $v['description'];?></p>
                                </div>
                            </div>
                        </a>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- end Testimonial section -->

    <!-- Price section -->
  <!--  <section id="price">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Price</h2>
                    <p>Our price for your company</p>
                </div>

                <div class="col-md-4 wow animated fadeInUp">
                    <div class="price-table text-center">
                        <span>Silver</span>
                        <div class="value">
                            <span>$</span>
                            <span>24,35</span><br>
                            <span>month</span>
                        </div>
                        <ul>
                            <li>No Bonus Points</li>
                            <li>No Bonus Points</li>
                            <li>No Bonus Points</li>
                            <li>No Bonus Points</li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
                    <div class="price-table featured text-center">
                        <span>Gold</span>
                        <div class="value">
                            <span>$</span>
                            <span>50,00</span><br>
                            <span>month</span>
                        </div>
                        <ul>
                            <li>Free Trial</li>
                            <li>Free Trial</li>
                            <li>Free Trial</li>
                            <li>Free Trial</li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
                    <div class="price-table text-center">
                        <span>Diamond</span>
                        <div class="value">
                            <span>$</span>
                            <span>123,12</span><br>
                            <span>month</span>
                        </div>
                        <ul>
                            <li>All Bonus Points</li>
                            <li>All Bonus Points</li>
                            <li>All Bonus Points</li>
                            <li>All Bonus Points</li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>-->
    <!-- end Price section -->

    <!-- Social section -->
   <!-- <section id="social" class="parallax">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center white wow animated fadeInDown">
                        <h2>我们的团队</h2>
                        <p>Beautifully simple follow buttons to help you get followers on</p>
                    </div>

                    <div class="social-button">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=86fab952d2d31dfdb0c92ac9f4159661&action=lists&catid=14&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'14','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
                        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <div class="col-md-2 col-xs-4 wow animated zoomIn"><a href="<?php echo $v['url'];?>"><img class="img-responsive center-block" src="<?php echo $v['thumb'];?>"></a></div>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                       &lt;!&ndash; <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
                    &ndash;&gt;
                    </div>

                </div>
            </div>
        </div>
    </section>-->
    <!-- end Social section -->

    <!-- Contact section -->
<!--    <section id="contact" >
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow animated fadeInDown">
                    <h2>Contact</h2>
                    <p>Leave a Message</p>
                </div>


                <div class="col-md-7 contact-form wow animated fadeInLeft">
                    <form action="#" method="post">
                        <div class="input-field">
                            <input type="text" name="name" class="form-control" placeholder="Your Name...">
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" class="form-control" placeholder="Your Email...">
                        </div>
                        <div class="input-field">
                            <input type="text" name="subject" class="form-control" placeholder="Subject...">
                        </div>
                        <div class="input-field">
                            <textarea name="message" class="form-control" placeholder="Messages..."></textarea>
                        </div>
                        <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
                    </form>
                </div>

                <div class="col-md-5 wow animated fadeInRight">
                    <address class="contact-details">
                        <h3>Contact Us</h3>
                        <p><i class="fa fa-pencil"></i>Phoenix Inc.<span>PO Box 345678</span> <span>Little Lonsdale St, Melbourne </span><span>Australia</span></p><br>
                        <p><i class="fa fa-phone"></i>Phone: (415) 124-5678 </p>
                        <p><i class="fa fa-envelope"></i>website@yourname.com</p>
                    </address>
                </div>

            </div>
        </div>
    </section>-->
    <!-- end Contact section -->


</main>

<script>
    $(function(){

        $(".yj-home-link").css('color','#EAA322');
    });

</script>
<?php include template("content","footer"); ?>