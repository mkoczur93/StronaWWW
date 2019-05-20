<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: zalogowany.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Portfolio</title>
	<meta name="description" content="Strona na temat tworzenia stron www">
	<meta name="keywords" content="zamów, stronę, tworzenie, www, programista, portfolio, php, javascript, html, css, WordPress, Joomla, Drupal">
	<meta name="author" content="Marcin">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css" type="text/css">
	<link rel="stylesheet" href="logowanie.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
	

<body>

<header class="sticky">
		
		<nav class="navbar navbar-dark bg-tlonavbar navbar-expand-lg">
		
			<a id="link0" class="navbar-brand" href="index.php"><i class="icon-picture"></i> <h1 class="logo">StronyWWW.pl</h1></a>
			
		</nav>
	<div id="container">
		<form action="zaloguj.php" method="post">
			
			<input type="text" placeholder="login" name="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" >
			
			<input type="password" placeholder="hasło" name="haslo" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" >
			
			<input type="submit" value="Zaloguj się">
			
		</form>
		
		<a class="zarejestruj" href=rejestracja.php>Nie masz konta ? Zarejestruj sie!</a>
		<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
	</div>
	</header>
	
	
</body>
</html>