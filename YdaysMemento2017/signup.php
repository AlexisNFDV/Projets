<?php


$titre="Devento - Inscription"; 

require_once("includes/init.php");


//déclaration de variables

$errorMailExists =false;

$error=false;

if (!empty($_POST['submit'])) {
	if (!empty(trim($_POST['firstname'])) && !empty(trim($_POST['lastname'])) && !empty(trim($_POST['username'])) && !empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){

		$verif_mail =$dbh->prepare ('SELECT email FROM users WHERE  email = :email');
		$verif_mail -> execute([':email' => htmlspecialchars($_POST['email'])]);
		$verif= $verif_mail->fetch();

		if (empty($verif)) { 
			$req = $dbh->prepare('INSERT INTO users (firstname,lastname,username,email,password,profile_picture,creation_date) VALUES(:firstname,:lastname,:username,:email,:password,:profile_picture,Now())');
			$req->execute([
				':firstname' => htmlspecialchars($_POST['firstname']),
				':lastname' => htmlspecialchars($_POST['lastname']),
				':username' => htmlspecialchars($_POST['username']),
				':email' => htmlspecialchars($_POST['email']),
				':password' => htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT,['cost'=>12])),
				':profile_picture' => "profile_picture/default-avatar.png"
			]);

// email sending when sign up
			$to = htmlspecialchars($_POST['email']);

			$subject = 'Devento - Confirmation d\'inscription';

			$headers = "From: devento-team@contact.com \r\n";
			$headers .= "Reply-To: devento-team@contact.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$message ='<html><body>';
			$message .='<img src="http://memento18.alwaysdata.net/assets/icons/logo_devento.png" width="200px" alt="Confirmation" />';
			$message .="<p> Bonjour"." ".htmlspecialchars($_POST['firstname']).",</p> </br> <p>Heureux de vous compter parmi nos membres. Pour commencer, cliquer sur le bouton pour vous connecter</p>";
			$message .="<a href=\"http://memento18.alwaysdata.net/login.php\">Connexion</a>";
			$message .='</body></html>';
			mail($to, $subject, $message, $headers);
			header('location:login.php');

		}
		else {
			$errorMailExists=true;
		}

	}else {
		$error=true;
	}
} 

include_once("includes/header.php");
//affichage erreur si champs vides
if ($error) {
	echo'<div class="alert alert-warning">
	<strong>Attention! </strong> Tous les champs doivent être remplis.
	</div>';
}

if ($errorMailExists) {
	echo'<div class="alert alert-danger">
	<strong>Attention! </strong> Cette adresse mail existe déjà.
	</div>';
}

?>

<div class="container form">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 form-custom">
			<h2 class="img-header">
				<img class="img-logo" src="assets/icons/logo_devento.png" />
				<div class="content">
					Inscription
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
					<i class="socicon-users custom-icon"></i>
					<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
				</div>
				<div class="input-group">
					<i class="socicon-envelope custom-icon"></i>
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>

				<div class="input-group">
					<i class="socicon-padlock custom-icon"></i>
					<input type="password" class="form-control" name="password" placeholder="Mot de passe">
				</div>
				<small class="message-user">
					En cliquant sur S'inscrire, vous acceptez les  <a href="">Conditions d'utilisation</a> et <a href="">la Politique de confidentialité</a> de Devento
				</small>
				<div class="text-center submit-button">
					<input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="S'inscrire">
				</div>
				<div class="suggestion">
					Vous avez déjà un compte ? <a href="login.php">Connexion</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php

include_once("includes/footer.php");
?>
