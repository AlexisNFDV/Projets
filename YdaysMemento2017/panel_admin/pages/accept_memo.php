<?php 

require_once("../../includes/init.php");

if (!empty($_GET)) {

	if ($_SESSION) {

		$get_user = $dbh->query('SELECT * FROM users WHERE id ='.$_SESSION['id']);
		$user = $get_user->fetch();

		if ($user['id'] and $user['level'] >= 1) {

			$validate_memo = $dbh->exec('UPDATE memo SET is_validate = 1 WHERE id = '.$_GET['id']);

			header("Location: memo.php");
		} else {
			header("Location: memo.php");
		}
	} else {
		echo $_SESSION['connected'];
		echo "test1";
		header("Location: ../../index.php");
	}

} else {
	echo "test2";
	header("Location: ../../index.php");
}
?>