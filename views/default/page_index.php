<?php /** @var $pages WikiPage[] */?>
<?php $namespace=null?>
<ul style="list-style-type: none;">
<?php foreach($pages as $page):?>
	<?php if($page->namespace != $namespace):?>
		</ul>
		<h2><?php echo $page->namespace ?></h2>
		<ul style="list-style-type: none;">
	<?php $namespace = $page->namespace; endif?>
	<li>
		<?php 
        $text = CHtml::encode($page->page_index) . ' ' . CHtml::encode($page->page_title);
        echo CHtml::link($text, array('view', 'uid' => $page->page_uid));
        ?>
	</li>
<?php endforeach?>
</ul>