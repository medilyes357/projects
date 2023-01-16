
<html>
<head>
<title>Modifier un Etudiant </title>
</head>
 
<body>
<h3>Modifier un Etudiant :</h3>

        
 <?php 
        
$ID = $_GET["ID"];
 $con = mysqli_connect("localhost", "root", "", "univer_bba");
 $sql = "SELECT * FROM fichiers_etudiants WHERE ID = " . $ID;
 $result = mysqli_query($con, $sql);
if($Rs = mysqli_fetch_assoc($result)){            
?>
        
        
<form method ="POST" action="update.php?ID=<?php echo $Rs['ID'];?>">
<table>
			
<tr>
<td>Nom</td>
<td><input type="text" name="Nom" maxlength="30" value="<?php echo $Rs['Nom'];?>">			
</td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="Prenom" maxlength="30" value="<?php echo $Rs['Prenom'];?>">
</td>
</tr>
 


<tr>
<td colspan="2" align="center">
<input type ="submit" value="Modifier">

</td>
</tr>
</table>       
</form>
        
        
        <?php 
            }        
        
        ?>
    
    </body>
</html>