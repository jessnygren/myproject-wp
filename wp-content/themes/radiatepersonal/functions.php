<?php
/**
 * Created by PhpStorm.
 * User: designstudio_5
 * Date: 10/06/2014
 * Time: 15:35
 */
/* Change Excerpt length */
function custom_excerpt_length( $length ){
    return 21;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
