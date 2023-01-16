<?php

		$ID = $_GET['ID'];
	
		$con = mysqli_connect("localhost", "root", "", "univer_bba");
		$sql = "DELETE FROM fichiers_etudiants WHERE ID = ". $ID;
	
	
			mysqli_query($con, $sql);
			header("location: Etudiant.php");



?>