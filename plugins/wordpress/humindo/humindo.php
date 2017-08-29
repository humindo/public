<?php
/*
Plugin Name: humindo
Plugin URI: https://wordpress.org/plugins/humindo/
Description: This plugin is used for easier integration of the humindo Live-Chat solution. The Live-Chat is described here: https://www.humindo.at/live-chat-beratung. The plugin injects the asynchronous loader script into the page which will generate the button (bottom right) for starting the livechat on the page.
Author: Richard Greslehner
Version: 1.0
Author URI: https://www.humindo.at
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function hdo_add_js() {
	?>
		<script type="text/javascript">
			(function() {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = '//www.humindo.at/loader.js';
				var x = document.getElementsByTagName('head')[0];
				x.appendChild(s);
			})();
		</script>
	<?php
}

add_action('wp_head', 'hdo_add_js');

?>
