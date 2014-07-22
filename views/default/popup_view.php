<title><?php echo $page->page_title; ?></title>
<div>
	<div class="wiki-text">
		<?php echo $text?>
	</div>
	<div class="wiki-controls">
		<?php echo CHtml::link(Yii::t('wiki', 'Page Index'), array('pageIndex'))?>
	</div>
</div>