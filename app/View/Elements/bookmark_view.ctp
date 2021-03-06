<?php
# Copyright © 2011-2012 Martin Ueding <dev@martin-ueding.de>
# Licensed under the MIT License (http://www.opensource.org/licenses/mit-license.php).
?>

<?php if (!empty($bookmarks)): ?>
	<?php if (isset($wrapper) && $wrapper == 'dd'): ?>
	<dd>
	<?php endif; ?>
	<?
	if (isset($bookmarks['Bookmark'][0]['id'])) {
		$bookmarks = $bookmarks['Bookmark'];
	}
	?>
	<table class="bookmark_view">
	<?php foreach ($bookmarks as $bookmark): ?>
		<?
		if (isset($bookmark['Bookmark'])) {
			$bookmark = $bookmark['Bookmark'];
		}
		?>
		
		<?php if (!empty($bookmark) && !empty($bookmark['id']) && !empty($bookmark['title']) && !empty($bookmark['url'])): ?>
		<tr>
			<?php $this->Bookmark->print_bookmark($bookmark); ?>
		</tr>
		<?php endif; ?>
	<?php endforeach; ?>
	</table>
	<?php if (isset($wrapper) && $wrapper == 'dd'): ?>
	</dd>
	<?php endif; ?>
<?php endif; ?>
