<?php
/**
* Template Name: AGoodBlock + Gutenberg
* Template Post Type: post, page, product, custom-type 
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php // if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php // get_sidebar(); ?>

<?php // endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_loop(); ?>

		<?php astra_primary_content_bottom(); ?>
		
		<div class="wp-block-columns">
		<div class="col2 left">
			<h1><?php single_post_title(); ?></h1>
			
			<p>Uppdragsgivare: <?php the_field('uppdragsgivare'); ?></p>
			<?php
				if ( is_singular() ) :
				    echo get_the_tag_list(
				        '<ul class="my-tags-list"><li>',
				        '</li><li>',
				        '</li></ul>',
				        get_queried_object_id()
				    );
				endif;
				?>
		</div>
		<div class="col2 right">
			<?php the_field('projektbeskrivning'); ?>
		</div>
		</div>
		
		<?php include('agoodblock.php'); ?>
		
		<?php echo do_shortcode("[pt_view id='a0737abdjl' tag='GET_CURRENT']"); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
