<?php

$titre="CaD - Ajouter un post";

require_once("includes/init.php");



if (!$_SESSION['connected']) {
    header('Location:login.php');
}


if (!empty($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['pays']) && !empty($_POST['content'])){

        $ref = $dbh->prepare('INSERT INTO memo (title,content,pays,creation_date,id_user) VALUES(:title,:content,:pays,Now(),:id_user)');
        $ref->execute([
            ':title' => htmlspecialchars($_POST['title']),
            ':content' => htmlspecialchars($_POST['content']),
            ':pays' => htmlspecialchars($_POST['pays']),
            ':id_user' => htmlspecialchars($_SESSION['id'])
        ]);
    }
    header('Location:posts.php?id='.$_SESSION['id']);
}

include_once("includes/header.php");
?>

    <div class="container form-post">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 form-custom">
                <h2 class="img-header">
                    <div class="content">
                        Ajouter une offre
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
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pays">Catégorie</label>
                        <select class="form-control" name="pays" >
                            <option selected>Choisissez un pays</option>
                            <?php

                            $country=$dbh->prepare('SELECT * FROM pays ORDER BY nom_fr_fr');
                            $country->execute();
                            $pays=$country->fetchAll();

                            foreach ($pays as $item){

                                ?>
                                <option value="<?php echo $item['alpha2'] ?>"><?php echo $item['nom_fr_fr']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="content" class="form-control none" rows="8" name="content" required></textarea>
                    </div>
                    <div class="text-center submit-button">
                        <input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="Ajouter">
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