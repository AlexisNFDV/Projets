<?php/*
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
$requete = $con->query("SELECT * FROM user WHERE ID = '$id'");
$informations = $requete->fetch();
*/
?>

<div class="ui basic segment fond">

    <article  id="arti" class="ui piled segment">
        <h1 style="font-size: 26px">Modifier mes informations</h1>
        hr
        <br>
        <div class="dv">
            <form action="" method="post" onsubmit="return verifForm(this)" class="ui form">
                <label for="">Prénom</label>
                <input type="text" name="surname" id="form" class="field" style="margin-bottom: 10px" value="<?php echo $informations['surname']?>">
                <br>
                <label for="">Nom</label>
                <input type="text" name="name" id="form" class="field" style="margin-bottom: 10px" value="<?php echo $informations['name']?>">
                <br>
                <label for="">Adresse email</label>
                <input type="text" name="mail" id="form" class="field" style="margin-bottom: 10px" value="<?php echo $informations['email']?>">
                <br>
                <label for="">Adresse</label>
                <input type="text" name="adress" id="form" class="field" style="margin-bottom: 10px" value="<?php echo $informations['adress']?>">
                <br>
                <label for="">Code postal</label>
                <input type="text" name="zipcode" id="form" class="field" style="margin-bottom: 10px" value="<?php echo $informations['zipcode']?>">
                <br>
                <label for="">Ville</label>
                <input type="text" name="city" id="form" class="field" style="margin-bottom: 20px" value="<?php echo $informations['city']?>">
                <br>
                <input type="submit" id="bouton" class="ui button" value="Enregistrer" name="button">
                <a href="profil.php" style="margin-left: 10px" class="liens">Retour</a>
            </form>
        </div>
        <br>
    </article>
    <br>

    <?php
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];
    $adress = $_POST['adress'];
    if (isset($_POST['button'])) {
        if (!empty($surname) && !empty($name) && !empty($mail) && !empty($zipcode) && !empty($city) && !empty($adress)) {
            $requete = $con->query("UPDATE user SET surname = '$surname', name = '$name', email = '$mail', zipcode = '$zipcode', city = '$city', adress = '$adress' WHERE ID = '$id'");
            echo "<script language='Javascript'>document.location='profil.php'</script>";
        } else {
            echo "<div style=\"text-align: center; margin-bottom: 20px; color: darkred;'\">";
            exit('Tous les champs ne sont pas renseignés !');
            echo "</div>";
        }
    }
    if (isset($POST['back'])) {
        echo "<script language='Javascript'>document.location='profil.php'</script>";
    } else {
    }
    ?>

    <script type="text/javascript">
        function surligne(champ, erreur)
        {
            if(erreur)
                champ.style.backgroundColor = "#fba";
            else
                champ.style.backgroundColor = "";
        }
        function verifNom(champ)
        {
            var regex = /^[a-zA-Z]+$/
            if(!regex.test(champ.value))
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }
        function verifPrenom(champ)
        {
            var regex = /^[a-zA-Z]+$/
            if(!regex.test(champ.value))
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }
        function verifEmail(champ)
        {
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
            if(!regex.test(champ.value))
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }
        function verifCP(champ)
        {
            var regex = /^[0-9]{2,}$/
            if(!regex.test(champ.value))
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }
        function verifAdresse(champ)
        {
            var regex = /^[a-zA-Z]+$/
            if(!regex.test(champ.value))
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }
        function verifVille(champ)
        {
            var regex = /^[a-zA-Z]+$/
            if(!regex.test(champ.value))
            {
                surligne(champ, true);
                return false;
            }
            else
            {
                surligne(champ, false);
                return true;
            }
        }
        function verifForm(f)
        {
            var nomOK = verifNom(f.nom);
            var prenomOK = verifPrenom(f.prenom);
            var EmailOK = verifEmail(f.email);
            var adresseOK = verifAdresse(f.adress);
            var CPOK = verifCP(f.zipcode);
            var VilleOK = verifVille(f.city);
            if(nomOK && prenomOK && EmailOK && adresseOK && CPOK && VilleOK)
            {
                return true;
            }
            else
            {
                alert("Tous les champs ne sont pas correctement remplis.");
                return false;
            }
        }
    </script>

    <?php
    include ('Includes/footer.php')
    ?>

</div>