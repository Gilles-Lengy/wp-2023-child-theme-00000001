<?
/*
 * Reusable blocks
 ************************************************/

function wp00000001_my_block_patterns() {
    register_block_pattern(
        'wp-2023-child-theme-00000001/project-shown-pattern',
        array(
            'title'       => __( 'Project showned expand', 'wp-2023-child-theme-00000001'),
            'description' => _x( 'The part of a project that is always displayed', 'wp-2023-child-theme-00000001' ),
            'categories'  => array( 'columns' ),
            'content'     => '
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center"><a href="http://01010101.one" target="_blank" rel="noreferrer noopener">ONE HUMAN FACTOR</a></h3>
<!-- /wp:heading -->

<!-- wp:image {"id":19,"width":1500,"height":1000,"sizeSlug":"full","linkDestination":"media","className":"is-style-twentytwentyone-border"} -->
<figure class="wp-block-image size-full is-resized is-style-twentytwentyone-border"><a href="https://ddf8-728a63f95197.wptiger.fr/wp-content/uploads/2021/04/ohf-roc-gam-2k19-1221-by-laurent-t-06-1500.jpg"><img src="https://ddf8-728a63f95197.wptiger.fr/wp-content/uploads/2021/04/ohf-roc-gam-2k19-1221-by-laurent-t-06-1500.jpg" alt="ONE HUMAN FACTOR LIVE" class="wp-image-19" width="1500" height="1000"/></a><figcaption class="wp-element-caption">ONE HUMAN FACTOR LIVE</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">ONE HUMAN FACTOR is mainly a live project with a lot of improvisions. The tracks are based on noise on beats.</p>
<!-- /wp:paragraph -->
'
        )
    );
}
add_action( 'init', 'wp00000001_my_block_patterns' );