<?php

$titre = "CaD - Mon profil";

require_once("includes/init.php");

//récupération des info de l'user
$get_user = $dbh->prepare('SELECT * FROM users WHERE id = :id ');
$get_user->execute(
    array(
        'id' => $_SESSION['id']
    )
);

$user = $get_user->fetch();

require_once("includes/header.php");

?>
    <form method="post" enctype="multipart/form-data" action="save_change.php">
        <div class="container pgprofile">
            <div class="row">
                <div class="col-lg-3 info-user">
                    <div class="text-center">
                        <img src="<?php echo $user['profile_picture']; ?>" class="avatar text-center img-circle">
                        <input type="file" name="file_img" id="file_img" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="">
                        <label for="file_img"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>Uploadez une image</span></label>
                        <div class="form-group">
                            <label>Nom d'utilisateur</label>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <input type="text" name="username" class="form-control" value="<?php echo $user[3];?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-left">Date de naissance</label>
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <input type="date" name="birth" class="form-control" value="<?php echo $user[5];?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Sauvegarder</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-lg-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">En quelques mots...</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Biographie</label>
                                <textarea class="form-control bio" rows="8" name="bio"><?php echo $user['bio'];?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php
require_once("includes/footer.php");




?>