<?php

session_start();
echo "<h1>Dziękujemy za zakup</h1>";
echo "<a href='index.php'>Powrót do serwisu</a>";
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
	
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}

	
	
		$sql = "INSERT INTO pliki (id_klienta,cena) 
							VALUES ('".$_SESSION['id']."','".$_GET['ide']."')";

if (mysqli_query($polaczenie, $sql)) {
    echo "Record updated successfully";
	header("Location: lista.php?ide2=m");
} else {
    echo "Error updating record: " . mysqli_error($polaczenie);
}

mysqli_close($polaczenie);	
			
			
		//echo $_POST['f'];	
		
			
			?>