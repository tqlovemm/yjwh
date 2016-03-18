<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_self"); ?>
<style>

   .grid_6,.grid_24 {
    display: inline;
    float: left;
    position: relative;
    margin-left: 1%;
    margin-right: 1%;
  }
  .slogan {
    line-height: 4em;
    font-size: 23px;
    color: #279;
    text-align: center;
  }
  .container_24 .grid_6 {
    width: 23%;
  }
  .service .marketing {
    border-color: #09c;
  }
  .service .advertising {
    border-color: #f90;
  }
  .service .planning {
    border-color: #9c0;
  }
  .service .design {
    border-color: #f33;
  }
  .service .design span {
    background-color: #f33;
    background-position: -460px 0;
  }
  .service .advertising span {
    background-color: #f90;
    background-position: 0 0;
  }
  .service .marketing span {
    background-color: #09c;
    background-position: -230px 0;
  }
  .service .planning span {
    background-color: #9c0;
    background-position: -690px 0;
  }
  .service a.planning:hover span {

     background-position: -690px -138px;
   }
  .service a.marketing:hover span {

     background-position: -230px -138px;
   }
  .service a.advertising:hover span {

     background-position: 0 -138px;
   }
  .service a.design:hover span {

     background-position: -460px -138px;
   }
  .service span {
    display: inline-block;
    margin-bottom: 10px;
    width: 100%;
    height: 138px;
    line-height: 999px;
    overflow: hidden;
    transition: background .2s linear;
  }
  .container_24 .grid_24 {
    width: 100%;
  }
  .service a {
    display: block;
    padding-bottom: 5px;
    line-height: 1.8em;
    font-size: 12px;
    color: #666;
    border-bottom: 1px solid #ddd;
    overflow: hidden;
    cursor: pointer;
  }
   .service a:hover{color:black;text-decoration: none;}
</style>


<main class="site-content" role="main">
  <?php include template("content","crumb"); ?>
  <div class="container" style="margin-top: 20px;">

  <div class="row">
    <div class="text-center" style="line-height: 4em;font-size: 23px;color: #279;">新启成传媒——整合营销服务提供商，全媒体整合营销的先创者。</div>
  </div>

    <div class="container_24 row clearfix ">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dd97ca32f547eaa7a40c521e0554fd2d&action=lists&catid=26&order=updatetime+DESC&thumb=1&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'26','order'=>'updatetime DESC','thumb'=>'1','limit'=>'8',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
        <div class="col-md-3 service home-service">
          <a style="height: 247px;" href="<?php echo $v['url'];?>" rel="new" class="marketing">
            <span style="background-image:url(<?php echo $v['thumb'];?>)"><?php echo $v['title'];?></span>
            <?php echo $v['description'];?>
          </a>
        </div>
      <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

 <!--     <div style="opacity: 1;" class="grid_6 service home-service">
        <a style="height: 247px;" href="" rel="new" class="design">
          <span>品牌设计</span>
          品牌形象建立与优化（VIS）、品牌形象推广（PIS）、公共空间视觉识别系统（SIS）、微电影/企业（产品）宣传片/广告片（TVC）、各类创意设计
        </a>
      </div>

      <div style="opacity: 1;" class="grid_6 service home-service">
        <a style="height: 247px;" href="" rel="new" class="advertising">
          <span>传媒广告</span>
          腾讯风铃授权代理商，提供：微网站建设及微网站运维、推广服务，为客户提供无线营销解决方案；同时提供电视、广播、报纸、杂志、户外等传统媒体的制作、发布
        </a>
      </div>

      <div style="opacity: 1;" class="grid_6 service home-service">
        <a style="height: 247px;" href="" rel="new" class="marketing">
          <span>网络营销</span>
          新浪微博苏州运营中心，提供：粉丝通、微博营销推广、社交媒体应用整合、互联网口碑推广、全网整合营销、网站建设、新启成全网通等产品与服务
        </a>
      </div>

      <div style="opacity: 1;" class="grid_6 service home-service">
        <a style="height: 247px;" href="" class="planning">
          <span>活动公关</span>
          企业周年庆、客户答谢会、产品发布会、新闻发布会、各类展会、&nbsp;开业/开盘、竣工/奠基/落成、&nbsp;文艺表演、舞台搭建、展会布置、灯光音响、各类艺术大赛
        </a>
      </div>-->
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