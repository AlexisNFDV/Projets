<?php 
include ('Includes/head.php');
include ('Includes/header.php');
?>

<div class="ui basic segment suitcase">

  <section id="transp">

  <form action="" method="post">
    <div class="ui form">
      <div class="inline fields">
        <label for="fruit">Vous recherchez :</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="fruit" checked="" tabindex="0" class="hidden" value="vol">
            <label>Un vol</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="fruit" tabindex="0" class="hidden" value="train">
            <label>Un train</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="fruit" tabindex="0" class="hidden" value="chauffeur">
            <label>Un chauffeur</label>
          </div>
        </div>
      </div>
      <h1>Votre trajet</h1>
      <div class="ui grid">
      <div class="three column row">
      <div class="column">
          <h3>Trajet</h3>
          <div class="ui form">
            <div class="field">
              <label>Départ</label>
              <select class="ui search dropdown">
                <option value="">Ville de départ</option>
                <option value="PR">Paris</option>
                <option value="TM">Antarctique Land</option>
                <option value="TV">Barcelone</option>
                <option value="UG">Shanghai</option>
                <option value="UA">Singapour</option>
                <option value="AE">Dubaï</option>
                <option value="GB">Los Angeles</option>
                <option value="US">New York</option>
                <option value="UY">Athènes</option>
                <option value="UZ">Rhodes</option>
                <option value="VU">Sydney</option>
                <option value="VE">Toronto</option>
                <option value="VN">Johannesburg</option>
                <option value="WF">Wallis et Futuna</option>
                <option value="YE">Agadir</option>
                <option value="ZM">Santorin</option>
              </select>
            </div>
          </div>
          <div class="ui form" style="margin-top: 14px">
            <div class="field">
              <label>Destination</label>
              <select class="ui search dropdown">
                <option value="">Ville de destination</option>
                <option value="PR">Paris</option>
                <option value="TM">Antarctique Land</option>
                <option value="TV">Barcelone</option>
                <option value="UG">Shanghai</option>
                <option value="UA">Singapour</option>
                <option value="AE">Dubaï</option>
                <option value="GB">Los Angeles</option>
                <option value="US">New York</option>
                <option value="UY">Athènes</option>
                <option value="UZ">Rhodes</option>
                <option value="VU">Sydney</option>
                <option value="VE">Toronto</option>
                <option value="VN">Johannesburg</option>
                <option value="WF">Wallis et Futuna</option>
                <option value="YE">Agadir</option>
                <option value="ZM">Santorin</option>
              </select>
            </div>
          </div>
          <div class="ui form" style="margin-top: 14px">
            <div class="field">
              <label>Type de trajet</label>
              <select class="ui search dropdown">
                <option value="">Type</option>
                <option value="PR">Aller simple</option>
                <option value="TM">Aller-retour</option>
              </select>
            </div>
          </div>
        </div>
        <div class="column">
          <h3>Dates</h3>
          <div class="ui form">
            <div class="field">
              <label>Aller</label>
              <div class="ui calendar" id="rangestart">
                <div class="ui input left icon">
                  <i class="calendar icon"></i>
                  <input type="text" placeholder="Début">
                </div>
              </div>
            </div>
            <div class="field">
              <label>Retour</label>
              <div class="ui calendar" id="rangeend">
                <div class="ui input left icon">
                  <i class="calendar icon"></i>
                  <input type="text" placeholder="Fin">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
            <h3>Passagers</h3>
          <div class="ui form">
            <div class="field">
              <label>Nombre de passagers adultes (> 14 ans)</label>
              <select class="ui search dropdown">
                <option value="">Nombre passagers</option>
                <option value="PR">1</option>
                <option value="TM">2</option>
                <option value="TV">3</option>
                <option value="UG">4</option>
                <option value="UA">5</option>
              </select>
            </div>
            <div class="field">
              <label>Nombre de passagers enfants (< 14 ans)</label>
              <select class="ui search dropdown">
                <option value="">Nombre passagers</option>
                <option value="PR">1</option>
                <option value="TM">2</option>
                <option value="TV">3</option>
                <option value="UG">4</option>
                <option value="UA">5</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    </section>

    <a href="transport.php">
      <button class="ui button" style="margin-top: 18px; margin-left: 84px">Rechercher</button>
    </a>

    <?php
    include ('Includes/footer.php')
    ?>

  </div>