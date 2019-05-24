<h1> Lista produktów </h1>
<?php
    session_start();
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
	
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT * FROM uzytkownicy ");//$_SESSION['id']
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
echo "<input type=submit name='zmien'>";
echo "<input type=submit name='dodaj' value dodaj do koszyka>";
echo "</form>";
echo "<a href='index.php'>Powrót do serwisu</a>";
}
?>