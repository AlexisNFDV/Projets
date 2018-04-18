<?php 
include ('Includes/head.php');
include ('Includes/header.php'); 
?>

<div class="ui basic segment blanc">

    <div class="ui breadcrumb grid container">
        <a class="section">Accueil</a>
        <i class="right angle icon divider"></i>
        <a class="section">Maroc</a>
        <i class="right angle icon divider"></i>
        <a class="section">Casablanca</a>
        <i class="right angle icon divider"></i>
        <div class="active section">Restaurants</div>
    </div>

    <h1 class="ui header container" id="page-title">Restaurants proche de Casablanca</h1>

    <div class="ui stackable grid container divided">
        <div class="three wide column">
            <h1>Critères</h1>
            <div class="ui fluid category search" style="margin-top: 15%; margin-bottom: 15%">
                <div class="ui icon input" style="width: 90%">
                    <input class="prompt" placeholder="Rechercher ...." type="text">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
            <h3>Spécialités
                <i class="caret down icon"></i>
            </h3>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Africain</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Bio</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Espagnol</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="local">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Cuisine locale</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Doner kebab</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="asiatique">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Asiatique</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Mexicain</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Pates</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="vege">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Végétarien</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Tacos</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="halal">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Halal</label>
                </div>
            </div>
            <h3>Repas
                <i class="caret down icon"></i>
            </h3>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Petit déjeuner</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="dejeuner">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Déjeuner</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Diner</label>
                </div>
            </div>
            <h3>Note attribuée
                <i class="caret down icon"></i>
            </h3>
            <div class="inline field service-item">
                <div class="ui checkbox" id="5etoiles">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>5/5</label>
                </div>
                <div class="ui star rating" data-rating="5"></div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="4etoiles">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>4/5</label>
                </div>
                <div class="ui star rating" data-rating="4"></div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="3etoiles">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>3/5</label>
                </div>
                <div class="ui star rating" data-rating="3"></div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="2etoiles">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>2/5</label>
                </div>
                <div class="ui star rating" data-rating="2"></div>

            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="1etoiles">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>1/5</label>
                </div>
                <div class="ui star rating" data-rating="1"></div>
            </div>
            <h3>Prix
                <i class="caret down icon"></i>
            </h3>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Repas économique</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Intermédiare</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Gastronomie</label>
                </div>
            </div>
        </div>
        <div class="thirteen wide column">
            <h1 style="margin-bottom:3%;">Résultats</h1>
            <div class="ui grid">
                <div class="doubling four column row resultat">
                    <div class="column resto 4etoiles local halal">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/food1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="4"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui basic grey button">Détails</div>
                                    <div class="ui basic blue button">Réserver</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column resto 4etoiles vege local">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/vege2.png">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="4"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                                <div class="ui tiny label">
                                    Rapide
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui basic grey button">Détails</div>
                                    <div class="ui basic blue button">Réserver</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column resto asiatique dejeuner 3etoiles">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/food3.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="3"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui basic grey button">Détails</div>
                                    <div class="ui basic blue button">Réserver</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column resto 5etoiles local halal">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/food2.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="5"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui basic grey button">Détails</div>
                                    <div class="ui basic blue button">Réserver</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column resto asiatique 5etoiles vege">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/bento.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="5"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                                <div class="ui tiny label">
                                    Rapide
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui basic grey button">Détails</div>
                                    <div class="ui basic blue button">Réserver</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column resto 3etoiles local halal">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/food5.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="3"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                                <div class="ui tiny label">
                                    Rapide
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui basic grey button">Détails</div>
                                    <div class="ui basic blue button">Réserver</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column resto 3etoiles">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/bento.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="3"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui basic grey button">Détails</div>
                                    <div class="ui basic blue button">Réserver</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column resto 3etoiles vege">
                        <div class="ui fluid card" style="margin-bottom:10%;">
                            <div class="image">
                                <img src="Images/vege1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Karaage-ya</a>
                                <div class="meta">
                                    <div class="ui star rating" data-rating="3"></div>
                                </div>
                                <br>
                                <div class="ui tiny label">
                                    Asiatique
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
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
</div>  

<?php 
include ('Includes/footerRestaurants.php');
?>

