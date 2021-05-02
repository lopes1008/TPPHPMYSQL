<?php
$code=$_GET['code'];
require_once("connection.php");
$ps=$pdo->prepare("DELETE FROM etudiants WHERE CODE=?");
header("location:AfficherEtudiants.php");
//require_once("AfficherEtudiants.php");
$params=array($code);
$ps->execute($params)
?>