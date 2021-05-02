<?php
require_once("connection.php");
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name, "./images/$nomPhoto");

$req = "INSERT INTO etudiants (NOM, EMAIL, PHOTO) VALUES ('$nom','$email','$nomPhoto')";
$pdo->prepare($req)->execute([$NOM, $EMAIL, $PHOTO]);
?>
<html>
<body>
		<table border="1" width="50%">
			<tr>
				<td>Nom:</td>
				<td><?php echo ($nom) ?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?php echo ($email) ?></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><img src="images/<?php echo ($nomPhoto) ?>" width="100"></td>
			</tr>
		</table>
		<hr>
		<a href="AfficherEtudiants.php">Afficher toutes les données</a>
</body>
</html>