<?php /*
require 'connectdb.php';
require 'Includes/expiration_session.php';
session_start();
if (!$_SESSION['id']) {
    echo "<script language='JavaScript'>document.location='connexion.php'</script>";
}*/



include ('Includes/head.php');
include ('Includes/header.php'); 
/*
if ($_SESSION['id']) {
    include 'Includes/menu2.php';
} else {
    include 'Includes/menu1.php';
}
$id = $_SESSION['id'];
$requete = $con->query("SELECT * FROM user WHERE ID = '$id'");
$informations = $requete->fetch()
*/
?>

<div class="ui basic segment fond">

    <article id="arti" class="ui piled segment">
        <h1 style="font-size: 26px; text-align: center">Bonjour <?php /* echo $informations['surname'] */ ?>!</h1>
        <hr style="width: 50%; margin-bottom: 50px">
        <div id="divg">
            <h2>Mes informations personnelles :</h2>
            <br>
            <div id="profi">
                <p><strong>Prénom : </strong><?php echo $informations['surname'] ?></p>
                <p><strong>Nom : </strong><?php echo $informations['name'] ?></p>
                <p><strong>Email : </strong><?php echo $informations['email'] ?></p>
                <p><strong>Adresse : </strong><?php echo $informations['adress'] ?></p>
                <p><strong>Code Postal : </strong><?php echo $informations['zipcode'] ?></p>
                <p><strong>Ville : </strong><?php echo $informations['city'] ?></p>
            </div>
            <br>
            <a href="modifinfoperso.php"><input type="submit" name="button" class="ui button" value="Modifier mes informations"></a>
        </div>

    </article>

    <?php
    include ('Includes/footer.php')
    ?>

</div>