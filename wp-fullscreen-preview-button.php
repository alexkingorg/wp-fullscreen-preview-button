<?php

/*
Plugin Name: Fullscreen Preview Button
Description: Add a preview button to the fullscreen editor toolbar.
Version: 1.0
Author: Alex King
Author URI: http://alexking.org
License: GPL2
*/

function ak_fullscreen_preview_button() {
?>
<script type="text/javascript">
;(function($) {
	$('#post-preview').clone()
		.removeAttr('id').removeClass('preview')
		.prependTo('#wp-fullscreen-save');
}(jQuery));
</script>
<?php
}
add_action('admin_footer-post-new.php', 'ak_fullscreen_preview_button');
add_action('admin_footer-post.php', 'ak_fullscreen_preview_button');