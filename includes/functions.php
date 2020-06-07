<?php

function quizbook_filtrar_preguntas($llave){
  return stripos( $llave, 'qb_');  
}
