<?php 

add_action( 'add_meta_boxes', 'location_add_meta_box' );
 
function location_add_meta_box() {
    add_meta_box(
        'location_metaboxid',
        'Link off Booking',
        'location_inner_meta_box',
        'our-locations',
        'side'
    );
}
 
function location_inner_meta_box( $location ) {
?>


<p>
  <label for="link_location">link:</label>
  <br />
  <input type="text" style="width: 100%;" name="link_location" class="form-campo" value="<?php echo get_post_meta( $location->ID, '_link_location', true ); ?>">
</p>

<?php
}

/***************/

add_action( 'save_post', 'location_save_post', 10, 2 );
 
function location_save_post( $location_id, $download ) {
    // Fazer a saneaÃ§Ã£o dos inputs e guardÃ¡-los
    update_post_meta( $location_id, '_link_location', strip_tags( $_POST['link_location'] ) );

   return true;
}






?>