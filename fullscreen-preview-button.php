<?php

/*
Plugin Name: Distraction Free Preview Button
Description: Add a preview button to the distraction free writing environment.
Version: 2.0
Author: Alex King
Author URI: http://alexking.org
License: GPL2
*/

function akv3_fullscreen_preview_button() {
?>
<script type="text/javascript">
;(function($) {
	var $buttons = $('#wp-content-media-buttons');

	// add a preview button if one doesn't exist
	$(document).on('dfw-on', function() {
		var $exists = $buttons.find('#ak-fsp-button');
		if ($exists.length == 0) {
			$buttons.append('<a href="#" id="ak-fsp-button" class="button"><?php _e('Preview'); ?></a>');
		}
	});

	// when our preview button is clicked, execute the standard preview function
	$(document).on('click', '#ak-fsp-button', function(e) {
		e.preventDefault();
		$('#post-preview').click();
		$(this).blur();
	});

	// remove the preview button when exiting DFW
	$(document).on('dfw-off', function() {
		$buttons.find('#ak-fsp-button').remove();
	});
}(jQuery));
</script>
<?php
}
add_action('admin_footer-post-new.php', 'akv3_fullscreen_preview_button');
add_action('admin_footer-post.php', 'akv3_fullscreen_preview_button');
