<?php

$titre="Devento - Traiteurs";

require_once("includes/init.php");

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit))."...";
}

include_once("includes/header.php");

if(isset($_GET)) {
    $pays = $_GET["pays"];

    $ref = $dbh->prepare('SELECT * FROM memo, users WHERE memo.id_user=users.id AND pays = :pays ORDER BY memo.creation_date DESC');
    $ref->execute([':pays' => $pays]);
    $res = $ref->fetchAll();

    $pays=$dbh->prepare('SELECT * FROM pays WHERE alpha2 = :code');
    $pays->execute([':code' => $_GET['pays']]);
    $pays2=$pays->fetchAll()


    ?>
    <div class="hr-title">
        <h1 class="page-title"><?php echo $pays2[0]["nom_fr_fr"];?></h1>
    </div>
    <div class="container standard">
        <div class="row posts">
            <?php
            foreach ($res as $post) : ?>
                <div class="col-md-8 col-md-offset-2 post">
                    <div>
                        <h2 class="title"><a href="offre.php?id=<?= $post[0]; ?>"><?php echo $post['title']; ?></a></h2>
                        <p class="content"><?= limit_words(strip_tags(htmlspecialchars_decode($post['content'])), 40); ?></p>
                        <span class="author"><a href="profile.php?id=<?= $post['id']; ?>"><?= $post['username']; ?></a></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php

}

include_once("includes/footer.php");?>
