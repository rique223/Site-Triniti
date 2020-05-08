jQuery(document).ready(function() {

	jQuery('#pdf_button2').click(function() {

	 window.send_to_editor = function(html) {
	     imgurl = jQuery(html).attr('src') || jQuery(html).find('img').attr('src') || jQuery(html).attr('href');
	     jQuery('#pdf_file').val(imgurl);
	     tb_remove();
	 }

	 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	 return false;
	});

});