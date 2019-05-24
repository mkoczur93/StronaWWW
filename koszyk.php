<?php


	    session_start();
		?>
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
	
	
</head>
<?php
			$cena=0;
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
	
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
if(isset($_POST['k']))
{
unset($_SESSION['sklep'][$_POST['nazwa']]);
}

echo "<h1>Koszyk</h1>";
if((!isset($_SESSION['sklep'])) or (isset($_SESSION['dodaj']))){
echo "pusty";
unset($_SESSION['dodaj']);
}
else
{

if(isset($_POST['dodaj']))
{
 
echo "dodano do koszyka<br>";

array_push($_SESSION['sklep'],$_POST['a']); 
}//unset($_SESSION['sklep']);

//echo $_POST["a"];
//echo "<fotm action="" method='POST'";

$n = sizeof($_SESSION['sklep']);
echo "<form method='POST' action='' style='width:200px;border:solid grey'>";
for($i=0;$i<$n;$i++)
{
if(!$_SESSION['sklep'][$i] == ""){

echo $_SESSION['sklep'][$i];
echo ".      ";



					$rezultat4 = $polaczenie->query("SELECT * FROM produkty WHERE id='".$_SESSION['sklep'][$i]."'");//$_SESSION['id']			
 
  while ($row4=mysqli_fetch_row($rezultat4)) 
  
{
echo $row4[1];
echo "    ";
echo $row4[2];
echo "zł.";
$cena = $cena + $row4[2];
}


echo "<input type = 'hidden' name = 'nazwa' value='".$i."' style='width:100px'>";
echo "<input type = 'submit' name='k' value ='usuń'><br>";
}
}
echo "Cena ogólna:'".$cena."'";
echo "<input type='submit' name='o' value='usuń całe zamówienie'>";
echo "<input type='submit' name='i' value='kup'>";
echo "</form>";

//}
//echo sizeof($_SESSION['sklep']);
//print_r($_SESSION['sklep']);
}
echo "<br><a href='index.php'>powrot do serwisu";



if(isset($_POST['o']))
{
unset($_SESSION['sklep']);
$_SESSION['sklep'] = array();
//$_SESSION['dodaj'] = "plus";
header("location:koszyk.php");
}




?>