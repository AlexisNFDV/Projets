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
        <div class="active section">Hotels</div>
    </div>

    <h1 class="ui header container" id="page-title">Hotels proche de Casablanca</h1>

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
                    <label>Arrivée</label>
                    <div class="ui calendar" id="rangestart">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Start">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Départ</label>
                    <div class="ui calendar" id="rangeend">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="End">
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
                    <label>Wifi gratuit</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Piscine</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Parking gratuit</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Spa</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="clim">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Climatisation</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Accès handicapés</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Room service</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Animaux autorisés</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox" id="sport">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>Salle de sport</label>
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
            <h3>Etoiles
                <i class="caret down icon"></i>
            </h3>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>5 Etoiles</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>4 Etoiles</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>3 Etoiles</label>
                </div>
            </div>
            <div class="inline field service-item">
                <div class="ui checkbox">
                    <input tabindex="0" class="hidden" type="checkbox">
                    <label>2 Etoiles</label>
                </div>
            </div>
        </div>
        <div class="twelve wide column">
            <h1>Résutlats</h1>
            <div class="ui items">
                <div class="item hotel 3etoiles sport clim">
                    <div class="image">
                        <img src="Images/hotel1.jpg">
                    </div>
                    <div class="content">
                        <a class="header">Pestana Casablanca</a>
                        <div class="meta">
                            <div class="ui star rating" data-rating="3"></div>
                            <span class="price">A partir de €40/nuit</span>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, sit sint? Fugit amet laboriosam
                                eligendi obcaecati fuga officia sed enim officiis, magnam tempore reiciendis dolor ratione!
                                Impedit cumque molestiae accusantium!</p>
                        </div>
                        <div class="extra">
                            <div class="ui buttons right floated">
                                <div class="ui basic grey button">Détails</div>
                                <div class="ui basic blue button">Réserver</div>
                            </div>
                            <div class="ui label">Limited</div>
                        </div>
                    </div>
                </div>
                <div class="item hotel 5etoiles sport clim">
                    <div class="image">
                        <img src="Images/hotel2.jpg">
                    </div>
                    <div class="content">
                        <a class="header">Four Seasons</a>
                        <div class="meta">
                            <div class="ui star rating" data-rating="5"></div>
                            <span class="price">A partir de €140/nuit</span>
                        </div>
                        <div class="description">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                                aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                                sint? Impedit, eaque! Labore, odio laborum.</p>
                        </div>
                        <div class="extra">
                            <div class="ui buttons right floated">
                                <div class="ui basic grey button">Détails</div>
                                <div class="ui basic blue button">Réserver</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item hotel 4etoiles sport clim">
                    <div class="image">
                        <img src="Images/hotel3.jpg">
                    </div>
                    <div class="content">
                        <a class="header">Hôtel Mövenpick Casablanca</a>
                        <div class="meta">
                            <div class="ui star rating" data-rating="4"></div>
                            <span class="price">A partir de €90/nuit</span>
                        </div>
                        <div class="description">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                                aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                                sint? Impedit, eaque! Labore, odio laborum.</p>
                        </div>
                        <div class="extra">
                            <div class="ui buttons right floated">
                                <div class="ui basic grey button">Détails</div>
                                <div class="ui basic blue button">Réserver</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item hotel 3etoiles">
                    <div class="image">
                        <img src="Images/hotel4.jpg">
                    </div>
                    <div class="content">
                        <a class="header">Kenzi Basma Hotel</a>
                        <div class="meta">
                            <div class="ui star rating" data-rating="3"></div>
                            <span class="price">A partir de €45/nuit</span>
                        </div>
                        <div class="description">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                                aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                                sint? Impedit, eaque! Labore, odio laborum.</p>
                        </div>
                        <div class="extra">
                            <div class="ui buttons right floated">
                                <div class="ui basic grey button">Détails</div>
                                <div class="ui basic blue button">Réserver</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item hotel 3etoiles clim">
                    <div class="image">
                        <img src="Images/hotel5.jpg">
                    </div>
                    <div class="content">
                        <a class="header">Hyatt Regency Casablanca</a>
                        <div class="meta">
                            <div class="ui star rating" data-rating="3"></div>
                            <span class="price">A partir de €45/nuit</span>
                        </div>
                        <div class="description">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe ipsum magnam officia
                                aspernatur libero laborum natus placeat. Eaque similique itaque praesentium, accusamus laudantium
                                sint? Impedit, eaque! Labore, odio laborum.</p>
                        </div>
                        <div class="extra">
                            <div class="ui buttons right floated">
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

<?php include ('Includes/footerHotels.php'); ?>