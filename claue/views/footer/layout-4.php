<?php
/**
 * The footer layout 4.
 *
 * @since   1.4.6
 * @package Claue
 */
?>
<footer id="jas-footer" class="bgbl footer-4" <?php jas_claue_schema_metadata( array( 'context' => 'footer' ) ); ?>>
	<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) ) : ?>
		<div class="footer__top pb__80 pt__80">
			<div class="jas-container pr">
				<div class="jas-row">
					<div class="jas-col-sm-6 jas-col-xs-12">
						<?php
							if ( is_active_sidebar( 'footer-1' ) ) {
								dynamic_sidebar( 'footer-1' );
							}
						?>
					</div>
					<div class="jas-col-sm-6 jas-col-xs-12">
						<?php
							if ( is_active_sidebar( 'footer-2' ) ) {
								dynamic_sidebar( 'footer-2' );
							}
						?>
					</div>
				</div><!-- .jas-row -->
			</div><!-- .jas-container -->
		</div><!-- .footer__top -->
	<?php endif; ?>
	<div class="footer__bot pt__20 pb__20 lh__1">
		<div class="jas-container pr tc">
			<?php
				if ( has_nav_menu( 'footer-menu' ) ) {
					echo '<div class="jas-row"><div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 start-md center-sm center-xs">';
				}
				echo do_shortcode( cs_get_option( 'footer-copyright' ) );

				if ( has_nav_menu( 'footer-menu' ) ) {
					echo '</div><div class="jas-col-md-6 jas-col-sm-12 jas-col-xs-12 end-md center-sm center-xs flex">';
				}

				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_class'     => 'clearfix',
						'menu_id'        => 'jas-footer-menu',
						'container'      => false,
						'fallback_cb'    => NULL,
						'depth'          => 1
					)
				);
				if ( has_nav_menu( 'footer-menu' ) ) {
					echo '</div></div>';
				}
			?>
		</div>
	</div><!-- .footer__bot -->
</footer><!-- #jas-footer -->