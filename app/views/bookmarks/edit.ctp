<?php /* Copyright © 2011-2013 Martin Ueding <dev@martin-ueding.de> */ ?>

<div id="actions">
	<h2><?php __('Actions'); ?></h2>
	<ul>
		<li><?php echo $this->Html->link(__('Delete this bookmark', true),
			array('action' => 'delete', $this->data['Bookmark']['id']),
			null,
			sprintf(__('Are you sure you want to delete this bookmark?', true),
			$this->data['Bookmark']['id'])) ; ?></li>
	</ul>
</div>

<div id="content" class="bookmarks_form">
	<h2><?php echo __('Edit Bookmark', true); ?></h2>

	<?php echo $this->Form->create('Bookmark'); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('title', array("type" => "text")); ?>
	<?php echo $this->Form->input('url', array("type" => "text")); ?>
	<?php echo $this->Form->input('revisit'); ?>
	<?php echo $this->Form->input('reading_list'); ?>
	<?php echo $this->Form->input('mobile'); ?>
	<?php echo $this->Form->input('Keyword',
		array('multiple' => 'checkbox')); ?>
	<?php echo $this->Form->input('Keyword.title',
		array('label' => __('new keyword', true))); ?>
	<?php echo $this->Form->end(__('Submit', true)); ?>
</div>
