<?php
if ($this->action->id == 'viewPopup') {
?>
<title><?php echo $page->page_title; ?></title>
<?php
}
?>
<div>
    <?php
    if (Yii::app()->user->checkAccess("WikiEditor")) { ?>
	<div class="wiki-controls">
		<?php echo CHtml::link(Yii::t('wiki', 'Edit'), array('edit', 'uid' => $page->getWikiUid()))?>
		<?php echo CHtml::link(Yii::t('wiki', 'History'), array('history', 'uid' => $page->getWikiUid()))?>
	</div>
    <?php } ?>
    <h3><?php echo $page->page_index . ' ' . $page->page_title?></h3> 
    [uid:<?php echo $page->page_uid?>] 
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