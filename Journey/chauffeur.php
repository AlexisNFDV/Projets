<?php 
include ('Includes/head.php');
include ('Includes/header.php'); 
?>

<div class="ui basic segment car">

  <section id="transp">

    <h1>Réserver un chauffeur</h1>
    <br>
      <div class="ui grid">
        <div class="two column row">
            <div class="column">

                <form class="ui form">
                <div class="field">
                    <label>Trajet</label>
                        <div class="two fields">
                            <div class="field">
                            <div class="ui input left icon">
                                <i class="flag icon"></i>
                                <input type="text" name="shipping[first-name]" placeholder="Adresse de départ">
                            </div>
                        </div>
                        <div class="field">
                        <div class="ui input left icon">
                            <i class="flag checkered icon"></i>
                                <input type="text" name="shipping[last-name]" placeholder="Adresse d'arrivée">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label>Nombre de bagages</label>
                    <div class="field">
                        <select class="ui search dropdown">
                            <option value="">Bagages</option>
                            <option value="PR">1</option>
                            <option value="TM">2</option>
                            <option value="TV">3</option>
                            <option value="UG">4</option>
                            <option value="UA">5</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label>Heure de prise en charge</label>
                        <div class="ui calendar" id="timestart">
                            <div class="ui input left icon">
                            <i class="clock icon"></i>
                            <input type="text" placeholder="Horaire">
                        </div>
                    </div>
                </div>

                <div class="inline fields" style="margin-top: 18px">
                    <label for="fruit">Type de véhicule :</label>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" checked="" tabindex="0" class="hidden" name="vol">
                                <label>Éco</label>
                        </div>
                    </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="fruit" tabindex="0" class="hidden" name="train">
                                    <label>Berline</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="fruit" tabindex="0" class="hidden" name="chauffeur">
                                    <label>Van</label>
                        </div>
                    </div>
                </div>

            <h3>Informations de contact</h3>
            <div class="column">
            <form class="ui form">
                <div class="field">
                    <label>Nom complet</label>
                        <div class="two fields">
                            <div class="field">
                            <div class="ui input left icon">
                            <i class="address card outline icon"></i>
                                <input type="text" name="shipping[first-name]" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="field">
                        <div class="ui input left icon">
                        <i class="address card outline icon"></i>
                                <input type="text" name="shipping[last-name]" placeholder="Nom">
                        </div>
                        </div>
                    </div>
                    <div class="ui input left icon">
                    <i class="phone icon"></i>
                    <input type="number" placeholder="Numéro de téléphone">
                    </div>
                </div>
            </div>
            <input name="boution" type="submit" class="ui button" value="Rechercher" style="margin-top: 18px">
</section>

    <?php
    include ('Includes/footer.php')
    ?>

</div>