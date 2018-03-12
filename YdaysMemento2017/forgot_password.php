<?php


$titre="Devento - Mot de passe oublié"; 

require_once("includes/init.php");

$errorMailNotExists =false;

$error=false;

if (!empty($_POST['submit'])) {
	if (!empty(trim($_POST['firstname'])) && !empty(trim($_POST['lastname'])) && !empty(trim($_POST['email']))){

		$verif_mail =$dbh->prepare ('SELECT firstname,lastname,email FROM users WHERE firstname=:firstname AND lastname=:lastname AND email = :email');
		$verif_mail -> execute([
			':firstname' => htmlspecialchars($_POST['firstname']),
			':lastname' => htmlspecialchars($_POST['lastname']),
			':email' => htmlspecialchars($_POST['email'])
		]);
		$verif= $verif_mail->fetch();
		if (!empty($verif)) { 
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
			$length = 15;
			for ($i = 0; $i < $length; $i++) {
				$rnd_password .= $chars{random_int(0, (strlen($chars)-1))};
			}
			
			$req = $dbh->prepare('UPDATE users SET password = :password WHERE email = :email');
			$req->execute([
				':password' => htmlspecialchars(password_hash($rnd_password,PASSWORD_DEFAULT,['cost'=>12])),
				':email' => htmlspecialchars($_POST['email'])
			]);


			$to = htmlspecialchars($_POST['email']);
			$subject = 'Devento - Réinitialisation mot de passe';
			$headers = "From: devento-team@contact.com \r\n";
			$message = "Une demande de réinitialisation de mot de passe a été transmise pour votre compte.\r\nLe mot de passe suivant a été généré : $rnd_password\r\nVous pourrez le modifier par la suite sur votre compte. Pour vous connecter cliquez sur le lien suivant: https://memento18.alwaysdata.net/login";
			mail($to, $subject, $message, $headers);
		}
		else {
			$errorMailNotExists=true;
		}

	}else {
		$error=true;
	}
} 
//affichage erreur si champs vides
if ($error) {
	echo'<div class="alert alert-warning">
	<strong>Attention! </strong> Tous les champs doivent être remplis.
	</div>';
}

if ($errorMailNotExists) {
	echo'<div class="alert alert-danger">
	<strong>Attention! </strong> Cet utilisateur n\'existe pas.
	</div>';
}

include_once("includes/header.php");
?>

<div class="container form">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 form-custom">
			<h2 class="img-header">
				<img class="img-logo" src="assets/icons/logo_devento.png" />
				<div class="content">
					Mot de passe oublié
				</div>
			</h2>
			<form class="form" method="POST" action="">
				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<i class="socicon-users custom-icon"></i>
							<input type="text" class="form-control" name="firstname" placeholder="Nom">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="input-group">
							<i class="socicon-users custom-icon"></i>
							<input type="text" class="form-control" name="lastname" placeholder="Prénom">
						</div>
					</div>
				</div>
				<div class="input-group">
					<i class="socicon-envelope custom-icon"></i>
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="text-center submit-button">
					<input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="Réinitialiser">
				</div>
			</form>
		</div>
	</div>
</div>

<?php

include_once("includes/footer.php");
?>

