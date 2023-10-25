<?php
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'            => 'hero',
            'title'             => __('hero'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'benefits',
            'title'             => __('benefits'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'faq',
            'title'             => __('faq'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'finally',
            'title'             => __('finally'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'partners',
            'title'             => __('partners'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'partnership',
            'title'             => __('partnership'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'sign-up',
            'title'             => __('sign up'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'text-block',
            'title'             => __('text block'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'who',
            'title'             => __('who'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
    }
}

function my_acf_block_render_callback( $block )
{
	$name = str_replace( 'acf/', '', $block['name'] );

	if ( file_exists( get_theme_file_path( "/custom-dev/blocks/block-{$name}.php" ) ) ) {
		include( get_theme_file_path( "/custom-dev/blocks/block-{$name}.php" ) );
	}
}


