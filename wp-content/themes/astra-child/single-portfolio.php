<?php
/**
* Template Name: Portfolio
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
		
		<div class="wp-block-columns">
		<div class="col3 left">
			<p><?php the_field('uppdragsgivare'); ?></p>
			<h1><?php single_post_title(); ?></h1>
			<?php
				if ( is_singular() ) :
						$post = get_post();
						$categories = get_the_category($post->ID);
						if ( ! empty( $categories ) ) {
							  echo '<ul class="my-tags-list">';
								foreach( $categories as $category ) {
										echo '<li>';
										echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>';
										echo '</li>';
								}
								// echo '</ul>';
						}
				    echo get_the_tag_list(
				        '<li>',
				        '</li><li>',
				        '</li></ul>',
				        get_queried_object_id()
				    );
				endif;
				?>
				<p class="project-desc"><?php the_field('projektbeskrivning'); ?></p>
		</div>

		</div>
		
		<?php include('agoodblock.php'); ?>
		
		<?php astra_primary_content_top(); ?>
		
		<?php //astra_content_loop(); ?>

		<?php // astra_primary_content_bottom(); ?>
		
		<h6><a href="/portfolio/">Portfolio</a></h6>
		
		<?php echo do_shortcode("[pt_view id='a0737abdjl']"); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
