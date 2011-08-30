<?php /* Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de> */ ?>

<div class="bookmarks_form">
	<h2><?php echo __('Add Bookmark', true); ?></h2>

	<?php echo $this->Form->create('Bookmark'); ?>
	<?php echo $this->Form->input('title',
		array('rows' => '1', 'cols' => '40')); ?>
	<?php echo $this->Form->input('url',
		array('rows' => '1', 'cols' => '40')); ?>
	<?php echo $this->Form->input('revisit'); ?>
	<?php echo $this->Form->input('reading_list'); ?>
	<?php echo $this->Form->input('Keyword',
		array('multiple' => 'checkbox')); ?>
	<?php echo $this->Form->input('Keyword.title',
		array('label' => __('new keyword', true))); ?>
	<?php echo $this->Form->end(__('Submit', true)); ?>
</div>
