<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_self"); ?>
<style>

	.cur{border-bottom: 1px solid #EAA322;background-color: #d3d3d3;}
	.yj-about .col-md-2 a,.yj-about .col-md-2 h3{padding:0 20px;}
	.yj-about a{color:gray;}
	.col-auto{padding:20px 0px;}

</style>
<main class="site-content" role="main">
	<?php include template("content","crumb"); ?>
	<div class="container" style="margin-top: 20px;">

		 <div class="row yj-about">

				 <div class="col-auto">
				<!--	 <h2 class="title"><?php echo $title;?></h3>-->
					 <div class="content">
						 <?php echo $content;?>
					 </div>
				 </div>


			 </div>


	</div>


</main>

<?php include template("content","footer"); ?>