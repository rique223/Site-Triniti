<?php 


add_action('init', 'conteudo_customizado');
 
function conteudo_customizado() {
	

	$labels = array(
		'name' => _x('Banners', 'post type general name'),
		'singular_name' => _x('Banner', 'post type singular name'),
		'add_new' => _x('Novo Banner', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum Depoimento encontrado'),
		'not_found_in_trash' => __('Nenhum Depoimento na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail')
	  );
	register_post_type( 'lista-banners' , $args );



	$labels = array(
		'name' => _x('Benefícios', 'post type general name'),
		'singular_name' => _x('Benefícios', 'post type singular name'),
		'add_new' => _x('Novo', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum encontrado'),
		'not_found_in_trash' => __('Nada encontrado na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail' )
	  );
	register_post_type( 'beneficios' , $args );



	$labels = array(
		'name' => _x('Clube de Descontos', 'post type general name'),
		'singular_name' => _x('Clube de Descontos', 'post type singular name'),
		'add_new' => _x('Novo', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum encontrado'),
		'not_found_in_trash' => __('Nada encontrado na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_position' => null,
		//'show_in_rest' => true,
		'supports' => array('title','thumbnail', 'editor' )
	  );
	register_post_type( 'clube-de-descontos' , $args );
    
    $labels = array(
		'name' => _x('Depoimentos', 'post type general name'),
		'singular_name' => _x('Depoimentos', 'post type singular name'),
		'add_new' => _x('Novo', 'portfolio item'),
		'add_new_item' => __('Novo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Novo'),
		'view_item' => __('Ver'),
		'search_items' => __('Pesquisar'),
		'not_found' =>  __('Nenhum encontrado'),
		'not_found_in_trash' => __('Nada encontrado na lixeira'),
		'parent_item_colon' => ''
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'menu_position' => null,
		//'show_in_rest' => true,
		'supports' => array('title', 'editor' )
	  );
	register_post_type( 'depoimentos' , $args );


/***************/





	flush_rewrite_rules();
}

?>