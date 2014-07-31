<?php 
require_once('utils.php'); 
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Interfaz #2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="interfaz_2.css">
</head>
<body>
	<div id="container">
	    <header class="horizontal"><h1 class="fortuna-res-title">The Facebook Horoscope</h1></header>
		<article class="horizontal fortuna-res-content">
		  <?php		  
		  // Pseudocódigo (aún no se usará datos de FB)
		  /*
			0. Objeto de fortuna (archivo data/textos.php)
				0.1 Sintaxis { "img" : "imagen_de_fortuna", "texto" : "Lorem ipsum" }

			1. El usuario se logueo con FB, se tienen los permisos básicos
				(Escribir la plantilla)
				1.1 Escribr el url de la imagen con la imagen de usuario
				1.2 Escribir el nombre de la persona
				1.3 Procedimiento: elegir cinco objetos de fortuna.
					1.3.1 Ciclo: Para cada uno de los elementos
						1.3.1.1 Escribir el objeto tomando el url de la imagen y el texto
		  */
		  ?>
		  <!-- Generar el 'me' -->
		  <section class="fortuna-res-content-me">
		    <img src="<?php echo getMyImage(); ?>" alt=""/>
		    <p><?php echo getMyText(); ?></p>
		  </section>
		  <section class="fortuna-res-content-others">
		  <?php generateFriends(); ?>
		  </section>
		</article>
		<footer class="horizontal fortuna-res-buttons">
			<button type="buttton" class="blue-button">Reiniciar</button>
			<button type="buttton" class="blue-button">Compartir</button>
			<button type="buttton" class="blue-button">Twittear</button>
		</footer>
	</div>	
</body>
</html>
