<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package draft_portfolio
 */

?>

	</div><!-- #content -->
	</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="grid">
				<div class="main-nav col-1-1">

		<?php	if (  has_nav_menu( 'social' ) ) {
		 wp_nav_menu(array(
        'menu' => 'Main Navigation',
        'container_id' => 'cssmenu',
        'theme_location' => 'social',
        'walker' => new Draft_Portfolio_CSS_Menu_Walker()
    	));	}?>
    	</div>

		<div class="site-info col-1-1">
		<?php if( get_theme_mod('footer_text') ):

			echo get_theme_mod('footer_text');

			 else: ?>

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'draft-portfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'draft-portfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'draft-portfolio' ), 'Draft Portfolio', '<a href="https://thepixeltribe.com/template/draft-portfolio/" rel="designer">Pixel Tribe</a>' ); ?>
			<?php endif; ?>
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
