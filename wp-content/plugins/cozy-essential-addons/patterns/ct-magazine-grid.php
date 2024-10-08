<?php

/**
 * Title: PRO: Magazine Grid
 * Slug: cozy-essential-addons/ct-magazine-grid
 * Categories: ct-patterns, fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"border":{"bottom":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"18px","letterSpacing":"2px"}},"textColor":"primary"} -->
        <h3 class="wp-block-heading has-primary-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">Featured Products</h3>
        <!-- /wp:heading -->

        <!-- wp:separator {"backgroundColor":"primary"} -->
        <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
        <!-- /wp:separator -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="padding-top:0"><!-- wp:query {"queryId":21,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":250,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","isDark":false} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"is-style-categories-background-with-round"} /--></div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|50","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-title-hover-secondary-color","fontSize":"large"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}},"textColor":"light-gray"} /-->

                    <!-- wp:paragraph {"textColor":"light-gray"} -->
                    <p class="has-light-gray-color has-text-color">.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date {"textColor":"light-gray"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"moreText":"","style":{"color":{"text":"#6d6c6c"}},"fontSize":"x-small"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->