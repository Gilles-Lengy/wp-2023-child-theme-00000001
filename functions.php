<?
/*
 * Reusable blocks
 ************************************************/

function wp00000001_my_block_patterns() {
    register_block_pattern(
        'wp-2023-child-theme-00000001/project-shown-pattern',
        array(
            'title'       => __( 'Project shown expand', 'wp-2023-child-theme-00000001'),
            'description' => _x( 'The part of a project that is always displayed', 'wp-2023-child-theme-00000001' ),
            'categories'  => array( 'columns' ),
            'content'     => '
<!-- wp:heading {"textAlign":"center"} -->
<h3 class="has-text-align-center"><a href="https://01010101.one" target="_blank" rel="noreferrer noopener">One Human Factor</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Add a picture "large" and delete this paragraph</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>ONE HUMAN FACTOR is mainly a live project with a lot of improvisions. The tracks are based on noise on beats.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"project-official-web-site"} -->
<div class="wp-block-button project-official-web-site"><a class="wp-block-button__link wp-element-button" href="https://01010101.one" target="_blank" rel="noreferrer noopener">Official website</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
'
        )
    );
    register_block_pattern(
        'wp-2023-child-theme-00000001/project-hide-pattern',
        array(
            'title'       => __( 'Project hide expand', 'wp-2023-child-theme-00000001'),
            'description' => _x( 'The part of a project that is hidden on arrival', 'wp-2023-child-theme-00000001' ),
            'categories'  => array( 'columns' ),
            'content'     => '
    <!-- wp:paragraph -->
<p>ONE HUMAN FACTOR is my main project. I started it under the name of "ONE" in 1996. Many years later, in 2018, it became "ONE HUMAN FACTOR".</p>
<!-- /wp:paragraph -->

<!-- wp:embed {"url":"https://vimeo.com/one00000001/ohfgam2k19","type":"video","providerNameSlug":"vimeo","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
    https://vimeo.com/one00000001/ohfgam2k19
</div></figure>
<!-- /wp:embed -->

<!-- wp:buttons {"className":"project-various-buttons-container","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons project-various-buttons-container"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://twitter.com/OneHumanFactor" target="_blank" rel="noreferrer noopener">Twitter</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.facebook.com/One-Human-Factor-344437749479668/" target="_blank" rel="noreferrer noopener">Facebook</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/channel/UCignBaZGcxy_Jh7gYE6ZowA" target="_blank" rel="noreferrer noopener">Watch</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://onehumanfactor.bandcamp.com/" target="_blank" rel="noreferrer noopener">Listen</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"project-official-website-button-container","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons project-official-website-button-container"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="https://01010101.one/" target="_blank" rel="noreferrer noopener">Please, feel free to visit the official website</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
'
        )
    );

}
add_action( 'init', 'wp00000001_my_block_patterns' );