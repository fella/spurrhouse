<?php

/**
 * Title: PRO: Magazine Featured Dark
 * Slug: cozy-essential-addons/ct-magazine-featured-dark
 * Categories: ct-patterns, fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#131314"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#131314;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
            <div class="wp-block-group" style="padding-top:0"><!-- wp:query {"queryId":21,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":4}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"minHeight":520,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom center","align":"center","className":"is-style-default"} -->
                        <div class="wp-block-cover aligncenter has-custom-content-position is-position-bottom-center is-style-default" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"#f5b922e3"}}}},"className":"is-style-categories-background-with-round"} /-->

                                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#d8d8d8"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|30","left":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"x-large"} /-->
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

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
            <div class="wp-block-group" style="padding-top:0"><!-- wp:query {"queryId":21,"query":{"perPage":"4","pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"minHeight":250,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","className":"is-style-default"} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-default" style="min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"#f5b922e3"}}}},"className":"is-style-categories-background-with-round"} /-->

                                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#d8d8d8"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|30","left":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->
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