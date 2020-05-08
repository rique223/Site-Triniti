<?php

	add_filter( 'contextual_help', 'redcake_remove_help_tabs', 999, 3 );
	function redcake_remove_help_tabs($old_help, $screen_id, $screen){
		if (stringEndsWith($_SERVER['SCRIPT_FILENAME'], "admin/index.php")) {
			$screen->remove_help_tabs();
			$screen->remove_help_tabs();
		}
		return $old_help;
	}


	function redcake_remove_screen_options_tab() {
		if (stringEndsWith($_SERVER['SCRIPT_FILENAME'], "admin/index.php")) {
			return false;
		}
		return true;
	}
	add_filter('screen_options_show_screen', 'redcake_remove_screen_options_tab');

	function redcake_remove_core_updates(){
		global $wp_version;
		return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
	}
	add_filter('pre_site_transient_update_core','redcake_remove_core_updates');
	add_filter('pre_site_transient_update_plugins','redcake_remove_core_updates');
	add_filter('pre_site_transient_update_themes','redcake_remove_core_updates');

	add_action( 'admin_init', 'redcake_wpse_38111' );
	function redcake_wpse_38111() {
	    remove_submenu_page( 'index.php', 'update-core.php' );
	}

	function stringEndsWith($haystack, $needle){
	    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
	}


	//COMO MODIFICAR O TEXTO DO FOOTER
	function redcake_remove_footer_admin () {
		echo '<a href="http://www.redcake.com.br/">RedCake Agência Digital</a> - Nosso trabalho é facilitar o seu.';
	}
	add_filter('admin_footer_text', 'redcake_remove_footer_admin');

?>