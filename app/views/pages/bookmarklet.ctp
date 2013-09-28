<?php /* Copyright © 2011-2012 Martin Ueding <dev@martin-ueding.de> */ ?>

<div id="content">
	<h2><?php echo __('Bookmarklet'); ?></h2>

	<p><?php echo __('This is a bookmarklet to put into your bookmarks. Whenever you are on a site that you want to bookmark, click it and you will get directed to the creation page.'); ?></p>

	<?php echo $this->Html->link(__('Bookmark this Page'),
		"javascript:"
		."function esc(s){"
		."s=s.replace(/\//g, '__slash__');"
		."s=s.replace(/:/g, '__colon__');"
		."s=s.replace(/#/g, '__hash__');"
		."s=s.replace(/\?/g, '__ques__');"
		."s=s.replace(/&/g, '__amp__');"
		."return s;"
		."}"
		."location.href="
		."'http://".$_SERVER['HTTP_HOST'].current(split("app", $_SERVER['PHP_SELF']))
		."bookmarks/add/'+esc(document.URL);"); ?>
</div>
