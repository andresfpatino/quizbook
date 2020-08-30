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

/* Añade Roles a Quizes */
require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';
register_activation_hook(__FILE__, 'quizbook_crear_role'); // Añadir role al activar el plugin
register_deactivation_hook(__FILE__, 'quizbook_remover_role'); // Eliminar role al desactivar el plugin

/* Añade Capabilities a Quizes */
register_activation_hook(__FILE__, 'quizbook_agregar_capabilities');  // añade capabilities al activar
register_deactivation_hook(__FILE__, 'quizbook_remover_capabilities'); // remueve capabilities al desactivar


/* Añade un shortcode */
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcode.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/functions.php';

/* Estilos */
require_once plugin_dir_path( __FILE__ ) . 'includes/scripts.php';

/* Resultados del examen */
require_once plugin_dir_path( __FILE__ ) . 'includes/resultados.php';