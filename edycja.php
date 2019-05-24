
<?php
	    session_start();
		require_once "connect.php";
if (isset($_GET['ide4']))
	{
	echo "<h1 style='background:grey'>Dokonano edycji danych</h1>";
	}
?>
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
	<link rel="stylesheet" href="main.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
	
</head><?php
		mysqli_report(MYSQLI_REPORT_STRICT);
		
	
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT * FROM uzytkownicy WHERE id='".$_SESSION['id']."'");//$_SESSION['id']
  while ($row=mysqli_fetch_row($rezultat))
  
{
echo "<h1>Edycja danych użytkownika</h1>";
echo "<form method='POST' action='edit.php'>";
echo "id<br><input type='text' name ='a' value='".$row[0]."'><br>";
echo "login<br><input type='text' name ='b' value='".$row[1]."'><br>";
echo "hasło<br><input type='text' name ='c' value='".$row[2]."'><br>";
echo "email<br><input type='text' name ='d' value='".$row[3]."'><br>";
echo "dni premium<br><input type='text' name ='e' value='".$row[4]."'><br>";
echo "imie<br><input type='text' name ='f' value='".$row[5]."'><br>";
echo "nazwisko<br><input type='text' name ='g' value='".$row[6]."'><br>";
echo "<input style='width:200px !important;float:left !	important' type=submit name='zmien'>";
echo "</form>";
echo "<a href='index.php' style='width:200px !important;float:left !important'>Powrót do serwisu</a>";
}


//$_SESSION['cart']=array(); // Declaring session array
//array_push($_SESSION['cart'],'apple','mango','banana'); // Items added to cart
//echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." < a href=cart-remove-all.php>Remove all< /a>< br>";
?>