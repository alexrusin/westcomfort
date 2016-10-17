<?php
/**
 * Template part for displaying Project post
 *
 *
 * @package WestComfort
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
            
            
		<?php
		
		if (has_post_thumbnail()){
                    echo '<figure class="featured-image project-image">';
                    the_post_thumbnail();
                    the_title( '<h1 class="entry-title project-title">', '</h1>' );
                    echo '</figure>';
                }
                
		 ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
                 
			the_content( sprintf(
				
				wp_kses( __( 'Continue reading %s <span class="/meta-nav">&rarr;</span>', 'westcomfort' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'westcomfort' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php westcomfort_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
