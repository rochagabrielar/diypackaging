<?php session_start();?>

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
			<?php include("header.php")?>
			<!-- Fin del HEADER -->

			<!-- Inicio del NAVBAR -->
				<?php include("navbar.php")?>
			<!-- Fin del NAVBAR -->

			"Bienvenid@!"

			<h3> <?= $_SESSION["userLoged"] ? 'Hola ' . $_SESSION['userLoged']['nombre'] . '!' : 'Hola!' ?> </h3>
		 	<h3> <?= $_SESSION["userLoged"] ? 'Tu email es ' . $_SESSION['userLoged']['email'] : '' ?> </h3>
			<h3> <?= $_SESSION["userLoged"] ? 'Tu usuario es ' . $_SESSION['userLoged']['usuario'] : '' ?> </h3>
			<img src="<?= $_SESSION["userLoged"] ? "avatars/" . $_SESSION['userLoged']['avatar'] : '' ?>" alt="">


			<!-- Inicio FOOTER -->
			<?php include("footer.php") ?>
			<!-- Fin FOOTER -->
		</div>

	</body>
</html>
