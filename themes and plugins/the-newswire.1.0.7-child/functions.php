<?php

function issuem_post_author_archive( &$query )
{
    if ( $query->is_author )
        $query->set( 'post_type', 'article' );
    remove_action( 'pre_get_posts', 'issuem_post_author_archive' ); // run once!
}
add_action( 'pre_get_posts', 'issuem_post_author_archive' );

function load_fonts() {
            wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Playfair+Display:900');
            wp_enqueue_style( 'et-googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');
