<div class="entry-content clear">
	<div class="wp-block-columns">
	    <div class="col2 left">
		
		<?php $image = get_sub_field('bild_1');
	    if( !empty($image) ): ?>
	
	        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="image-left" /><br>
	        
		<?php endif; ?>
		<p class="caption"><?php the_sub_field('bildtext_1'); ?></p>
	
	</div>
	
	<div class="col2 right">
		
		<?php $image = get_sub_field('bild_2');
	    if( !empty($image) ): ?>
	        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="image-right" /><br>
		<?php endif; ?>
		<p class="caption"><?php the_sub_field('bildtext_2'); ?></p>
		
	</div>
	</div>
</div>