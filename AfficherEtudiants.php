<?php
require_once("connection.php");
$reponse = $pdo->query('SELECT * FROM etudiants');
?>
<!DOCTYPE html>
<html>

<body>
	<table border="1" width="50%" eight="50%">
		<tr>
			<th>Code</th>
			<th>Nom</th>
			<th>Email</th>
			<th>Photo</th>
		</tr>
		<?php while ($donnees = $reponse->fetch()){?>
		<tr>
			<td><?php echo $donnees['CODE']?></td>
			<td><?php echo $donnees['NOM']?></td>
			<td><?php echo $donnees['EMAIL']?></td>
			<td><img src="images/<?php echo $donnees['PHOTO']?>" width="100"></td> 
			<td><a href="supprimer.php?code=<?php echo($donnees['CODE'])?>">Supprimer</a></td>
			<td><a href="editerEtudiant.php?code=<?php echo($donnees['CODE'])?>">Editer</a></td>
		</tr>
	<?php } ?>
	</table>
	<hr>
	<hr>
	<hr>
	<hr>
	<hr>
	<hr>
	<hr>
	<hr>
	<hr>
	<a href="saisirEtudiant.html">Retour pour saisir un nouveau etudiant</a>
</body>
</html>