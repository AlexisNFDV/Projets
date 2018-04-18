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
        <div class="active section">Activités</div>
    </div>

    <h1 class="ui header container" id="page-title">Activités proche de Casablanca</h1>

    <div class="ui stackable grid container">

        <div class="four wide column middle aligned">
            <select name="skills" multiple="" class="ui fluid dropdown">
                <option value="">Type d'Activités</option>
                <option value="concert">Concerts et spectacles</option>
                <option value="sport">Sports</option>
                <option value="musée">Musées</option>
                <option value="shopping">Shopping</option>
                <option value="transport">Transports</option>
                <option value="casino">Casino</option>
                <option value="Zoo">Zoos et aquariums</option>
                <option value="evenement">Evénements</option>
            </select>
        </div>

        <div class="six wide column center aligned">
            <p>
                <label for="amount">Budget:</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>

            <div id="slider-range"></div>
        </div>

        <div class="six wide column center aligned">
            <p>
                <label for="amount">Distance:</label>
                <input type="text" id="amount2" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>

            <div id="slider-range2"></div>
        </div>

    </div>

    <div class="ui divider container" style="margin:3% 0% 3% 0%;"></div>

    <h3 class="ui container">Résultat</h3>
    
    <div class="ui grid container">

        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="Images/activite4.jpg">
                </div>
                <div class="content">
                    <a class="header">Parc Sindibad</a>
                    <div class="description">
                        Parc d'aventure avec montagnes russes, manèges et zoo abritant des animaux africains et asiatiques.
                    </div>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="Images/activite2.jpg">
                </div>
                <div class="content">
                    <a class="header">Église du Sacré-Cœur de Casablanca</a>
                    <div class="description">
                        L'église du Sacré-Cœur (en arabe : كاتدرائية القلب المقدس ) est un ancien sanctuaire catholique de la ville de Casablanca,
                        au Maroc. Elle est construite à partir de 1930 par l'architecte Paul Tournon1, titulaire du prix
                        de Rome, dans un style mêlant esthétique gothique et Art déco. Elle est entourée d'un vaste jardin
                        public, le Parc de la Ligue Arabe.
                    </div>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="Images/activite5.jpg">
                </div>
                <div class="content">
                    <a class="header">Jazzblanca 2018</a>
                    <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae deserunt id quia voluptate, dignissimos, quod illo error,
                        ea totam asperiores modi nemo eos vero blanditiis maxime facere ab consequuntur. Vitae.
                    </div>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="Images/activite3.jpg">
                </div>
                <div class="content">
                    <a class="header">Palais Royal Habous</a>
                    <div class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae deserunt id quia voluptate, dignissimos, quod illo error,
                        ea totam asperiores modi nemo eos vero blanditiis maxime facere ab consequuntur. Vitae.
                    </div>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui card">
                <div class="image">
                    <img src="Images/activite1.jpg">
                </div>
                <div class="content">
                    <a class="header">Mosquée Hassan-II</a>
                    <div class="description">
                        La mosquée Hassan-II (arabe : مسجد الحسن الثاني (masjid al-Hassan ath-thani)). Érigée en partie sur la mer, elle est un complexe
                        religieux et culturel, aménagé sur neuf hectares et comporte une salle de prières, une salle d'ablutions,
                        des bains, une école coranique (madrasa), une bibliothèque et un musée.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ('Includes/footer.php'); ?>