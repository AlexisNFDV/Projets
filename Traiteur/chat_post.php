<?php

require_once("includes/init.php");

$test=$dbh->prepare('SELECT id FROM users WHERE username=:username');
$test->execute([':username' => $_POST['choose']]);
$test2=$test->fetchAll();

if($_GET['user1'] !== $_GET['user2']) {

// Insertion du message à l'aide d'une requête préparée
    $req = $dbh->prepare('INSERT INTO chat (pseudo, message, receive, send, offre, notif, is_read) VALUES(:pseudo, :message, :receive, :send, :offre, 0, 0)');
    $req->execute([':pseudo' => $_POST['pseudo'], ':message' => $_POST['message'], ':receive' => $_GET['user1'], ':send' => $_GET['user2'], ':offre' => $_GET['offre']]);

    $add = $dbh->prepare('UPDATE chat SET notif = notif + 1 WHERE receive = :receive AND send = :send AND offre = :offre AND is_read = 0');
    $add->execute([':receive' => $_GET['user1'], ':send' => $_GET['user2'], ':offre' => $_GET['offre']]);

}
elseif($_GET['user1'] == $_GET['user2']) {

// Insertion du message à l'aide d'une requête préparée
    $req3 = $dbh->prepare('INSERT INTO chat (pseudo, message, receive, send, offre, notif, is_read) VALUES(:pseudo, :message, :receive, :send, :offre, 0, 0)');
    $req3->execute([':pseudo' => $_POST['pseudo'], ':message' => $_POST['message'], ':receive' => $_GET['user1'], ':send' => $test2[0][0], ':offre' => $_GET['offre']]);

    $add2 = $dbh->prepare('UPDATE chat SET notif = notif + 1 WHERE receive = :receive AND send = :send AND offre = :offre AND is_read = 0');
    $add2->execute([':receive' => $_GET['user1'], ':send' => $test2[0][0], ':offre' => $_GET['offre']]);
}

//var_dump($test2);

// Redirection du visiteur vers la page du minichat
header("Location:chat.php?user1=" . $_GET['user1'] . "&user2=" . $_GET['user2'] . "&offre=" . $_GET['offre']);

?>