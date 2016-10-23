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

                    <?php
                    $args = array( 
                            'post_type' => 'project', 
                            'posts_per_page' => 5,
                            'orderby' => 'DESC'
                        );
                    $projects = new WP_Query( $args );
                    //slider for large screen
                    echo '<div class="large-screen">';?>
                    <div class="slider-wrapper theme-light">
                        <div id="slider" class="nivoSlider">
                        <?php
                        while ( $projects->have_posts() ) : $projects->the_post();?>
                            <?php if (has_post_thumbnail()){?>
                            <a href="<?php echo esc_url( get_permalink() )?>"><img src="<?php echo esc_url( the_post_thumbnail_url('slider-size'));?>" data-thumb="<?php echo esc_url( the_post_thumbnail_url( 'thumbnail' ));?>" alt="" title="<?php echo the_excerpt();?>" /></a>
                           <?php } ?>
                       <?php endwhile;?>
                        </div>
                    </div>
                    <?php echo'</div>';
                    
                    //archive page for small screen
                    echo '<div class="small-screen">';
                        while ( $projects->have_posts() ) : $projects->the_post();
                            get_template_part( 'template-parts/content-index-project', get_post_format() );
                        endwhile;
                    echo'</div>';
                    
                    wp_reset_query();

                    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
