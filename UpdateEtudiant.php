<?php
$code=$_POST["code"];
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];
require_once("connection.php");

if ($nomPhoto=="") {
	$ps=$pdo->prepare("UPDATE etudiants SET NOM=?, EMAI=? WHERE CODE=?");
	$params=array($nom, $email, $code);
	$ps->execute($params);
}else{
	$fichierTempo=$_FILES['photo']['tmp_name'];
 	move_uploaded_file($fichierTempo, './images/' .$nomPhoto);
	$ps=$pdo->prepare("UPDATE etudiants SET NOM=?, EMAI=?, PHOTO=? WHERE CODE=?");
	$params=array($nom, $email, $nomPhoto, $code);
	$ps->execute($params);
}
header("location:AfficherEtudiants.php")
?>