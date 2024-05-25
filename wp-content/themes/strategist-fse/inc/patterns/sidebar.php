<?php 
/**
 * Default Sidebar
 */
return array(
	'title'      => esc_html__( 'Sidebar', 'strategist-fse' ),
	'categories' => array( 'strategist-fse', 'sidebar' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#f0f0f0"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:7px;background-color:#f0f0f0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size">Latest Post</h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.6"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#f0f0f0"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"7px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:7px;background-color:#f0f0f0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">Categories</h2>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
