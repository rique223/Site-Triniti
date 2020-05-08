<?php

define('WYSIWYG_POST_TYPE_1', 'lista-produtos');
define('WYSIWYG_META_BOX_ID_1', 'lista-produtos-meta-1');
define('WYSIWYG_EDITOR_ID_1', 'downloads'); //Important for CSS that this is different
define('WYSIWYG_META_KEY_1', 'extra-content');

add_action('admin_init', 'wysiwyg_register_meta_box');
function wysiwyg_register_meta_box(){
        add_meta_box(WYSIWYG_META_BOX_ID_1, __('Tour', 'wysiwyg'), 'wysiwyg_render_meta_box', WYSIWYG_POST_TYPE_1);
}

function wysiwyg_render_meta_box(){

        global $post;

        $meta_box_id = WYSIWYG_META_BOX_ID_1;
        $editor_id = WYSIWYG_EDITOR_ID_1;

        //Add CSS & jQuery goodness to make this work like the original WYSIWYG
        echo "
                <style type='text/css'>
                        #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
                        #$editor_id{width:100%;}
                        #$meta_box_id #editorcontainer{background:#fff !important;}
                        #$meta_box_id #$editor_id_fullscreen{display:none;}
                </style>

                <script type='text/javascript'>
                        jQuery(function($){
                                $('#$meta_box_id #editor-toolbar > a').click(function(){
                                        $('#$meta_box_id #editor-toolbar > a').removeClass('active');
                                        $(this).addClass('active');
                                });

                                if($('#$meta_box_id #edButtonPreview').hasClass('active')){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                }

                                $('#$meta_box_id #edButtonPreview').click(function(){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                });

                                $('#$meta_box_id #edButtonHTML').click(function(){
                                        $('#$meta_box_id #ed_toolbar').show();
                                });

								/*$('#wp-$editor_id-media-buttons').remove();*/

				//Tell the uploader to insert content into the correct WYSIWYG editor
				$('#media-buttons a').bind('click', function(){
					var customEditor = $(this).parents('#$meta_box_id');
					if(customEditor.length > 0){
						edCanvas = document.getElementById('$editor_id');
					}
					else{
						edCanvas = document.getElementById('content');
					}
				});
                        });
                </script>
        ";

        //Create The Editor
        $content = get_post_meta($post->ID, WYSIWYG_META_KEY_1, true);
        the_editor($content, $editor_id);

        //Clear The Room!
        echo "<div style='clear:both; display:block;'></div>";
}

add_action('save_post', 'wysiwyg_save_meta');
function wysiwyg_save_meta(){

        $editor_id = WYSIWYG_EDITOR_ID_1;
        $meta_key = WYSIWYG_META_KEY_1;

        if(isset($_REQUEST[$editor_id]))
                update_post_meta($_REQUEST['post_ID'], WYSIWYG_META_KEY_1, $_REQUEST[$editor_id]);

}

?>