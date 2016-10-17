<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays front page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WestComfort
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

                    <h1 class="entry-tile large-screen">Hello from large screen</h1>
                    <h1 class="entry-tile small-screen">Hello from small screen</h1>
                    <?php
                    $args = array( 
                            'post_type' => 'project', 
                            'posts_per_page' => 5,
                            'orderby' => 'DESC'
                        );
                    $projects = new WP_Query( $args );
                    while ( $projects->have_posts() ) : $projects->the_post();
                        get_template_part( 'template-parts/content-index-project', get_post_format() );
                    endwhile;
                    
                    wp_reset_query();

                    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
