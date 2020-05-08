<?php


add_action("admin_menu", "add_menu_item_custom_posts_google");

function add_menu_item_custom_posts_google() {
//add_menu_page('Configuração de emails', 'Configuração de emails', 'edit_posts', 'custom-posts', 'display_custom_posts_page_google', '', 3);
	add_submenu_page( 'options-general.php', 'Configuração Google', 'Configuração Google', "edit_posts", 'redcake-settings-google', "display_custom_posts_page_google" ); 
}

function display_custom_posts_page_google() {
	global $wpdb;
	$table_name = $wpdb->prefix . "dados_extras";

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_cod_analytics'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_cod_analytics', 
									'value_field' => $_POST['cod_analytics'] ),
							array(	'custom_field' => 'basic_cod_analytics' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_cod_analytics', 
									'value_field' => $_POST['cod_analytics'] ) );
		}

		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_cod_adwords'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_cod_adwords', 
									'value_field' => $_POST['cod_adwords'] ),
							array(	'custom_field' => 'basic_cod_adwords' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_cod_adwords', 
									'value_field' => $_POST['cod_adwords'] ) );
		}

		echo '<br><div class="updated below-h2" id="message">';
		echo '<p>Informativo atualizado com sucesso.</p>';
		echo '</div>';

	}

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
				id mediumint(9) AUTO_INCREMENT,
				custom_field VARCHAR(50),
				value_field VARCHAR(50),
				PRIMARY  KEY (id)
			);";
	try {
		$wpdb->query($sql);
	} catch (Exception $e) {}
	?>
		<div class="wrap">
			
			<h2>Configurações Google</h2>

		</div>

		

		<form action="" method="POST" >
			<p>
				<label for="cod_analytics">Código do Google Analytics:</label>
				<br />
				<textarea name="cod_analytics" id="cod_analytics" cols="30" rows="10" style="width:400px; padding:10px;" ><?php the_data_extra('basic_cod_analytics');?></textarea>
			</p>


			<p>
				<label for="cod_adwords">Código do Google Adwords:</label>
				<br />
				<textarea name="cod_adwords" id="cod_adwords" cols="30" rows="10" style="width:400px; padding:10px;" ><?php the_data_extra('basic_cod_adwords');?></textarea>
			</p>
			
			<p>
				<input type="submit" value="salvar" class="button button-primary button-large" />
			</p>
		</form>
	<?php
}


?>