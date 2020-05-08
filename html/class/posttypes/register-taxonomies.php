<?php

add_action( 'init', 'create_taxonomy_categoria_beneficios', 0 );
function create_taxonomy_categoria_beneficios() {
    register_taxonomy( 'categoria-beneficios', array( 'beneficios' ), array(
        'hierarchical' => true,
        'label' => __( 'Categoria' ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
	        'rewrite' => array(
	            'slug' => 'beneficios/categoria',
	            'with_front' => true,
	        ),
	        'capabilities' => array(
	            'manage_terms' => true,
	            'edit_terms' => true,
	            'delete_terms' => true,
	        )
        )
    );
}


?>