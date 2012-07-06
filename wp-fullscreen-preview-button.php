<?php

// Add a preview button to the fullscreen editor toolbar.

function akv3_fullscreen_preview_button() {
?>
<script type="text/javascript">
;(function($) {
	$('#post-preview').clone().removeAttr('id').removeClass('preview')
		.prependTo('#wp-fullscreen-save');
}(jQuery));
</script>
<?php
}
add_action('admin_footer-post-new.php', 'akv3_fullscreen_preview_button');
add_action('admin_footer-post.php', 'akv3_fullscreen_preview_button');
