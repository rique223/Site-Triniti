<?php 
define("NAME_CUSTOM_POST_TYPE_PDF_1","produtos");
define("NAME_CUSTOM_POST_TYPE_PDF_TITLE_1","Ficha Técnica");

add_action("admin_init", "admin_init");

function admin_init(){
  add_meta_box("pdf-meta-".NAME_CUSTOM_POST_TYPE_PDF_1, NAME_CUSTOM_POST_TYPE_PDF_TITLE_1, "logo_meta", NAME_CUSTOM_POST_TYPE_PDF_1, "side", "low");
}

function logo_meta() {
  global $post;
  $custom = get_post_meta( $post->ID, 'pdf_file', true );
//  $custom = get_post_custom($post->ID);
  ?>

<?php
  $pdf_file = $custom;//[NAME_CUSTOM_POST_TYPE_PDF_1."_pdf_file"][0];
  echo '<input type="hidden" name="mytheme_meta_box_nonce2" value="', wp_create_nonce(basename(__FILE__)), '" />';
  ?>
  <p><label>Arquivo:</label><br />
  <input type="text" name="<?php echo NAME_CUSTOM_POST_TYPE_PDF_1; ?>_pdf_file" id="<?php echo NAME_CUSTOM_POST_TYPE_PDF_1; ?>_pdf_file" value="<?php echo $pdf_file; ?>" style="width:258px">
  <input type="button" name="pdf_button_<?php echo NAME_CUSTOM_POST_TYPE_PDF_1; ?>" id="pdf_button_<?php echo NAME_CUSTOM_POST_TYPE_PDF_1; ?>" value="Selecionar" class="button button-primary button-large"></p> 
<script type="text/javascript">
  
jQuery(document).ready(function() {

  jQuery('#pdf_button_<?php echo NAME_CUSTOM_POST_TYPE_PDF_1; ?>').click(function() {

   window.send_to_editor = function(html) {
       imgurl = jQuery(html).attr('src') || jQuery(html).find('img').attr('src') || jQuery(html).attr('href');
       jQuery('#<?php echo NAME_CUSTOM_POST_TYPE_PDF_1; ?>_pdf_file').val(imgurl);
       tb_remove();
   }

   tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
   return false;
  });

});

</script>

  <?php
}


function my_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_register_script('my-upload', get_bloginfo('template_url') . '/class/pdf/upload_pdf.js', array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');
} 
function my_admin_styles() {
wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');

    add_action('save_post', 'save_details');
    function save_details(){
      global $post;

      if( $post->post_type == NAME_CUSTOM_POST_TYPE_PDF_1 ) {
            update_post_meta($post->ID, "pdf_file", $_POST[NAME_CUSTOM_POST_TYPE_PDF_1."_pdf_file"]);
      }

    }





?>