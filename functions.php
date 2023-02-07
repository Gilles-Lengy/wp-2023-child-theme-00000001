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
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><a href="https://01010101.one" target="_blank" rel="noreferrer noopener">One Human Factor</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Add a picture "large" and delete this paragraph</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>ONE HUMAN FACTOR is mainly a live project with a lot of improvisions. The tracks are based on noise on beats.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><a href="https://01010101.one" target="_blank" rel="noreferrer noopener">https://01010101.one</a></p>
<!-- /wp:paragraph -->
'
        )
    );
}
add_action( 'init', 'wp00000001_my_block_patterns' );