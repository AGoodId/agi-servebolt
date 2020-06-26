<h2>agoodblock.php</h2>

<?php astra_primary_content_top(); ?>

<?php astra_content_loop(); ?>

<?php astra_primary_content_bottom(); ?>

<?php if( have_rows('flexible_content') ): ?>
		
    <?php while( have_rows('flexible_content') ): the_row(); ?>
    
        <?php if( get_row_layout() == '1_col' ): ?>
        
        	<?php include('agoodblock/1-col.php'); ?>
        	
				<?php elseif( get_row_layout() == '2_col' ): ?>
				
					<?php include('agoodblock/2-col.php'); ?>
					
				<?php elseif( get_row_layout() == '2_col_wysiwyg' ): ?>
					
					<?php include('agoodblock/2-col-wysiwyg.php'); ?>
				
				<?php elseif( get_row_layout() == 'citat' ): ?>
				
					<?php include('agoodblock/citat.php'); ?>
					
				<?php elseif( get_row_layout() == 'code' ): ?>
				
					<?php include('agoodblock/code.php'); ?>
				
				<?php elseif( get_row_layout() == 'brodtext'): ?>
			
					<?php include('agoodblock/brodtext.php'); ?>
				
				<!-- fixa funktion för att  bädda in shortcodes -->
				<?php elseif( get_row_layout() == 'shortcode'):
				
					// echo do_shortcode("[the_sub_field('shortcode');]"); ?>
									
				<?php elseif( get_row_layout() == 'video'): ?>
				
					<?php include('agoodblock/video.php'); ?>
				
				<?php elseif( get_row_layout() == 'smartslider'): ?>
				
					<?php include('agoodblock/smartslider.php'); ?>
					
				<?php elseif( get_row_layout() == 'module_name'): ?>
				
					<?php include('agoodblock/module-name.php'); ?>
					
				<?php elseif( get_row_layout() == 'hero'): ?>
				
					<?php include('agoodblock/hero.php'); ?>
					
				<?php elseif( get_row_layout() == 'spacer'): ?>
				
					<?php include('agoodblock/spacer.php'); ?>
					
				<?php elseif( get_row_layout() == 'typography'): ?>
				
					<?php include('agoodblock/typography.php'); ?>
				
				<?php elseif( get_row_layout() == 'video_2_col'): ?>
				
					<?php include('agoodblock/video-2-col.php'); ?>

				<?php elseif( get_row_layout() == 'malin'): ?>
				
					<?php include('agoodblock/malin.php'); ?>
				
				<?php elseif( get_row_layout() == 'utmaning_losning'): ?>
				
					<?php include('agoodblock/utmaning-losning.php'); ?>
				
				<?php elseif( get_row_layout() == 'vimeo'): ?>
				
					<?php include('agoodblock/vimeo.php'); ?>
					
				<?php elseif( get_row_layout() == '3_col_25_50_25'): ?>
				
					<?php include('agoodblock/3-col-25-50-25.php'); ?>
			
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>