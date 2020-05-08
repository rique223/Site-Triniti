<?php 

add_action( 'add_meta_boxes', 'newsletter_add_meta_box' );
 
function newsletter_add_meta_box() {
    add_meta_box(
        'newsletter_metaboxid',
        'Informações do Contato',
        'newsletter_inner_meta_box',
        'lista-newsletter'
    );
}
 
function newsletter_inner_meta_box( $link ) {
?>

<p>
  <label for="email-newsletter">E-mail de contato:</label>
  <br />
  <input style="width:100%;" type="text" id="url" name="email-newsletter" value="<?php echo get_post_meta( $link->ID, '_email-newsletter', true ); ?>" >
</p>

<?php
}



add_filter( 'manage_edit-lista-newsletter_columns', 'newsletter_manage_edit_columns' );
function newsletter_manage_edit_columns( $columns ) {
 
  $lista_newsletter_columns = array(
    "cb" => $columns["cb"],
    "title" => $columns["title"],
    "email-newsletter" => 'E-mail',
    "date" => $columns["date"],
  );
  return $lista_newsletter_columns;
 
}


add_action( "manage_posts_custom_column", 'lista_newsletter_manage_columns', 10, 2);
function lista_newsletter_manage_columns( $column ) {
  global $post;
  switch ($column) {
    case "email-newsletter":
      echo get_post_meta( $post->ID, '_email-newsletter', true );
      break;
 
  }
}




?>