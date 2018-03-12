<?php

$titre="Devento - Modifier un post";

require_once("includes/init.php");



if (!$_SESSION['connected']) {
    header('Location:login.php');
}

$edit = $dbh->prepare('SELECT * FROM memo WHERE id_user = :id_user AND id = :id');
$edit->execute([':id_user' => $_SESSION['id'], ':id' => $_GET['id']]);
$edit2 = $edit->fetchAll();


if (!empty($_POST['submit'])) {
    if (!empty(trim($_POST['content']))){

        $ref = $dbh->prepare('UPDATE memo SET content = :content, modification_date = CURRENT_TIME WHERE id_user = :id_user AND id = :id');
        $ref->execute([
            ':content' => htmlspecialchars($_POST['content']),
            ':id_user' => htmlspecialchars($_SESSION['id']),
            ':id' => htmlspecialchars($_GET['id'])
        ]);

        header('Location:/posts.php?id='.$_SESSION['id']);
    }
}

include_once("includes/header.php");
?>

<div class="container form-post">
    <div class="row">
        <div class="col-xs-10 col-md-8 col-md-offset-2 col-xs-offset-1 form-custom">
            <h2 class="img-header">
                <img class="img-logo" src="assets/icons/logo_devento.png" />
                <div class="content">
                    Modifier un post
                </div>
            </h2>
            <div class="howto">
                <h2>Comment faire ?</h2>
                <p>
                    Choisissez la catégorie dans laquelle vous voulez poster votre article. Ensuite cliquez sur Insérer et Extrait de code pour rajouter votre code dans n'importe quel language. Enfin cliquez sur Ajouter. Et voilà c'est fini.
                </p>
            </div>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="category">Titre</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $edit2[0]['title']?>" disabled>
                </div>
                <div class="form-group">
                    <label for="category">Catégorie</label>
                    <input type="text" name="content" class="form-control" value="<?php echo $edit2[0]['category']?>" disabled>
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea id="content" type="text" class="form-control" name="content">
                        <?php

                        echo $edit2[0]['content'];

                        ?>

                    </textarea>
                </div>
                <div class="text-center submit-button">
                    <input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="Modifier">
                </div>
                <div class="suggestion">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once("includes/footer.php");

?>
