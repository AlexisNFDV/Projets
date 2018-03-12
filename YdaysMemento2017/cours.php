<?php

$titre="Devento - Cours";
require_once("includes/init.php");
include_once("includes/header.php");

if(isset($_GET['id'])) :

    $id = $dbh-> prepare('SELECT * FROM memo WHERE id = :id ORDER BY creation_date');
    $id->execute([':id' => $_GET['id']]);
    $all = $id->fetchAll(); 
    ?>
    <div class="hr-title">
        <h1 class="page-title"><?php echo $all[0]["title"];?></h1>
    </div>
    <div class="container standard">
        <div class="row">
            <div class="main-post">
                <div >
                    <div>
                        <?php if(isset($_GET['profil']) && $_GET['profil'] === "Y" &&  isset($_SESSION['id']) &&  !empty($_SESSION['id'])): ?>
                            <div class="user-post-links">
                                <span class="dlt_link_post" >
                                    <a href="dlt_post.php?id=<?php echo $_GET['id'] ?>">Supprimer</a>
                                </span>
                                <span class="edit_link_post" >
                                    <a href="modif.php?id=<?php echo $_GET['id'] ?>">Editer</a>
                                </span>
                            </div>
                        <?php endif;?>
                        <p><?php echo htmlspecialchars_decode( $all[0]['content']);?></p>
                    </div>
                </div>

            </div>
        </div>
    <?php endif;?>
</div>

<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a3d443bc95b880011a3b4b6&product=sticky-share-buttons"></script>
<?php include_once("includes/footer.php"); ?>
