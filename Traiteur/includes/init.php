<?php

//connexion a la bdd
$dsn = 'mysql:dbname=traiteur;host=localhost';
$user = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo 'Connexion �chou�e : ' . $e->getMessage();
}

date_default_timezone_set('Europe/Paris');

session_start();
?>