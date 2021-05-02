<?php
$code=$_GET['code'];
require_once("connection.php");
$ps=$pdo->prepare("SELECT * FROM etudiants WHERE CODE=?");
$params=array($code);
$ps->execute($params);
$etudiant=$ps->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ETUDIANT</title>
</head>
<body>
	<form method="POST" action="UpdateEtudiant.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Code:</td>
				<td><input type="hidden" name="code" value="<?php echo ($etudiant['CODE']) ?>"></td>
			</tr>
			<tr>
				<td>Nom:</td>
				<td><input type="text" name="nom" value="<?php echo ($etudiant['NOM']) ?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="<?php echo ($etudiant['EMAIL']) ?>"></td>
			</tr>
			<tr>
				<td>Photo:</td>
				<td><input type="file" src="images/<?php echo($etudiant['PHOTO']) ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Mettre a jour"></td>
			</tr>
		</table>
	</form>
	<hr>
	<a href="AfficherEtudiants.php">Afficher toutes les donnees enregistrees</a>
</body>
</html>