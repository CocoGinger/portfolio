<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package draft_portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-4-12 grid-item'); ?>>
	<?php 	if ( has_post_thumbnail() ) { ?>
		<div class='post-thumb'>
				<a href="<?php the_permalink();?>" >
				<?php the_post_thumbnail('draft-portfolio-thumbnail'); ?>
				</a>
		</div>

  <div class="overbox">
    <div class="title overtext"> 
    	<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
</div>
    <div class="tagline overtext"> <?php draft_portfolio_category();?> </div>
  </div>

	<?php } ?>
</article><!-- #post-## -->