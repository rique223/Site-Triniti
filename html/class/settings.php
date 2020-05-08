<?php 

/**
  * Função que altera o placeholder dos custom posts
  */

add_filter( 'enter_title_here', 'redcake_change_default_title' );
function redcake_change_default_title( $title ){
	$screen = get_current_screen();
	if ( 'produtos' == $screen->post_type ){
		$title = 'Nome do produto';
	}
	return $title;
}


/*
add_action('admin_head', 'my_remove_mediabuttons');
function my_remove_mediabuttons(){
	global $post;
	if(	$post->post_type == 'palestrantes' || 
		$post->post_type == 'download') {

		remove_action( 'media_buttons', 'media_buttons' );
	}
}*/


add_action( 'admin_menu', 'redcake_remove_menu_pages' );
function redcake_remove_menu_pages() {
    remove_menu_page('edit-comments.php');
}


 
function redcake_exclude_pages_from_admin($query) {

if ( ! is_admin() )
	return $query;
	global $pagenow, $post_type;
//  if ( !current_user_can( 'administrator' ) && is_admin() && $pagenow == 'edit.php' && $post_type == 'page' )
	$query->query_vars['post__not_in'] = array( '999999' ); // Enter your page IDs here
}
//add_filter( 'parse_query', 'redcake_exclude_pages_from_admin' );

