<?php
// Utils.php -- Funciones auxiliares

// Funciones para obtener información del usuario
function getMyImage( $myImage = 'img/me.png') {
  return utf8_encode("$myImage");
}

function getMyText( $myText = 'Mi nombre es Perico de los Palotes') {
  return utf8_encode("$myText");
}

?>