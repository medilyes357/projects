<!DOCTYPE html>
<html>

<head>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>

	
	<title>Table Etudiants</title>
</head>

<body>

	
	
<FONT SIZE="4">
<h1>  Les Etudiants de 2eme Annee 2016/2017:</h1>
</FONT>
<h2><a href="ajouter.php"> Ajouter Etudiant</a></h2>


<table>
<tr>
<th>Id</th>
<th>Nom</th>
<th>Prenom</th>
<th>modifier</th>
<th>supprimer</th>
	
		</tr>
		<?php
		$con = mysqli_connect("localhost", "root", "", "univer_bba");

			if(!$con){
		echo "site non connecté";
		}
		$rt =mysqli_query($con, "select * from fichiers_etudiants");
		while($Rs=mysqli_fetch_assoc($rt))
		{   
	?>
		<tr>
<td><?php echo $Rs['ID'] ?></td>
<td> <?php echo $Rs['Nom']?></td>
<td> <?php echo $Rs['Prenom']?></td>


<td> <a href="<?php echo 'modifier.php?ID='.$Rs['ID']?>"><img src="image0022.png" width="25" height="27"></a></td>
<td> <a href="<?php echo 'supprimer.php?ID='.$Rs['ID']?>"><img src="image0011.png" width="25" height="27"></a></td>
<br>
<?php echo '</tr>' ?> 

		
</tr>
		
			<?php
	}
	?>
	
	</table>
	
	</div>
		
</body>

</html>