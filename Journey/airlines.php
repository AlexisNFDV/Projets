<?php 
include ('Includes/head.php');
include ('Includes/header.php'); 
?>

<div class="ui basic segment air">

<section id="selection">
    <h1>Besoin d'informations sur votre compagnie aérienne ?</h1>
    <h4>Choisissez celle qui vous intéresse et lisez ce dont vous avez besoin !</h4>
    <div class="ui fluid search selection dropdown">
	<input type="hidden" name="country" id="airlines">
	<i class="dropdown icon"></i>
	<div class="default text">Choisissez votre compagnie</div>
	<div class="menu">
        <div class="item" data-value="ae">Aegean Airlines</div>
        <div class="item" data-value="al">Aer Lingus</div>
        <div class="item" data-value="ca">Air Canada</div>
        <div class="item" data-value="ai">Air Europa</div>
        <div class="item" data-value="am">American Airways</div>
        <div class="item" data-value="af">Air France</div>
        <div class="item" data-value="br">British Airways</div>
        <div class="item" data-value="ch">China Airlines</div>
        <div class="item" data-value="de">Delta Airlines</div>
        <div class="item" data-value="ej">Easy Jet</div>
        <div class="item" data-value="em">Emirates</div>
        <div class="item" data-value="ib">Iberia</div>
        <div class="item" data-value="kl">KLM</div>
        <div class="item" data-value="lu">Lufthansa</div>
        <div class="item" data-value="ol">Olympic Airways</div>
        <div class="item" data-value="qa">Qantas</div>
        <div class="item" data-value="qa">Qatar Airways</div>
        <div class="item" data-value="si">Singapore Airlines</div>
        <div class="item" data-value="sw">Swiss</div>
        <div class="item" data-value="un">United Airlines</div>
        <div class="item" data-value="vu">Vueling</div>
	</div>
</div>
<div class="ui grid" style="margin-top: 50px; text-align: center">
    <div class="four wide column">
        <img src="Images/Compagnies/aegean.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/aerlingus.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/canadair.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/aireuropa.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/american.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/airfrance.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/british.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/china.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/Lufthansa.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/quantas.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/singapore.png" alt="aegean" class="logo_compagnies">
    </div>
    <div class="four wide column">
        <img src="Images/Compagnies/swiss.png" alt="aegean" class="logo_compagnies">
    </div>
</div>
</section>
            
<div class="ui longer test modal transition hidden">
	<div class="header">
		Informations des compagnies aériennes
	</div>
	<div class="scrolling image content">
		<div class="ui medium image">
			<div class="ui vertical pointing menu">
				<a class="active item premier">
					Services et Bagages
				</a>
				<a class="item second">
					Enregistrement
				</a>
				<a class="item troisieme">
					Animaux
				</a>
			</div>
		</div>
		<div class="description">
			<div class="ui header">Air France</div>
			<div id="first">
            <span>
                <b>Services à bord :</b> Repas et boissons inclus dans le billet.
            </span><br>
            <h3>Infos bagages :</h3> 
            <span>
                <b>Bagage en soute :</b> <br>
                De 1 à 2 bagages de 20 kg chacun, selon la destination et la classe <br>
            </span><br>
            <span>
                <b>Bagage à main :</b> <br>
                1 bagage + 1 pochette type ordinateur portable (ou sac à main) = 12 kg max <br>
            </span><br>
            <span>
                <b>Prix kg supplémentaires : </b> <br>
                Le prix change selon la destination <br>
                Sauf pour la France continentale et la Corse = 1,50 € par kg <br>
            </span>
            </div>
			<div id="two">
            <span>
                <h3>Hub :</h3> 
                Air France opère principalement depuis l'aéroport de Paris - Charles de Gaulle (CDG). <br>
                Paris - Charles De Gaulle (CDG / LFPG) <br>
            </span><br>
            <span>
                <h3>Enregistrement &amp; Embarquement :</h3>
                Prévoyez d'être à l’aéroport 2 h avant le départ de votre vol pour vous enregistrer, déposer vos bagages et effectuer sereinement toutes les formalités de police et de sûreté. <br>
                <br>
                Gardez l'heure de fin d'embarquement à l'esprit. C'est le moment au-delà duquel vous ne pouvez plus accéder à l'avion : <br>
                <b>15 minutes</b> avant le départ, entre Paris-Orly et les destinations en <b>France métropolitaine</b>. <br>
                <b>20 minutes</b> avant le départ, pour tous les <b>autres vols</b>. <br>
            </span>
            </div>
			<div id='third'>
            <span>
                <h3>Animaux :</h3>
                Pour être admis à bord, votre animal doit avoir tous ses vaccins à jour. <br>
                Tout chien ou chat voyageant au sein de l'Union européenne doit être identifié au moyen d’une puce électronique. Il doit également être muni d'un passeport européen. Fourni et rempli par un vétérinaire habilité, ce passeport permet d'identifier votre animal et atteste qu’il est dûment vacciné. <br>
                Attention : pour les voyages à destination de l'Irlande, la Suède, le Royaume-Uni ou Malte, des conditions sanitaires supplémentaires sont requises. Nous vous recommandons de vous renseigner auprès de l'ambassade de votre pays de destination. <br>
                Pour vos voyages en dehors de l’Union européenne, pensez à vous renseigner sur les réglementations en vigueur dans les pays d'origine et d'arrivée (vaccinations, quarantaine, etc.).
            </span>
            </div>
		</div>
	</div>
	<div class="actions">
		<div class="ui primary approve button">
			Retour
			<i class="right chevron icon"></i>
		</div>
	</div>
</div>

    <?php
    include ('Includes/footer.php')
    ?>

</div>