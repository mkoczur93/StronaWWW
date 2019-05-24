<?php
	    session_start();
		 $plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];


if(is_uploaded_file($plik_tmp)) {
     move_uploaded_file($plik_tmp, "img/$plik_nazwa");
    }
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
	
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}

		$target_file =  basename($_FILES["plik"]["name"]);	
	
		$sql = "INSERT INTO pliki (imie,email,telefon,plik,tekst) 
							VALUES ('".$_POST['imie']."','".$_POST['email']."','".$_POST['telefon']."','".$target_file."','".$_POST['wiadomosc']."')";

if (mysqli_query($polaczenie, $sql)) {
    echo "Record updated successfully";
	header("Location: index.php?ide3=n");
} else {
    echo "Error updating record: " . mysqli_error($polaczenie);
}

mysqli_close($polaczenie);	
			
			
		//echo $_POST['f'];	
		
			
			?>