<?php
$titre="CaD - Chat";
require_once("includes/init.php");
include_once("includes/header.php");

if (isset($_SESSION) && isset($_SESSION['connected'])) :

    $req = $dbh->query("SELECT * FROM users WHERE id = '".$_GET['user1']."'");
    $data = $req->fetchAll();

    $req2 = $dbh->query("SELECT * FROM users WHERE id = '".$_GET['user2']."'");
    $data2 = $req2->fetchAll();

    $reponse = $dbh->prepare('SELECT * FROM chat WHERE offre=:offre AND receive=:receive AND send=:send ORDER BY id DESC LIMIT 0, 10');
    $reponse->execute([':offre' => $_GET['offre'], ':receive' => $_GET['user1'], ':send' => $_GET['user2']]);
    $reponse2 = $reponse->fetchAll();

    $reponse3 = $dbh->prepare('SELECT * FROM chat WHERE offre=:offre AND receive=:receive ORDER BY id DESC LIMIT 0, 10');
    $reponse3->execute([':offre' => $_GET['offre'], ':receive' => $_GET['user1']]);
    $reponse4 = $reponse3->fetchAll();

    ?>

    <form role="form" action="chat_post.php?user1=<?php echo $_GET['user1']; ?>&user2=<?php echo $_SESSION['id']; ?>&offre=<?php echo $_GET['offre'] ?>"
          method="POST">
        <div class="container standard2 pgContact">

            <input type="text" id="pseudo" name="pseudo" value="<?php echo $data2[0]['username'] ?>" style="display: none">

            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-custom">
                    <h2 class="img-header">
                        <div class="content">
                            Contacter <?php echo $data[0]["username"] ?>
                        </div>
                    </h2>
                    <div class="form-group">
                        <p id="message" class="form-control none" >
                            <?php

                            if(($_GET['user1'] !== $_GET['user2'])) {
                                foreach ($reponse2 as $item) {
                                    //var_dump($item);

                                    ?>
                                    <strong> <?php echo htmlspecialchars($item['pseudo']) ?></strong> : <?php echo htmlspecialchars($item['message']) ?>
                                    <br>
                                    <?php
                                }
                            }
                            elseif($_GET['user1'] == $_GET['user2']){
                                foreach ($reponse4 as $item) {

                                    ?>
                                    <strong> <?php echo htmlspecialchars($item['pseudo']) ?></strong> : <?php echo htmlspecialchars($item['message']) ?>
                                    <br>
                                    <?php
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-left: 0; !important; margin-right: 0; !important;">
            <div class="col-lg-12">
                <div class="input-group submit-button">
                    <?php
                    if($_GET['user1'] == $_GET['user2']) {
                        ?>
                        <div class="col-lg-2" style="padding-left: 0; !important;">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">A</span>
                                <input type="text" name="choose" id="choose" class="form-control" style="float: left; display: inline-block" required>
                            </div>
                        </div>
                        <div class="col-lg-10" style="padding-left: 0; !important; padding-right: 0; !important;">
                            <div class="input-group">
                                <input type="text" name="message" id="message" class="form-control" placeholder="Message" style="display: inline-block" required>
                                <span class="input-group-btn"><input class="btn btn-default" type="submit" value="Envoyer" style="font-size: 19px; background-color: #1d89ff; display: inline-block"></span>
                            </div>
                        </div>
                    <?php } else{?>
                        <input type="text" name="message" id="message" class="form-control" placeholder="Message"
                               required>
                        <span class="input-group-btn"><input class="btn btn-default" type="submit" value="Envoyer" style="font-size: 19px; background-color: #1d89ff"></span>
                    <?php }?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </form>

<?php
endif;

include_once("includes/footer.php"); ?>