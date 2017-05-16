<?php
/**
 * Plugin Name: Who Copied Me
 * Plugin URI: https://whocopied.me
 * Description: This plugin adds the javascript required from https://whocopied.me 
 * Version: 1.0.0
 * Author: Who Copied Me
 * Author URI: https://whocopied.me/page/about
 * License: GPL2
 */
function whocopiedme_javascript() {
  ?>
<script type="text/javascript">(function(){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src='//pxl.host/c.js';var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);})();</script>
<?php
}
add_action('wp_head', 'whocopiedme_javascript');
