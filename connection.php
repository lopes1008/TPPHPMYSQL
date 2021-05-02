<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>