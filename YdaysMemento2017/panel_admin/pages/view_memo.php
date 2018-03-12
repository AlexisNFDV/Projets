<?php

require_once("../../includes/init.php");
$titre="Devento - Mémo"; 
include_once("../../includes/header.php");
require_once("check.php");

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
                        <p><?php echo htmlspecialchars_decode( $all[0]['content']);?></p>
                    </div>
                </div>

            </div>
        </div>
    <?php endif;?>
</div>
<?php include_once("../../includes/footer.php"); ?>
