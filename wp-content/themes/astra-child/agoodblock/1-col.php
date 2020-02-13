<div class="entry-content clear">
	<?php $image = get_sub_field('bild');
	if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><br>
	<?php endif; ?>
	<p class="caption"><?php the_sub_field('bildtext'); ?></p>
</div>
