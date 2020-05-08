<?php

if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 180, 180 );
		    add_image_size( 'img-post', 370, 212, true );
	
}

include_once ("class/functions.php");

include_once ("class/posttypes/register-posttypes.php");

include_once ("class/posttypes/register-taxonomies.php");

include_once ("class/posttypes/box-banner.php");

include_once ("class/settings.php");
include_once ("class/defaults/include.php");






/** para to titulo do site **/
function setup_theme() 
{
 add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'setup_theme' );

?>