<?php

/* Agrega styles al frontend */
function quizbook_frontend_styles(){
  wp_enqueue_style('quizbook_css', plugins_url('../assets/css/quizbook.css', __FILE__));
  wp_enqueue_script('quizbookjs', plugins_url('../assets/js/quizbook.js', __FILE__), array('jquery'), 1.0, true);
}
add_action('wp_enqueue_scripts', 'quizbook_frontend_styles');

/* Agrega styles al admin cuando se crea un post_type Quiz */
function quizbook_admin_styles($hook){
  global $post;
  if($hook == 'post-new.php' || $hook == 'post.php') {
    if($post->post_type == 'quizes'){
      wp_enqueue_style('quizbookcss', plugins_url('../assets/css/admin-quizbook.css', __FILE__));
    }
  }
}
add_action('admin_enqueue_scripts', 'quizbook_admin_styles');
