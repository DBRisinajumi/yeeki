<?php
echo Yii::t('wiki', 'There is no page yet.');
if (Yii::app()->user->checkAccess("WikiEditor")) {
    echo ' ' . CHtml::link('[' . Yii::t('wiki', 'Create') . ']', array('edit', 'uid' => $uid)) . '?';
}