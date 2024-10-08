<?php

/**
 * Title: PRO: Magazine Featured Full Layout
 * Slug: cozy-essential-addons/ct-magazine-featured-full
 * Categories: ct-patterns, fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
            <div class="wp-block-group" style="padding-top:0"><!-- wp:query {"queryId":21,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":4}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":540,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom center","isDark":false,"align":"center","className":"is-style-default"} -->
                        <div class="wp-block-cover aligncenter is-light has-custom-content-position is-position-bottom-center is-style-default" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"is-style-categories-background-with-round"} /-->

                                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"xx-large"} /-->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
            <div class="wp-block-group" style="padding-top:0"><!-- wp:query {"queryId":21,"query":{"perPage":"4","pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"minHeight":160,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","className":"is-style-default"} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-default" style="min-height:160px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"is-style-categories-background-with-round","fontSize":"xx-small"} /-->

                                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|30","left":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->