<?php /* Copyright © 2011-2013 Martin Ueding <dev@martin-ueding.de> */ ?>

<div id="navigation">
	<h2><?php __('Navigation'); ?></h2>
	<ul>
		<li><?php echo $this->Html->link(__('Home Page', true),
			array('controller' => 'bookmarks', 'action' => 'startscreen')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Bookmark', true),
			array('controller' => 'bookmarks', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookmarks', true),
			array('controller' => 'bookmarks', 'action' => 'index')); ?></li>
		<li class="nomobile"><?php echo $this->Html->link(__('List Quotes', true),
			array('controller' => 'quotes', 'action' => 'index')); ?></li>
		<li class="nomobile"><?php echo $this->Html->link(__('Report a Bug', true),
			"https://github.com/martin-ueding/cakemarks/issues/new",
			array("class" => "external")); ?></li>
		<li><?php echo $this->Html->link(__('Check Referrer', true),
			array('controller' => 'pages', 'action' => 'referrer'),
			array('rel' => 'noreferrer')); ?></li>
		<li class="nomobile"><?php echo $this->Html->link(__('Bookmarklet', true),
			array('controller' => 'pages', 'action' => 'bookmarklet')); ?></li>
		<li class="nomobile"><?php echo $this->Html->link(__('Import Bookmarks', true),
			array('controller' => 'bookmarks', 'action' => 'import')); ?></li>
		<li class="nomobile"><?php echo $this->Html->link(__('Export Bookmarks', true),
			array('controller' => 'bookmarks', 'action' => 'export')); ?></li>
	</ul>
</div>
