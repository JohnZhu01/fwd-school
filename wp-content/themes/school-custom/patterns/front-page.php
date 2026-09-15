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

<!-- wp:post-content {"align":"full","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} /-->

<!-- wp:cover {"url":"https://www.johnzhu.ca/school/wp-content/uploads/2026/09/laughing-meeting-1024x683.jpg","hasParallax":true,"dimRatio":20,"overlayColor":"base","isUserOverlayColor":true,"focalPoint":{"x":0.84,"y":0.39},"minHeight":431,"minHeightUnit":"px","isDark":false,"align":"full","style":{"color":{"duotone":["#111111","#003C71"]},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:431px"><div class="wp-block-cover__image-background  has-parallax" style="background-position:84% 39%;background-image:url(https://www.johnzhu.ca/school/wp-content/uploads/2026/09/laughing-meeting-1024x683.jpg)"></div><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"100px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:100px;font-style:normal;font-weight:700;text-transform:uppercase">Your Future<br>Begins Today.</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"button","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-button-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50);font-style:normal;font-weight:700;text-transform:uppercase">Explore</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->