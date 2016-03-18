<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- breadcrumb -->
<div class="container-fluid">
	<div class="row">
		<?php if($CATEGORYS[$catid][image]) { ?>
		<img style="width: 100%;height:220px;" src="<?php echo $CATEGORYS[$catid]['image'];?>">
		<?php } ?>
	</div>
</div>
<!-- / breadcrumb -->