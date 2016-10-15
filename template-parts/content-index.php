<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WestComfort
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
            
            
		<?php
                if (has_post_thumbnail()){ ?>
                    <a href="<?php echo esc_url(get_permalink());?>" rel="bookmark">
                    <?php echo '<figure class="featured-image">';
                    the_post_thumbnail();
                    echo '</figure>';?>
                    </a>
           <?php }
                    
                
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title index-excerpt"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
                
                if ( 'post' === get_post_type() ) : ?>
		<div class="entry-posted">
			<?php westcomfort_index_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;
                
                if (has_excerpt($post->ID)){
                    echo '<div class="deck">';
                    echo '<p>'.get_the_excerpt().'</p>';
                    echo '</div><!--.deck-->';
                } else {
                    echo '<div class="deck">';
                    echo '<p>'.the_excerpt().'</p>';
                    echo '</div><!--.deck-->';
                }
                
                

		 ?>
	</header><!-- .entry-header -->

<!--	<div class="entry-content">
		
	</div> .entry-content -->
        <div class="continue-reading">
            <a href="<?php echo esc_url(get_permalink());?>" rel="bookmark">
                <?php
                
                    printf(
				
                        wp_kses( __( 'Continue reading %s', 'westcomfort' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    );
	
		?>
            </a>
        </div>
	
</article><!-- #post-## -->
