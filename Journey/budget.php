<?php
/*
require 'Includes/expiration_session.php';
session_start();
if (!$_SESSION['id']) {
    echo "<script language='JavaScript'>document.location='connexion.php'</script>";
}*/
include ('Includes/head.php');
include ('Includes/header.php');

/*
require 'connectdb.php';
if ($_SESSION['id']) {
    include 'Includes/menu2.php';
} else {
    include 'Includes/menu1.php';
}
require 'Includes/expiration_session.php';
$id = $_SESSION['id'];
$requete = $con->query("SELECT * FROM suggestion WHERE ID = '$id'");
$informations = $requete->fetch();
*/

?>

<div class="ui basic segment budget">

<section id="budget">
<h1 style="padding-bottom: 20px">Gestion de mon budget</h1>

    <form action="" method="post" class="ui form">

<div class="two fields">
    <div class="field">
	<div class="ui left labeled large icon input">
		<div class="ui basic label">J'ai</div>
		<input name="budg" type="number" id="budg" placeholder="Budget total">
		<i class="euro sign icon"></i>
    </div>
    </div>
    
    <div class="field">
    <div class="ui large right labeled left icon input">
		<i class="user icon"></i>
		<input type="number" name="person" placeholder="Nombre de personnes">
		<div class="ui basic label">Personnes</div>
    </div>
    </div>
</div>

    <div class="ui form">

        <div class="two fields">
            <div class="field">
            <label>J'arrive le</label>
            <div class="ui calendar" id="rangestart">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input type="text" name="arriv" placeholder="Date d'arrivée">
                </div>
            </div>
            </div>

            <div class="field">
            <label>Je repars le</label>
            <div class="ui calendar" id="rangeend">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input type="text" name="depart" placeholder="Date de depart">
                </div>
            </div>
            </div>
        </div>
    </div>

    <h2 style="padding-top: 20px">Je divise mon budget</h2>

	<h3>Transport</h3>
	<div class="ui segment">
		<input name="transport" type="range" id="range-1" min="1" max="1" class="sliderrange" data-ratio="0.25">
        <div class="nombre">
        <span class="vert" id="display-1"></span>
        </div>
	</div>

	<h3>Logement</h3>
	<div class="ui segment">
		<input name="logement" type="range" id="range-2" min="1" max="1" class="sliderrange" data-ratio="0.25">
        <div class="nombre">
        <span class="vert" id="display-2"></span>
        </div>
	</div>

	<h3>Activités</h3>
	<div class="ui segment">
		<input name="activites" type="range" id="range-3" min="1" max="1" class="sliderrange" data-ratio="0.25">
        <div class="nombre">
        <span class="vert" id="display-3"></span>
        </div>
	</div>

	<h3>Restaurants</h3>
	<div class="ui segment">
		<input name="restaurants" type="range" id="range-4" min="1" max="1" class="sliderrange" data-ratio="0.25">
		<div class="nombre">
        <span class="vert" id="display-4"></span>
        </div>
	</div>

	<button type="submit" class="ui button" style="margin-top: 20px">Afficher les suggestions</button>

    </form>
</section>
    <?php
   /* $budget = $_POST['budg'];
    $arrive = $_POST['arrive'];
    $depart = $_POST['depart'];
    $person = $_POST['person'];
    $transport = $_POST['transport'];
    $logement = $_POST['logement'];
    $activites = $_POST['activites'];
    $restos = $_POST['restaurants'];
    if (isset($_POST['button'])) {
        if (!empty($budget) && !empty($arrive) && !empty($depart) && !empty($person) && !empty($transport) && !empty($logement)&& !empty($activites)&& !empty($restos)) {
            $requete = $con->query("UPDATE suggestion SET budg = '$budget', arrive = '$arrive', depart = '$depart', nbperson = '$person', transport = '$transport', logement = '$logement', activites='$activites', restaurants='$restos' WHERE ID = '$id'");
            echo "<script language='Javascript'>document.location='profil.php'</script>";
        } else {
            echo "<div style=\"text-align: center; margin-bottom: 20px; color: darkred;'\">";
            exit('Tous les champs ne sont pas renseignés !');
            echo "</div>";
        }
    }
    if (isset($POST['back'])) {
        echo "<script language='Javascript'>document.location='index.php'</script>";
    } else {
    }

    */
    include ('Includes/footer.php')
    ?>

</div>