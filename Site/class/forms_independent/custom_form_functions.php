<?php


function the_data_extra($field){
	$resultExtra = get_data_extra($field);
	echo $resultExtra;
}

function get_data_extra($field){
	global $wpdb;
	$table_name = $wpdb->prefix . "dados_extras";
	$result = $wpdb->get_results("SELECT * FROM $table_name WHERE custom_field = '$field'");
	return $result[0]->value_field;
}

?>