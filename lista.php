
<?php
    session_start();
if (isset($_GET['ide2']))
	{
	echo "<h1 style='background:grey'>Dokonano zakupu dziękujemy</h1>";
	}
	$cena=0;
		require_once "connect.php";
		?>
		<head>
		    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
			</head>
		
		<?php

		mysqli_report(MYSQLI_REPORT_STRICT);
		
	
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
				//Czy email już istnieje?




//////////////////////////
//////////////////////////

if(isset($_POST['k']))
{
unset($_SESSION['sklep'][$_POST['nazwa']]);
}

echo "<h3>Koszyk</h3>";
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
echo "<input type='submit' name='ii' value='kup'>";
echo "</form>";

//}
//echo sizeof($_SESSION['sklep']);
//print_r($_SESSION['sklep']);
}




if(isset($_POST['o']))
{
unset($_SESSION['sklep']);
$_SESSION['sklep'] = array();
//$_SESSION['dodaj'] = "plus";
header("location:lista.php");
}




if(isset($_POST['ii'])){
echo "<h1>Dziękujemy za transakcję</h1>	";
unset($_SESSION['sklep']);
$_SESSION['sklep'] = array(); 
header("location:kup.php?ide=".$cena."$");
}
//////////////////////////
//////////////////////////
$rezultat3 = $polaczenie->query("SELECT * FROM pochodzenie");
$rezultat2 = $polaczenie->query("SELECT * FROM kategorie");
echo "<form method='POST' action=''>";


echo "<select name='nazwa' autofocus>";
echo"<option value='brak' selected>brak</option>";
while ($row2=mysqli_fetch_row($rezultat2)) 
{

echo  "<option style='width:150px;'   value=".$row2[1]." >".$row2[1]."</option>";
}
echo "</select>";


echo "<select name='kraj' autofocus>";
echo"<option value='brak' selected>brak</option>";
while ($row3=mysqli_fetch_row($rezultat3)) 
{

echo  "<option style='width:150px;'   value=".$row3[1]." >".$row3[1]."</option>";
}
echo "</select>";





echo "<input type='submit' name='ogranicz' value='wybierz'>";
echo "</form>";




///////////////////////////////
///////////////////////////////







/////////////////////////////////
/////////////////////////////////



echo "<h1> Lista produktów </h1>";
if(isset($_POST['ogranicz'])){
echo "Kategoria: ";
echo $_POST['nazwa'];

echo ", pochodzenie: ";
echo $_POST['kraj'];
					$rezultat = $polaczenie->query("SELECT * 
					FROM produkty 
					INNER JOIN kategorie 
					ON produkty.id_kategorie = kategorie.id
					INNER JOIN pochodzenie 
					ON produkty.id_pochodzenie = pochodzenie.id					
					WHERE kategorie.kategoria = '".$_POST['nazwa']."' and pochodzenie.kraj = '".$_POST['kraj']."'");//$_SESSION['id']	

					if(($_POST['kraj']) == "brak"){
					$rezultat = $polaczenie->query("SELECT * 
					FROM produkty 
					INNER JOIN kategorie 
					ON produkty.id_kategorie = kategorie.id
					WHERE kategorie.kategoria = '".$_POST['nazwa']."'");
					}
	
					if(($_POST['nazwa']) == "brak"){
					$rezultat = $polaczenie->query("SELECT * 
					FROM produkty 
					INNER JOIN pochodzenie 
					ON produkty.id_pochodzenie = pochodzenie.id					
					WHERE pochodzenie.kraj = '".$_POST['kraj']."'");
					}

					if(($_POST['kraj']) == "brak" and ($_POST['nazwa']) == "brak"){
					$rezultat = $polaczenie->query("SELECT * FROM produkty");
					}





					
					}
else 
{
					$rezultat = $polaczenie->query("SELECT * FROM produkty");//$_SESSION['id']			
} 
  while ($row=mysqli_fetch_row($rezultat)) 
  
{

echo "<form method='POST' action='' style='border:solid grey'>";
echo " id produktu <input type='label' name ='a' value='".$row[0]."'>";
echo " nazwa <input type='label' name ='b' value='".$row[1]."'>";
echo " cena <input type='label' name ='c' value='".$row[2]."'>";
echo " opis <input type='label' name ='d' value='".$row[3]."'>";

echo "<input type='submit' name='dodaj' value= 'do koszyka'>";
echo "</form>";

}
echo "<a href='index.php'>Powrót do serwisu</a>";



?>