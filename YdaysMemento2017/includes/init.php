<?php

//connexion a la bdd
$dsn = 'mysql:dbname=memento18_dev;host=mysql-memento18.alwaysdata.net';
$azerty = 'memento18';
$password = '#mem1718';

try {
	$dbh = new PDO($dsn, $azerty, $password);
} catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
}

date_default_timezone_set('Europe/Paris');

session_start();
?>