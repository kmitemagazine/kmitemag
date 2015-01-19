<?php

function issuem_post_author_archive( &$query )
{
    if ( $query->is_author )
        $query->set( 'post_type', 'article' );
    remove_action( 'pre_get_posts', 'issuem_post_author_archive' ); // run once!
}
add_action( 'pre_get_posts', 'issuem_post_author_archive' );