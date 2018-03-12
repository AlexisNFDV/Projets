<?php
require_once("includes/init.php");
if (!$_SESSION['connected']) {
	header('Location:login.php');
}
if (isset($_GET) && !empty($_GET['id'])) {
	$ref = $dbh->prepare('DELETE FROM memo WHERE id = :id AND id_user=:id_user');
	$ref->execute([':id'=>$_GET['id'],':id_user'=>$_SESSION['id']]);
	header("Location: posts.php?id=".$_SESSION['id']);
}else {
	header('Location:index.php');
}
?>
