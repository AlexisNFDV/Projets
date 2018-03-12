<?php

$titre="CaD - Mes posts";

require_once("includes/init.php");
require_once("includes/header.php");

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit))."...";
}

if (isset($_GET['id'])) {

    $id_user = $_GET["id"];
    $id_connected = $_SESSION['id'];

    // Si le profile a consulter est le sien
    if ($id_user = $id_connected) {

        $get_post = $dbh->prepare('SELECT * FROM memo WHERE memo.id_user = :id_user');
        $get_post->execute(
            array(
                'id_user' => $id_user
            )
        );
        $post = $get_post->fetchAll();
        ?>
        <div class="hr-title">
            <h1 class="page-title">Mes Posts</h1>
        </div>
        <div class="container standard">
            <div class="row">
                <?php if (count($post)>0) {
                    foreach ($post as $item) {
                        ?>
                        <div class="post">
                            <h2 class="title">
                                <a href="offre.php?id=<?= $item[0] ?>&profil=Y"><?= $item['title']; ?></a>
                            </h2>
                            <p class="content"><?= limit_words(strip_tags(htmlspecialchars_decode($item['content'])), 40); ?></p>
                        </div>
                        <?php
                    }
                }
                else { ?>
                    <div class="col-md-8 col-md-offset-2 post">
                        <div>
                            <div>
                                <p class="content">Vous n'avez pas d'offres actuellement mise en ligne</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    } else {
        header("Location: index.php");
    }

} else {
    header("Location: index.php");
}
require_once("includes/footer.php");

?>