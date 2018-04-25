<?php
/*
Plugin Name: Extensió de WP per twitter
Plugin URI: https://github.com/damoma1718daw2/pluginwp_damoma
Description: Un extensió que permet accedir a twitter des de WordPress
Version: 0.1
Author: David Montilla Margalet
Author URI: https://github.com/damoma1718daw2?tab=repositories
License: GNU GPLv3
 
 */
 
function funcio_piulades($atr,$text) {
	return '<a href=”http://twitter.com/'.$atr['usuari'].'”>'.$text.
	'</a>';
	}
 
 
 add_shortcode('piulades','funcio_piulades');
 ?>
