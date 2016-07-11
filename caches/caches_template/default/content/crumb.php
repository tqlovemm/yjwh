<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- breadcrumb -->
<div class="container-fluid">
	<div class="row">
		<?php if($CATEGORYS[$catid][image]) { ?>
		<img title="1760x220" alt="<?php echo $CATEGORYS[$catid]['title'];?>" style="width: 100%;height:auto;" src="<?php echo $CATEGORYS[$catid]['image'];?>">
		<?php } ?>
	</div>
</div>
<!-- / breadcrumb -->