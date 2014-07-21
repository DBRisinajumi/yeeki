<div>
    <?php
    if (Yii::app()->user->checkAccess("WikiEditor")) { ?>
	<div class="wiki-controls">
		<?php echo CHtml::link(Yii::t('wiki', 'Edit'), array('edit', 'uid' => $page->getWikiUid()))?>
		<?php echo CHtml::link(Yii::t('wiki', 'History'), array('history', 'uid' => $page->getWikiUid()))?>
	</div>
    <?php } ?>
	<div class="wiki-text">
		<?php echo $text?>
	</div>
	<div class="wiki-controls">
        <?php if (Yii::app()->user->checkAccess("WikiEditor")) { ?>
		<?php echo CHtml::link(Yii::t('wiki', 'Edit'), array('edit', 'uid' => $page->getWikiUid()))?>
		<?php echo CHtml::link(Yii::t('wiki', 'History'), array('history', 'uid' => $page->getWikiUid()))?>
        <?php } ?>
		<?php echo CHtml::link(Yii::t('wiki', 'Page Index'), array('pageIndex'))?>
	</div>
</div>