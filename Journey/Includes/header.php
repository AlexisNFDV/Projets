<body>

	<!-- Sidebar-->
	<div class="ui top attached demo menu">
		<a class="item item2">
			<i class="sidebar icon"></i> Menu
		</a>
		<div id="connexion">
			<div class="medium ui vertical animated fade button" tabindex="0">
				<div class="visible content">
					<i class="shop icon"></i>
				</div>
				<a href="panier.php">
					<div class="hidden content">Shop</div>
				</a>
			</div>
			<div class="medium ui animated button" tabindex="0">
				<div class="visible content">Connexion</div>
				<div class="hidden content">
					<a href="connexion.php">
						<i class="sign in alternate icon"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="ui bottom attached pushable segment">
		<div class="ui inverted labeled icon left inline vertical demo sidebar menu wide" style="background-color: #87CEFA">
			<a class="item" href="index.php">
				<i class="home icon"></i>
				<p id="onglets">Accueil</p>
			</a>

			<div class="ui styled accordion">
				<div class="title" id="accordion">
					<i class="angle down icon" id="avion"></i>
					<p id="onglets">Voyage</p>
				</div>
				<div href="#" class="content" id="accordion">
					<a href="hotels.php" id="accordion2">Hôtel</a>
					<br>
					<a href="choix_transport.php" id="accordion2">Transport</a>
					<br>
					<a href="restaurants.php" id="accordion2">Restaurant</a>
					<br>
					<a href="activites.php" id="accordion2">Activités</a>
				</div>
			</div>

			<a class="item" href="pays.php">
				<i class="archive icon"></i>
				<p id="onglets">Formalités administratives</p>
			</a>
			<a class="item" href="airlines.php">
				<i class="plane icon"></i>
				<p id="onglets">Compagnies aériennes</p>
			</a>
			<a class="item" href="budget.php">
				<i class="euro sign icon"></i>
				<p id="onglets">Budget</p>
			</a>
		</div>
		<div class="pusher">