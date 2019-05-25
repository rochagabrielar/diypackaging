<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous">
		<link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
		crossorigin="anonymous">

		<title>Perfil</title>
	</head>
	<body>

		<div class="container">
			<!-- Inicio del HEADER (contiene solo logo y telefonos) -->
			<?php include("header.html")?>
			<!-- Fin del HEADER -->

			<!-- Inicio del NAVBAR -->
				<?php include("navbar.html")?>
			<!-- Fin del NAVBAR -->

			"Bienvenid@!"

			<h3> <?= $_SESSION["user"] ? 'Hola ' . $_SESSION['user']['nombre'] . '!' : 'Hola!' ?> </h3>
		 	<h3> <?= $_SESSION["user"] ? 'Tu email es ' . $_SESSION['user']['email'] : '' ?> </h3>
			<h3> <?= $_SESSION["user"] ? 'Tu usuario es ' . $_SESSION['user']['usuario'] : '' ?> </h3>
			<img src="<?= $_SESSION["user"] ? "avatars/" . $_SESSION['user']['avatar'] : '' ?>" alt="">


			<!-- Inicio FOOTER -->
			<?php include("footer.html") ?>
			<!-- Fin FOOTER -->
		</div>

	</body>
</html>
