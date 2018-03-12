<?php
$titre="Devento - Contact";
require_once("includes/init.php");



if (!empty($_POST)){

    if (!empty($_POST['firstname']) &&  !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        function get_ip() {
            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                return $_SERVER['HTTP_CLIENT_IP'];
            }
            elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else {
                return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
            }
        }
        function get_user() {

            if (isset($_SERVER['HTTP_USER_AGENT'])) {
                return $_SERVER['HTTP_USER_AGENT'];
            }
        }
        $name=htmlspecialchars($_POST['firstname'])." ".htmlspecialchars($_POST['lastname']);
        $email=htmlspecialchars($_POST['email']);
        $message=htmlspecialchars("Adresse IP: " . get_ip() ."\r\nUser-Agent: ". get_user() ."\r\nEmail: " . $email . "\r \n" .$_POST['message'] . "\r\n");
        $to ="benhabds98@gmail.com";
        $headers = "From: $name <$email>" . "\r\n";
        $subject= "Contact : "  . $name;
        mail($to, $subject, $message, $headers);
        header('location:index.php');
    }
}
include_once("includes/header.php");
?>  

<div class="container standard pgContact">

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-custom">
            <h2 class="img-header">
                <img class="img-logo" src="assets/icons/logo_devento.png" />
                <div class="content">
                    Contact
                </div>
            </h2>
            <form role="form" id="contactForm" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Nom" name="firstname" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="Prenom" placeholder="Prénom" name="lastname" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Adresse email" name="email" required>
                </div>
                <div class="form-group">
                    <textarea id="message" class="form-control none" rows="8" placeholder="Message" name="message" required></textarea>
                </div>
                <div class="text-center submit-button">
                    <input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
    <?php
    include_once("includes/footer.php"); 
    ?>
