<?php 

    $user = $_POST["user"];
    $password = $_POST["password"];
	$Nom = $_POST["Nom"]; 
	$Prenom = $_POST["Prenom"];
	
	
	
    $con = mysqli_connect("localhost", "root", "", "univer_bba");


    $sql = "INSERT INTO fichiers_etudiants (user, password,Nom,Prenom				
) VALUE ('".$user."', '".$password."','".$Nom."','".$Prenom."')";


    mysqli_query($con, $sql);


    header("location: Etudiant.php");

?>