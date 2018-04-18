<?php 
include ('Includes/head.php');
include ('Includes/header.php'); 
?>

<div class="ui basic segment tchou">

        <h1 class="ui header container" id="page-title" style="padding-top: 0.5px">Trains</h1>

<div id="fondblanc">
<div class="ui stackable grid container divided">
    <div class="four wide column">
        <h1>Critères</h1>
        <div class="ui fluid category search" style="margin-top: 15%; margin-bottom: 15%">
            <div class="ui icon input" style="width: 90%">
                <input class="prompt" placeholder="Rechercher ...." type="text">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>
        <h3>Séjour
            <i class="caret down icon"></i>
        </h3>
        <div class="ui form">
            <div class="field">
                <label>Horaire de départ</label>
                <div class="ui calendar" id="timestart">
                    <div class="ui input left icon">
                        <i class="clock icon"></i>
                        <input type="text" placeholder="Départ">
                    </div>
                </div>
            </div>
        </div>
        <h3>Services
            <i class="caret down icon"></i>
        </h3>
        <div class="inline field service-item">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox">
                <label>Trajet direct</label>
            </div>
        </div>
        <div class="inline field service-item">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox">
                <label>Wifi gratuit</label>
            </div>
        </div>
        <div class="inline field service-item">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox">
                <label>Voiture bar</label>
            </div>
        </div>
        <div class="inline field service-item">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox">
                <label>Assistance handicapés</label>
            </div>
        </div>
        <div class="inline field service-item">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox">
                <label>Animaux autorisés</label>
            </div>
        </div>
        <div class="inline field service-item">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox">
                <label>Accompagnement enfant</label>
            </div>
        </div>
        <div class="inline field service-item">
            <div class="ui checkbox">
                <input tabindex="0" class="hidden" type="checkbox">
                <label>Couchette</label>
            </div>
        </div>
        <h3>Classe
            <i class="caret down icon"></i>
        </h3>
             <div class="grouped fields">
            <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2" checked="checked">
        <label>Économie</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2">
        <label>Business</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2">
        <label>Première</label>
      </div>
    </div>
  </div>
    </div>
    <div class="twelve wide column">
        <h1>Résulats</h1>
        <div class="ui items">
            <div class="item">
                <div class="content">
                    <a class="header">Header</a>
                    <div class="meta">
                        <span class="price trans">A partir de €40/nuit</span>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, sit sint? Fugit amet laboriosam
                            eligendi obcaecati fuga officia sed enim officiis, magnam tempore reiciendis dolor ratione!
                        Impedit cumque molestiae accusantium!</p>
                    </div>
                    <div class="extra">
                        <div class="ui buttons left floated">
                            <div class="ui basic grey button">Détails</div>
                            <div class="ui basic blue button">Réserver</div>
                        </div>
                        <div class="ui label">Limited</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <a class="header">Header</a>
                    <div class="meta">
                        <span class="price trans">A partir de €140/nuit</span>
                    </div>
                    <div class="description">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                            aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                        sint? Impedit, eaque! Labore, odio laborum.</p>
                    </div>
                    <div class="extra">
                        <div class="ui buttons left floated">
                            <div class="ui basic grey button">Détails</div>
                            <div class="ui basic blue button">Réserver</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <a class="header">Header</a>
                    <div class="meta">
                        <span class="price trans">A partir de €90/nuit</span>
                    </div>
                    <div class="description">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                            aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                        sint? Impedit, eaque! Labore, odio laborum.</p>
                    </div>
                    <div class="extra">
                        <div class="ui buttons left floated">
                            <div class="ui basic grey button">Détails</div>
                            <div class="ui basic blue button">Réserver</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <a class="header">Header</a>
                    <div class="meta">
                        <span class="price trans">A partir de €45/nuit</span>
                    </div>
                    <div class="description">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                            aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                        sint? Impedit, eaque! Labore, odio laborum.</p>
                    </div>
                    <div class="extra">
                        <div class="ui buttons left floated">
                            <div class="ui basic grey button">Détails</div>
                            <div class="ui basic blue button">Réserver</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="content">
                    <a class="header">Header</a>
                    <div class="meta">
                        <span class="price trans">A partir de €45/nuit</span>
                    </div>
                    <div class="description">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                            aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                        sint? Impedit, eaque! Labore, odio laborum.</p>
                    </div>
                    <div class="extra">
                        <div class="ui buttons left floated">
                            <div class="ui basic grey button">Détails</div>
                            <div class="ui basic blue button">Réserver</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php include ('Includes/footer.php'); ?>

</div>