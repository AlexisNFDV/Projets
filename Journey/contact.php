<?php 
include ('Includes/head.php');
include ('Includes/header.php');
?>

<div class="ui basic segment fond">

    <article  id="arti" class="ui piled segment">
        <h1 style="font-size: 29px">Où sommes-nous ?</h1>
        <p>12 rue Anatole France <br>92000 Nanterre</p>
        <br>
        <h3 style="margin-top: 20px; margin-bottom: 15px">Nous contacter via le support</h3>
        <div class="align" style="margin-left: 0">
            <form action="https://formspree.io/Journey@gmail.com" method="post" class="ui form">
                <br>
                <input type="text" name="name" class="field" placeholder="Nom" style="margin-bottom: 10px">
                <br>
                <input type="email" name="adresseemail" class="field" placeholder="Adresse email" style="margin-bottom: 10px">
                <br>
                <input type="text" name="subject" class="field" placeholder="Sujet" style="margin-bottom: 10px">
                <br>
                <textarea name="message" cols="30" rows="10" placeholder="Message" class="field" style="margin-bottom: 10px"></textarea>
                <br>
                <input type="submit" id="bouton" class="ui button" value="Envoyer" name="send">
            </form>
        </div>
    </article>

    <?php
    if (isset($_POST['send'])) {
        if (!empty($_POST['name']) && !empty($_POST['adresseemail']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
            $requete = $con->prepare("INSERT INTO messages(ID, sender_name, sender_email, subject, message) VALUES (NULL, ?, ?, ?, ?)");
            $requete->execute(array($_POST['name'], $_POST['adresseemail'], $_POST['subject'], $_POST['adresseemail']));
            echo "</div>";
            $message  = ''.$_POST['message'].'
            
            '.$_POST['adresseemail'].'
            '.$_POST['name'].'';
            mail('Journey@gmail.com', $_POST['subject'], $_POST['message']);
            echo "<div style=\"text-align: center; margin-bottom: 20px; color: black;'\">";
            echo "Votre message a bien été envoyé !";
            echo "</div>";
        } else {
            echo "<div style=\"text-align: center; margin-bottom: 20px; color: darkred;'\">";
            exit('Veuillez remplir tous les champs.');
            echo "</div>";
        }
    }

    include ('Includes/footer.php')
    ?>

</div>