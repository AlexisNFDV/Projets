<?php 
include ('Includes/head.php');
include ('Includes/header.php'); 
?>

<div class="ui basic segment fond">
	<div class="ui internally celled grid">

		<?php
		/*
		$test = $dhb-> prepare('SELECT * FROM hotel');
		$test->execute();
		$all = $test->fetchAll();

		foreach ($all as $key) {

		*/?>
		<div class="row">
			<div class="eight wide column">
				<div class="ui card">
					<div class="content">
						<div class="header">Paris-Lyon</div>
						<div class="meta">
							<span class="category">Quai 3</span>
							<span class="right floated time">Aller-Retour</span>
						</div>
						<div class="description">
							<p>Départ : 18h50</p>
							<p>Arrivée : 20h</p>
						</div>
					</div>
					<div class="extra content">
						<i class="users icon"></i>
						3 Personnes
						<div class="right floated author">
							15 Janvier 2018
						</div>
					</div>
					<div class="extra content">
						<div class="ui vertical animated inverted red button" tabindex="0">
							<div class="hidden content">Supprimer</div>
							<div class="visible content">
								<i class="trash icon"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="eight wide column">
				<div class="ui card">
					<div class="content">
						<div class="header">Escalade</div>
						<div class="meta">
							<span class="category">15 Aout 2018</span>
						</div>
						<div class="description">
							<p>Début : 14h</p>
							<p>Fin prévue : 18h</p>
						</div>
					</div>
					<div class="extra content">
						<i class="users icon"></i>
						2 Personnes
						<div class="right floated author">
							Lieu : Alpes
						</div>
					</div>
					<div class="extra content">
						<div class="ui vertical animated inverted red button" tabindex="0">
							<div class="hidden content">Supprimer</div>
							<div class="visible content">
								<i class="trash icon"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="eight wide column">
				<div class="ui card">
					<div class="content">
						<div class="header">Le Palace</div>
						<div class="meta">
							<span class="category">Du : 18/04</span>
							<span class="right floated time">Au : 20/04</span>
						</div>
						<div class="description">
							<p>Réservation au nom de : Pierre-Henry Archer</p>
							<p>2 Nuits</p>
						</div>
					</div>
					<div class="extra content">
						<i class="users icon"></i>
						4 Personnes
						<div class="right floated author">
							Lieu : Marseille
						</div>
					</div>
					<div class="extra content">
						<div class="ui vertical animated inverted red button" tabindex="0">
							<div class="hidden content">Supprimer</div>
							<div class="visible content">
								<i class="trash icon"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="eight wide column">	
				<div class="ui card">
					<div class="content">
						<div class="header">Le homard volant</div>
						<div class="meta">
							<span class="category"></span>
						</div>
						<div class="description">
							<p>Réservation pour le 19/04 </p>
							<p>19H</p>
						</div>
					</div>
					<div class="extra content">
						<i class="users icon"></i>
						2 Personnes
						<div class="right floated author">
							Lieu: Nice
						</div>
					</div>
					<div class="extra content">
						<div class="ui vertical animated inverted red button" tabindex="0">
							<div class="hidden content">Supprimer</div>
							<div class="visible content">
								<i class="trash icon"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="massive positive ui vertical animated button" id="validation" tabindex="0">
		<div class="hidden content">Payer</div>
		<div class="visible content">
			<i class="shop icon"></i>
		</div>
	</div>


	<?php
	include ('Includes/footer.php')
	?>

</div>