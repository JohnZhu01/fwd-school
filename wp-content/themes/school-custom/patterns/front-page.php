<?php
/**
 * Title: front-page
 * Slug: school-custom/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"className":"site-main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group site-main" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/drawing-wireframes-1-1024x682.jpg","dimRatio":60,"customOverlayColor":"#444444","isUserOverlayColor":true,"sizeSlug":"large","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/drawing-wireframes-1-1024x682.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#444444"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color">School Demo</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">This is the demo site for WordPress Site #3 (School) in the BCIT FWDP 3600 course.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:post-content {"align":"full","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->