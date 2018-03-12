<?php 
if (isset($_SESSION) && isset($_SESSION['connected']))  {
	$get_level = $dbh->prepare('SELECT level FROM users where id=:id');
	$get_level -> execute([':id'=>$_SESSION['id']]);
	$level = $get_level->fetch();
	if (($level[0]<1) || ($level[0] === "NULL")) {
		header('Location: ../../index.php');
	}
}else {
	header('Location: ../../index.php');
}
?>