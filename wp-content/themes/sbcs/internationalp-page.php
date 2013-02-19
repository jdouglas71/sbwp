<?php
/**
 * Template Name: International Program Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage SBCS
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar("internationalp"); ?>
<?php get_footer(); ?>