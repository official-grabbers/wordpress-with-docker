<?php
/**
 * Add Theme info Page
 */

function strategist_fse_menu() {
	add_theme_page( esc_html__( 'Strategist FSE', 'strategist-fse' ), esc_html__( 'About Strategist FSE', 'strategist-fse' ), 'edit_theme_options', 'about-strategist-fse', 'strategist_fse_theme_page_display' );
}
add_action( 'admin_menu', 'strategist_fse_menu' );

function strategist_fse_admin_theme_style() {
	wp_enqueue_style('strategist-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'strategist_fse_admin_theme_style');

/**
 * Display About page
 */
function strategist_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'strategist-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'Strategist FSE is a free motivational speaker WordPress theme for advisor, business coach, company, corporate, firm, gutenberg, life coach, personal development, portfolio.', 'strategist-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'strategist-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'strategist-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'strategist-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'strategist-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'strategist-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'strategist-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'strategist-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'strategist-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'strategist-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Strategist PRO', 'strategist-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'strategist-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/business-coaching-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'strategist-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'strategist-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/demo/strategist/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'strategist-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/documentation/strategist/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'strategist-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'strategist-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'strategist-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with Strategist FSE, please give your feedback.', 'strategist-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/strategist-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'strategist-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>