<?php
/*
Plugin Name: Quizbook
Plugin URI:
Description: Plugin para añadir quizes o cuestionarios con WordPress
Version: 1.0
Author: Andrés Patiño
Author URI: mailto:andresfelipepatino5@gmail.com
License: GPL2
License URI: https://www.gnu.org/licences/gpl-2.0.html
Text Domain: quizbook
*/

/* Añade el postype de quizes */
require_once plugin_dir_path( __FILE__ ) . 'includes/postypes.php';

/* Regenera las reglas de las url al activar plugin */
register_activation_hook(__FILE__, 'quizbook_rewrite_flush');

/* Añade el Metaboxes a los quizes */
require_once plugin_dir_path( __FILE__ ) . 'includes/metaboxes.php';
