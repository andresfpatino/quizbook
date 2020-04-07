<?php

if(! defined('ABSPATH')) exit; // evita la lectura por url

function quizbook_agregar_metaboxes(){
  // Agrega el Metabox en el Post Type de Quizes
  // 7 parametros:
  // id para identificar el metabox
  // Titulo del Metabox
  // Callback con el Cntenido
  // Pantalla donde se mostrará o Post Type
  // contexto es donde se mostrará (normal, aside, advanced)
  // Prioridad en la que se mostrarán
  // Argumentos con callback
  add_meta_box('quizbook_meta_box', 'Respuestas', 'quizbook_metaboxes', 'quizes', 'normal', 'high', null );
}
add_action('add_meta_boxes', 'quizbook_agregar_metaboxes');
