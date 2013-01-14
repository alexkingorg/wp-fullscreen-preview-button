<?php

/*
Plugin Name: Fullscreen Preview Button
Description: Add a preview button to the fullscreen editor toolbar.
Version: 1.1
Author: Alex King
Author URI: http://alexking.org
License: GPL2
*/

function akv3_fullscreen_preview_button() {
?>
<script type="text/javascript">
;(function($) {
	var $preview = $('#post-preview');
	$preview.clone()
		.removeAttr('id').removeClass('preview').addClass('right')
		.css('margin-left', '5px')
		.click(function(e) {
			$preview.click();
			e.preventDefault();
		})
		.insertBefore('#wp-fullscreen-save input.button-primary');
}(jQuery));
</script>
<?php
}
add_action('admin_footer-post-new.php', 'akv3_fullscreen_preview_button');
add_action('admin_footer-post.php', 'akv3_fullscreen_preview_button');
