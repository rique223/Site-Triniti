<?php
	add_action('wp_dashboard_setup', 'display_info_redcake_feeds');
	
	function display_info_redcake_feeds() {
		global $wp_meta_boxes;
		wp_add_dashboard_widget('display_info_redcake_feeds_widget', 'Novidades no Blog RedCake', 'display_redcake_feeds');
	}

	function display_redcake_feeds() {

		?>

			<style>
			
			.lnk-rss{
				color: #c4262f !important;
			}

			
		</style>


		<?php



		$feed = file_get_contents('http://www.redcake.com.br/feed/');
		$rss = new SimpleXmlElement($feed);

		foreach($rss->channel->item as $entrada) {
			echo '<p ><a class="lnk-rss" href="' . $entrada->link . '" title="' . $entrada->title . '" target="_blank" style="color:#560223">' . $entrada->title . '</a></p>';
		}
	}
?>