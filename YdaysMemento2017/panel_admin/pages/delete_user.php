<?php 

require_once("../../includes/init.php");

if (!empty($_GET)) {

	if ($_SESSION) {

		$get_user = $dbh->query('SELECT * FROM users WHERE id ='.$_SESSION['id']);
		$user = $get_user->fetch();	
		//$req = $dbh->query("select * FROM users WHERE id = '".$_SESSION["id"]."'");
		//$data = $req->fetch();

		if ($user['id'] and $user['level'] >= 1) {

			$id_user = $_GET["id"];

			$get_users = $dbh->exec('DELETE FROM users WHERE id ='.$id_user);

			header("Location: users.php");
		} else {
			//header("Location: users.php");
		}
	} else {
		echo $_SESSION['connected'];
		echo "test1";
		//header("Location: ../../index.php");
	}

} else {
	echo "test2";
	//header("Location: ../../index.php");
}
?>