<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>

				<nav class="social-media-navigation" role="navigation">
          <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
					<?php wp_nav_menu( $attr = array (
    'width' => '32', //input only number, in pixel
    'height' => '32', //input only number, in pixel
    'margin' => '4', //input only number, in pixel
    'display' => 'horizontal', //horizontal | vertical
    'alignment' => 'center', //center | left | right
    'attr_id' => 'custom_icon_id', //add custom id to <ul> wraper
    'attr_class' => 'custom_icon_class', //add custom class to <ul> wraper
    'selected_icons' => array ( '1', '3', '5', '6' )
    //you can get the icon ID form All Icons page
),
if ( function_exists('cn_social_icon') ) echo cn_social_icon( $attr );
?>
        </nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
