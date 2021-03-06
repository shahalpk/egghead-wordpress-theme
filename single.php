<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Egghead
 */

get_header(); ?>

<div class="center pure-g">
	<div id="primary" class="content-area pure-u-1-1 pure-u-md-16-24">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(array('prev_text' => "&larr; %title", 'next_text' => "&rarr; %title"));
//
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_sidebar();
	?>
</div>

<?php
get_footer();

