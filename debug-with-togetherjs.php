<?php
/*
* Plugin Name: Debug with TogetherJS
* Description: Add a #debug at the end of your URL to start TogetherJS
* Version: 0.2
* Author: Jonathan Schneider (@JonathanSchndr)
* Author URI: http://jonathanschndr.de
*/

function jschndr_debug_with_togetherjs_add_script() {
	wp_enqueue_script( 'jschndr-debug-with-togetherjs-togetherjs-script', 'https://togetherjs.com/togetherjs-min.js');
}
add_action( 'wp_enqueue_scripts', 'jschndr_debug_with_togetherjs_add_script' );

function jschndr_debug_with_togetherjs_script() {
?>
<script type="text/javascript">
  if(window.location.hash == "#debug") TogetherJS(this);
</script>
<?php
}
add_action('wp_footer', 'jschndr_debug_with_togetherjs_script');
