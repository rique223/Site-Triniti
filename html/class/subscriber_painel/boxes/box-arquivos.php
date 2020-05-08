<?php
	add_action('wp_dashboard_setup', 'display_info_redcake_feeds');
	
	function display_info_redcake_feeds() {
		global $wp_meta_boxes;
		wp_add_dashboard_widget('display_info_redcake_feeds_widget', 'Arquivos para downloads', 'display_redcake_feeds');
	}

	function display_redcake_feeds() {

		?>

			<style>
			
			.lnk-rss{
				color: #c4262f !important;
			}

			
		</style>


            <?php 
           		$args = array (
							'post_type'              => 'lista-arquivos',
							'meta_query'             => array(
								array(
									'key'       => '_usuario_arquivos',
									'value'     => "$user_ID",
								),
							),
						);
                $my_query = new WP_Query($args);
                while ( $my_query->have_posts() ) : $my_query->the_post();
the_title();

//					echo get_post_meta( $post->ID, '_autor_da_obra', true );
            ?>



            <?php endwhile; 

	}
?>