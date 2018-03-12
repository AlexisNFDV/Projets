<?php

$titre = "Devento - Mon compte";

require_once("includes/init.php");

if (!$_SESSION['connected']) {

    header('Location:login.php');
}

$get_user = $dbh->prepare('SELECT * FROM users WHERE id = :id ');
$get_user->execute(
    array(
        'id' => $_SESSION['id']
    )
);

$user = $get_user->fetch();


$errorOldPass =false;
$error=false;
$errorConfirmPass=false;

if (!empty($_POST['submit'])) {
    if (!empty(trim($_POST['password'])) && !empty(trim($_POST['confirm_password'])) && !empty(trim($_POST['old_password']))){
        if (password_verify(htmlspecialchars($_POST['old_password']),$user['password']) && htmlspecialchars($_POST['old_password'])!=htmlspecialchars($_POST['password'])) {
            if (htmlspecialchars($_POST['password'])==htmlspecialchars($_POST['confirm_password'])) {

              $req = $dbh->prepare('UPDATE users SET password = :password WHERE id = :id');
              $req->execute([
                ':password' => htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT,['cost'=>12])) ,
                ':id' => $_SESSION['id']
            ]);

              header('Location:/profile.php?id='.$_SESSION['id']);
          }else {
            $errorConfirmPass=true;
        }
    }else {
        $errorOldPass =true;
    }
}else {
    $error=true;
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
if ($errorOldPass) {

    echo '<div class="alert alert-danger">
    <strong>Attention!</strong> L\'ancien mot de passe ne correspond pas.
    </div>' ;
} 

if ($errorConfirmPass) {

    echo '<div class="alert alert-danger">
    <strong>Attention!</strong> Les deux mots de passe ne correspondent pas.
    </div>' ;
} 

?>



<div class="container form">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 form-custom">
            <h2 class="img-header">
                <img class="img-logo" src="assets/icons/logo_devento.png" />
                <div class="content">
                    Mon compte
                </div>
            </h2>
            <form class="form" method="POST" action="">
                <div class="subhead-custom">
                    <h2 class="Subhead-heading">Changer mon mot de passe</h2>
                </div>
                <div class="input-group">
                    <i class="socicon-padlock custom-icon"></i>
                    <input type="password" class="form-control" name="old_password" placeholder="Ancien mot de passe">
                </div>

                <div class="input-group">
                    <i class="socicon-padlock custom-icon"></i>
                    <input type="password" class="form-control" name="password" placeholder="Nouveau mot de passe">
                </div>
                <div class="input-group">
                   <i class="socicon-check2 custom-icon"></i>
                   <input type="password" class="form-control" name="confirm_password" placeholder="Confirmation">
               </div>
               <div class="text-center submit-button">
                <input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="Modifier">
            </div>
        </form>
    </div>
</div>
</div>


<?php
require_once("includes/footer.php");




?>
