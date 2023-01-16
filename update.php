<?php 
    $ID = $_GET["ID"];
    $user = $_POST["user"];
    $password = $_POST["password"];
	$Nom = $_POST["Nom"]; 
	$Prenom = $_POST["Prenom"];
	

  
	$con = mysqli_connect("localhost", "root", "", "univer_bba");


    
	$sql = "UPDATE fichiers_etudiants set user ='".$user."', password='".$password."', Nom ='".$Nom."',Prenom ='".$Prenom."'   WHERE ID = ". $ID; 


    mysqli_query($con, $sql);


    header("location: Etudiant.php");

?>