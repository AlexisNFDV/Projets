<?php

$titre="CaD - Modifier une offre";

require_once("includes/init.php");



if (!$_SESSION['connected']) {
    header('Location:login.php');
}

$edit = $dbh->prepare('SELECT * FROM memo WHERE id_user = :id_user AND id = :id');
$edit->execute([':id_user' => $_SESSION['id'], ':id' => $_GET['id']]);
$edit2 = $edit->fetchAll();


if (!empty($_POST['submit'])) {
    if (!empty($_POST['content'])){

        $ref = $dbh->prepare('UPDATE memo SET content = :content, modification_date = CURRENT_TIME WHERE id_user = :id_user AND id = :id');
        $ref->execute([
            ':content' => htmlspecialchars($_POST['content']),
            ':id_user' => htmlspecialchars($_SESSION['id']),
            ':id' => htmlspecialchars($_GET['id'])
        ]);

        header('Location:posts.php?id='.$_SESSION['id']);
    }
}

include_once("includes/header.php");
?>

<div class="container form-post">
    <div class="row">
        <div class="col-xs-10 col-md-8 col-md-offset-2 col-xs-offset-1 form-custom">
            <h2 class="img-header">
                <div class="content">
                    Modifier une offre
                </div>
            </h2>
            <div class="howto">
                <h2>Comment faire ?</h2>
                <p>
                    Choisissez le pays dans lequel vous voulez poster votre offre afin d'identifier le type de cuisine que vous proposez.
                    Choisissez un titre à votre offre.
                    Enfin, vous pouvez poster.
                </p>
            </div>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $edit2[0]['title']?>" disabled>
                </div>
                <div class="form-group">
                    <label for="pays">Pays</label>
                    <input type="text" name="pays" class="form-control" value="<?php echo $edit2[0]['pays']?>" disabled>
                </div>
                <div class="form-group">
                    <textarea id="content" class="form-control none" rows="8" name="content" required>

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
