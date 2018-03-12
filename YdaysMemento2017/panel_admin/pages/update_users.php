<?php 

require_once("../../includes/init.php");
require_once("check.php");

if (!empty($_POST)) {
	echo "if1";
	if ($_SESSION) {
		$get_user = $dbh->query('SELECT * FROM users WHERE id ='.$_SESSION['id']);
		$con = $get_user->fetch();
		var_dump($con);

		if ($con['id'] and $con['level'] >= 1) {
			
			$get_user2 = $dbh->query('SELECT * FROM users WHERE username ='.$_SESSION['id_modif']);
			$user = $get_user2->fetch();

			if ($_POST['username'] != $user['username']) {
				$req = $dbh->prepare('UPDATE users SET username = :username WHERE id = :id');
				$req->execute([
					':username' => htmlspecialchars($_POST['username']),
					':id' => $_SESSION['id_modif']
				]);
			}

			if ($_POST['firstname'] != $user['firstname']) {
				$req = $dbh->prepare('UPDATE users SET firstname = :firstname WHERE id = :id');
				$req->execute([
					':firstname' => htmlspecialchars($_POST['firstname']),
					':id' => $_SESSION['id_modif']
				]);
			}

			if ($_POST['lastname'] != $user['lastname']) {
				$req = $dbh->prepare('UPDATE users SET lastname = :lastname WHERE id = :id');
				$req->execute([
					':lastname' => htmlspecialchars($_POST['lastname']),
					':id' => $_SESSION['id_modif']
				]);
			}

			if ($_POST['level'] != $user['level']) {
				$req = $dbh->prepare('UPDATE users SET level = :level WHERE id = :id');
				$req->execute([
					':level' => htmlspecialchars($_POST['level']),
					':id' => $_SESSION['id_modif']
				]);
			}

			header("Location: users.php");

		} else {
			header("Location: users.php");
		}
	} else {
		header("Location: ../../index.php");
	}
} else {
	header("Location: ../../index.php");
}
?>