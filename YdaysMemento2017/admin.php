<?php

$titre="Devento - Connexion"; 

require_once("includes/init.php");

$error=false;
$errorLog=false;

if (!empty($_POST['submit'])) {
	if (!empty(trim($_POST['username']))&& !empty(trim($_POST['password']))) {
		$req = $dbh->prepare('SELECT * FROM users WHERE username=:username');
		$req->execute([':username'=>htmlspecialchars($_POST['username'])]);
		$users=$req->fetch();
		// update last_connection
		$req2 = $dbh->prepare('UPDATE users SET last_connection = CURRENT_TIME WHERE id=:id');
		$req2-> execute([':id'=>$users['id']]);
	}else {
		$error=true;
	}
	// je récupere les infos utilisateurs
	if (isset($users) && count($users) > 0 ) {
		if (password_verify($_POST['password'], $users['password']) and $users['level'] >= 1) {
			$_SESSION['connected'] = true;
			$_SESSION['admin'] = true;
			$_SESSION['id'] = $users['id'];
			$_SESSION['username'] = $users['username'];
			header ('Location: /panel_admin/pages/index.php');
		}else {
			$errorLog=true;
		}
	}
}
include_once("includes/header.php");
//affichage erreur si champs vides
if ($error) {
	echo '<div class="alert alert-warning">
	<strong>Rappel!</strong> Tous les champs doivent être remplis.
	</div>' ;
} 
//affichage erreur si combinaison incorrecte
if ($errorLog) {
	
	echo '<div class="alert alert-danger">
	<strong>Attention!</strong> La combinaison Utilisateur/Password est incorrecte.
	</div>' ;
} 



?>

<div class="container form">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 form-custom">
			<h2 class="img-header">
				<img class="img-logo" src="assets/icons/logo_devento.png" />
				<div class="content">
					Administrateur
				</div>
			</h2>
			<form method="POST" action="">
				<div class="input-group">
					<i class="socicon-users custom-icon"></i>
					<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
				</div>
				<div class="input-group">
					<i class="socicon-padlock custom-icon"></i>
					<input type="password" class="form-control" name="password" placeholder="Mot de passe">
				</div>
				<div class="text-center submit-button">
					<input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="Se connecter">
				</div>
				<div class="suggestion">
					<a href="login.php">Mot de passe oublié ?</a>
					<p>Vous n'avez pas de compte ?<a href="signup.php"> S'inscrire</a></p>
				</div>
			</form>
		</div>
	</div>
</div>
<?php

include_once("includes/footer.php");
?>
