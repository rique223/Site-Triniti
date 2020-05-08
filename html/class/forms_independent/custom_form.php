<?php


add_action("admin_menu", "add_menu_item_custom_posts");

function add_menu_item_custom_posts() {
//add_menu_page('Configuração de emails', 'Configuração de emails', 'edit_posts', 'custom-posts', 'display_custom_posts_page', '', 3);
	add_submenu_page( 'options-general.php', 'Configuração de emails', 'Configuração de emails', "edit_posts", 'redcake-settings-email', "display_custom_posts_page" ); 
}

function display_custom_posts_page() {
	global $wpdb;
	$table_name = $wpdb->prefix . "dados_extras";

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_smtp_send_mail'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_smtp_send_mail', 
									'value_field' => $_POST['smtp_send_mail'] ),
							array(	'custom_field' => 'basic_smtp_send_mail' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_smtp_send_mail', 
									'value_field' => $_POST['smtp_send_mail'] ) );
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_address_send_mail'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_address_send_mail', 
									'value_field' => $_POST['address_send_mail'] ),
							array(	'custom_field' => 'basic_address_send_mail' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_address_send_mail', 
									'value_field' => $_POST['address_send_mail'] ) );
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_password_mail'");
		if (strlen($_POST['password_mail']) > 0) {
			if (count($result) > 0) {
				$wpdb->update( 	$table_name, 
								array( 	'custom_field' => 'basic_password_mail', 
										'value_field' => $_POST['password_mail'] ),
								array(	'custom_field' => 'basic_password_mail' ) );
			}else{
				$wpdb->insert( 	$table_name, 
								array( 	'custom_field' => 'basic_password_mail', 
										'value_field' => $_POST['password_mail'] ) );
			}
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_from_mail'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_from_mail', 
									'value_field' => $_POST['from_mail'] ),
							array(	'custom_field' => 'basic_from_mail' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_from_mail', 
									'value_field' => $_POST['from_mail'] ) );
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_to_mail'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_to_mail', 
									'value_field' => $_POST['to_mail'] ),
							array(	'custom_field' => 'basic_to_mail' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_to_mail', 
									'value_field' => $_POST['to_mail'] ) );
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_to_mail_2'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_to_mail_2', 
									'value_field' => $_POST['to_mail_2'] ),
							array(	'custom_field' => 'basic_to_mail_2' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_to_mail_2', 
									'value_field' => $_POST['to_mail_2'] ) );
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_to_mail_3'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_to_mail_3', 
									'value_field' => $_POST['to_mail_3'] ),
							array(	'custom_field' => 'basic_to_mail_3' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_to_mail_3', 
									'value_field' => $_POST['to_mail_3'] ) );
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_protocol'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_protocol', 
									'value_field' => $_POST['protocol'] ),
							array(	'custom_field' => 'basic_protocol' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_protocol', 
									'value_field' => $_POST['protocol'] ) );
		}
		$result = $wpdb->get_results("SELECT id FROM $table_name WHERE custom_field = 'basic_port'");
		if (count($result) > 0) {
			$wpdb->update( 	$table_name, 
							array( 	'custom_field' => 'basic_port', 
									'value_field' => $_POST['port'] ),
							array(	'custom_field' => 'basic_port' ) );
		}else{
			$wpdb->insert( 	$table_name, 
							array( 	'custom_field' => 'basic_port', 
									'value_field' => $_POST['port'] ) );
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
			
			<h2>Configurações de envio de e-mail - SMTP</h2>

		</div>

		

		<form action="" method="POST" >
			<p>
				<label for="smtp_send_mail">HOST SMTP:</label>
				<br />
				<input type="text" name="smtp_send_mail" value="<?php the_data_extra('basic_smtp_send_mail');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<label for="address_send_mail">Email de autenticação:</label>
				<br />
				<input type="text" name="address_send_mail" value="<?php the_data_extra('basic_address_send_mail');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<label for="password_mail">Senha de autenticação:</label>
				<br />
				<input type="password" name="password_mail" value="<?php //the_data_extra('basic_password_mail');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<label for="from_mail">Email remetente:</label>
				<br />
				<input type="text" name="from_mail" value="<?php the_data_extra('basic_from_mail');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<label for="to_mail">Email destinatário CONTATO:</label>
				<br />
				<input type="text" name="to_mail" value="<?php the_data_extra('basic_to_mail');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<label for="to_mail_2">Email destinatário CHAMADO:</label>
				<br />
				<input type="text" name="to_mail_2" value="<?php the_data_extra('basic_to_mail_2');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<label for="to_mail_3">Email destinatário REVENDEDOR:</label>
				<br />
				<input type="text" name="to_mail_3" value="<?php the_data_extra('basic_to_mail_3');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<label for="to_mail_3">Encryption:</label>
				<br />
			
				<select name="protocol" id="protocol">
					<option value="">Selecione</option>
					<option value="tls" <?php  echo (get_data_extra('basic_protocol') == 'tls') ? 'selected="selected"' : ''; ?> >Use TLS encryption</option>
					<option value="ssl" <?php  echo (get_data_extra('basic_protocol') == 'ssl') ? 'selected="selected"' : ''; ?> >Use SSL encryption</option>
					<option value="none" <?php  echo (get_data_extra('basic_protocol') == 'none') ? 'selected="selected"' : ''; ?> >No encryption</option>
				</select>
			</p>
			<p>
				<label for="port">Porta:</label>
				<br />
				<input type="text" name="port" value="<?php the_data_extra('basic_port');?>" style="width:400px; padding:10px;" />
			</p>
			<p>
				<input type="submit" value="salvar" class="button button-primary button-large" />
			</p>
		</form>
	<?php
}


?>