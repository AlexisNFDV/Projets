<?php

$titre="CaD - Mes Messages";

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

    if ($id_user = $id_connected) {

        $test = $dbh->prepare('SELECT memo.id, title, content, receive, offre, notif FROM memo,chat WHERE (receive = :receive OR send = :receive) AND offre = memo.id AND notif != 0 AND is_read = 0 ORDER BY notif DESC');
        $test->execute([':receive' => $id_connected]);
        $test2=$test->fetchAll();

        //var_dump($test2);

        ?>
        <div class="hr-title">
            <h1 class="page-title">Mes Messages</h1>
        </div>
        <div class="container standard">
            <div class="row">
                <?php
                if($test2 !== false && !empty($test2)){
                    foreach($test2 as $item){
                        ?>
                        <div class="post">
                            <h2 class="title">
                                <a href="offre.php?id=<?= $item['id'] ?>&profil=Y"><?= $item['title']; ?></a>
                                <span class="badge"><?php echo $item['notif'] ?></span>
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
                                <p class="content">Vous n'avez pas de nouveaux messages</p>
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