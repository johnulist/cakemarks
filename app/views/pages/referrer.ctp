<?php /* Copyright © 2011-2012 Martin Ueding <dev@martin-ueding.de> */ ?>

<div id="content">
	<h2><?php __('Check Referrer'); ?></h2>

	<?php if (empty($_SERVER['HTTP_REFERER'])): ?>
		<?php __('You referrer is not transmitted.'); ?>
	<?php else: ?>
		<?php printf(__('You come from %s.', true), $_SERVER['HTTP_REFERER']); ?>
	<?php endif; ?>
</div>
