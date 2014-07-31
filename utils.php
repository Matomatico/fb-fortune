<?php
// Utils.php -- Funciones auxiliares

define('N_FRIENDS', 6);

// Funciones para obtener información del usuario
function getMyImage( $myImage = 'img/me.png') {
  return utf8_encode("$myImage");
}

function getMyText( $myText = 'Mi nombre es Perico de los Palotes') {
  return utf8_encode("$myText");
}

function generateFriends(  ) {
  include('data/textos.php');
  shuffle($textos);
  for( $i = 0 ; $i < N_FRIENDS ; $i = $i + 1 ) {
    $friend = $textos[$i];
	echo '<div class="fortuna-res-content-others-friends">';
	echo '<img src="img/fortune/' . $friend['img'] .'.jpg" alt=""/>';
	echo '<p>' . $friend['texto'] . '</p>';
	echo '</div>';
  }
}

?>
