<?php
/**
 * The template for displaying all Project posts
 *
 * @package WestComfort
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-project', get_post_format() );

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'westcomfort' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next project:', 'westcomfort' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'westcomfort' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous project:', 'westcomfort' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

			
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();