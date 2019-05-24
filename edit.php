<?php
	    session_start();
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
	
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}

			
	
		$sql = "UPDATE uzytkownicy SET user='".$_POST['b']."',pass='".$_POST['c']."',email='".$_POST['d']."'
		,dnipremium='".$_POST['e']."'
		,imie='".$_POST['f']."'
		,nazwisko='".$_POST['g']."'
		WHERE id=1";

if (mysqli_query($polaczenie, $sql)) {
    echo "Record updated successfully";
	header("Location: edycja.php?ide4=b");
} else {
    echo "Error updating record: " . mysqli_error($polaczenie);
}

mysqli_close($polaczenie);	
			
			
		//echo $_POST['f'];	
		
			
			?>