<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Palindromos</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>

		<div class="container">
			<header>
				<h1>Palindromo</h1>
				<span class="divider"></span>
				<p>Palabra o expresión que es igual si se lee de izquierda a derecha que de derecha a izquierda.</p>
			</header>
			<section>
				<form action="#" id="frm-word" method="post">
					<input type="text" name="word" id="word" placeholder="Teclea la cadena" required>
					<button id="btn-frm">Procesar palabra</button>
				</form>
			</section>
			<footer>
				<span>Andrés Venegas Ruiz</span>
				<p class="contact">
					<a href="tel:4424508025">(044) 442 450 8025</a>
					-
					<a href="mailto:venegasruizandres@hotmail.com">venegasruizandres@hotmail.com</a>
				</p>
			</footer>
		</div>

		<div id="status"></div>

		<div class="modal">
			<div class="content">
				<span class="close"><a href="#" id="btn-close">CERRAR</a></span>
				<h3>La siguientes palabras son palíndromos</h3>
				<span class="divider"></span>
				<ul></ul>
			</div>
		</div>
		<script src="js/spin.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>