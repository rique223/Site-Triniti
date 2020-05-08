<?php
	add_action('wp_dashboard_setup', 'display_info_redcake_services');
	
	function display_info_redcake_services() {
		global $wp_meta_boxes;
		wp_add_dashboard_widget('display_info_redcake_services_widget', 'Serviços - RedCake', 'display_redcake_services');
	}

	function display_redcake_services() {
			?>

			<style>
			
			.table-rss td a img{
				max-width: 100px;
				height: auto;
			}

			.table-rss td{
				padding: 5px;
			}

			
		</style>

		<h2 style="text-align: center; color:#c4262f;">Conheça todos os serviços que oferecemos a nossos clientes</h2>

		


		<?php

			$feed = file_get_contents('http://www.redcake.com.br/feed/?post_type=servicos');
			$rss = new SimpleXmlElement($feed);

			foreach($rss->channel->item as $entrada) {

				echo '<table class="table-rss">';
				echo '	<tr>';
				echo '		<td><a href="' . $entrada->link . '" title="' . $entrada->title . '" target="_blank" style="color:#560223"><img src="'.$entrada->enclosure['url'].'"></a></td>';
				echo '		<td><a href="' . $entrada->link . '" title="' . $entrada->title . '" target="_blank" style="color:#560223">' . $entrada->title . '</a></td>';
				echo '	</tr>';
				echo '</table>';


			}


		
		

		
		
		
		/*
		try {
			$url = "http://redcake.com.br/redsys/services/list-all";

			$defaults = array( 
				CURLOPT_POST => 1, 
				CURLOPT_HEADER => 0, 
				CURLOPT_URL => $url, 
				CURLOPT_FRESH_CONNECT => 1, 
				CURLOPT_RETURNTRANSFER => 1, 
				CURLOPT_FORBID_REUSE => 1, 
				CURLOPT_TIMEOUT => 30, 
				CURLOPT_POSTFIELDS => http_build_query(array()) 
			);
			
			$ch = curl_init($url); 
			curl_setopt_array($ch, $defaults); 
			if(!$result = curl_exec($ch)) {
				curl_close($ch);
				return array('success'=>false);
			}
			curl_close($ch);

			$servicos = json_decode($result);

			foreach ($servicos as $key => $servico) {
				echo "<div style='color:#560223'>";
				echo $servico->name."<br>";
				echo "</div>";
			}
		} catch (Exception $e) {
			echo "sss";
		}
		*/
	}
?>