<?php

include_once 'connect.php';

ini_set("display_errors",0);error_reporting(0);

?>

<!DOCTYPE html>
<html xmlns:margin-top="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Police google -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

    <!--Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!--Icons Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="CSS/style.css">
    <title>8GAG</title>
</head>
<body>

<?php
require 'header.php';

if(isset($_GET['connect'])){
?>

<div class="container">
    <div class="row">
        <div class="col l10 offset-l1">
            <div class="row">
                <?php

                if(isset($_GET['success'])){

                    include 'formulaire.php';
                }

                $abs = $dbh->prepare('SELECT id FROM image');
                $abs->execute();
                $bas = $abs->fetchAll();

                        if ($bas[4]['id'] >= 5) {
                            echo '
                    <div class="col l4 center swag">
                    <a href = "index3.php" class="deep-purple accent-2 waves-effect waves-light btn" > Voir tout </a>
                    </div> ';
                        }

                ?>
            </div>
        </div>
    </div>
</div>

<?php
}
require 'footer.php';
?>
</body>

<!--Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script>
    //initialisation des zoom pour les photos
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
    //Initialisation des modules
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });

</script>

</html>