<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SCSDesigns_CSM
 *
 * We need to test for the front page and if so, deliver the front page header
 * otherwise, we need to deliver the regular content and footer
 * 
 * 
 * 
 * 
 * 
 *  */

?>

<?php

if ( is_front_page() ) {

   /* need to echo out the footer code for the front page and pull the function for the footer menu
    * incorporate that into the code.
    */
}
</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'scsdesigns-csm' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'scsdesigns-csm' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'scsdesigns-csm' ), 'scsdesigns-csm', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
?>
<?php wp_footer(); ?>

</body>
</html>
