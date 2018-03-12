<?php

$titre="CaD - Cours";
require_once("includes/init.php");

if(isset($_GET['id'])) :

$id = $dbh-> prepare('SELECT * FROM memo WHERE id = :id ORDER BY creation_date');
$id->execute([':id' => $_GET['id']]);
$all = $id->fetchAll();


$add = $dbh->prepare('UPDATE chat SET notif = 0 WHERE (receive = :receive OR send = :receive) AND offre = :offre');
$add->execute([':receive' => $_SESSION['id'], ':offre' => $_GET['id']]);

$add = $dbh->prepare('UPDATE chat SET is_read = 1 WHERE (receive = :receive OR send = :receive) AND offre = :offre');
$add->execute([':receive' => $_SESSION['id'], ':offre' => $_GET['id']]);

include_once("includes/header.php");
?>
    <div class="hr-title">
        <h1 class="page-title"><?php echo $all[0]["title"];?></h1>
    </div>
<div class="container standard">
    <div class="row">
        <div class="main-post">
            <div >
                <div>
                    <?php if(isset($_GET['profil']) && $_GET['profil'] === "Y" &&  isset($_SESSION['id']) &&  !empty($_SESSION['id'])){ ?>
                        <div class="user-post-links">
                                <span class="dlt_link_post" >
                                    <a href="dlt_post.php?id=<?php echo $_GET['id'] ?>">Supprimer</a>
                                </span>
                            <span class="edit_link_post" >
                                    <a href="modif.php?id=<?php echo $_GET['id'] ?>">Editer</a>
                                </span>
                            <span class="edit_link_post" >
                                    <a href="chat.php?user1=<?php echo $all[0]['id_user'];?>&user2=<?php echo $_SESSION['id'];?>&offre=<?php echo $_GET['id'] ?>">Chat</a>
                                </span>
                        </div>
                        <?php
                    }
                    elseif(isset($_SESSION['id']) &&  !empty($_SESSION['id'])){

                        ?>
                        <div class="user-post-links">
                                <span class="edit_link_post" >
                                    <a href="chat.php?user1=<?php echo $all[0]['id_user'];?>&user2=<?php echo $_SESSION['id'];?>&offre=<?php echo $_GET['id'] ?>">Contacter</a>
                                </span>
                        </div>
                        <?php
                    }
                    ?>

                    <p><?php echo htmlspecialchars_decode( $all[0]['content']);?></p>
                </div>
            </div>

        </div>
    </div>
    <?php endif;?>
</div>
<?php include_once("includes/footer.php"); ?>
