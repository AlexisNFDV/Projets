<?php
    include ('Includes/head.php');
    include ('Includes/header.php');
?>

<div class="ui basic segment budget">

<section id="transp">
    <h1>Connexion à mon compte</h1>
    <form action="" class="ui form" style="margin-top: 20px">
        <div class="two fields">
            <div class="field">
                <label>Mon adresse email</label>
                <div class="ui input left icon">
                    <i class="user icon"></i>
                    <input type="text" name="" placeholder="Adresse email">
                </div>
            </div>
            <div class="field">
                <label>Mon mot de passe</label>
                <div class="ui input left icon">
                    <i class="key icon"></i>
                    <input type="password" name="" placeholder="Mot de passe">
                </div>
            </div>
        </div>
        <input type="submit" value="Je me connecte" class="ui button" style="margin-top: 20px">
    </form>
    <hr>
    <h1>Inscription</h1>
    <form action="" class="ui form">
        <h3>Informations personnelles</h3>
        <div class="two fields">
            <div class="field">
                <label>Prénom</label>
                <div class="ui input left icon">
                    <i class="user icon"></i>
                    <input type="text" name="" placeholder="Prénom">
                </div>
            </div>
            <div class="field">
                <label>Nom</label>
                <div class="ui input left icon">
                    <i class="user icon"></i>
                    <input type="text" name="" placeholder="Nom">
                </div>
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                <label>Date de naissance</label>
                <div class="ui calendar" id="rangestart">
                    <div class="ui input left icon">
                        <i class="calendar icon"></i>
                        <input type="text" placeholder="Début">
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Sexe</label>
                <div class="ui input left icon">
                    <i class="user icon"></i>
                    <select class="ui search dropdown">
                        <option value="">Genre</option>
                        <option value="1">Femme</option>
                        <option value="2">Homme</option>
                    </select>
                </div>
            </div>
        </div>
        <h3>Informations de connexion</h3>
        <div class="two fields">
            <div class="field">
                <label>Adresse email</label>
                <div class="ui input left icon">
                    <i class="at icon"></i>
                    <input type="text" name="" placeholder="Adresse email">
                </div>
            </div>
            <div class="field">
                <label>Mot de passe</label>
                <div class="ui input left icon">
                    <i class="key icon"></i>
                    <input type="password" name="" placeholder="Mot de passe">
                </div>
            </div>
        </div>
    </form>
    <input type="submit" value="Je m'inscris" class="ui button" style="margin-top: 20px">
</section>

<?php include ('Includes/footer.php') ?>

</div>