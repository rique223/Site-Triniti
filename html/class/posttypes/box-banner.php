<?php 

add_action( 'add_meta_boxes', 'banners_add_meta_box' );
 
function banners_add_meta_box() {
    add_meta_box(
        'banners_metaboxid',
        'Url',
        'banners_inner_meta_box',
        'lista-banners'
    );
}
 
function banners_inner_meta_box( $banner ) {
?>

<p>
  <label for="url_banners">Url:</label>
  <br />
  <input style="width:100%;" type="text" name="url_banners" value="<?php echo get_post_meta( $banner->ID, '_url_banners', true ); ?>" >
</p>

<?php
}

/***************/

add_action( 'save_post', 'banners_save_post', 10, 2 );
 
function banners_save_post( $banners_id, $download ) {
    // Fazer a saneaÃ§Ã£o dos inputs e guardÃ¡-los
    update_post_meta( $banners_id, '_url_banners', strip_tags( $_POST['url_banners'] ) );

  return true;
}

?>