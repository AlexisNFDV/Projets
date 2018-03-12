<?php

$titre="Devento - Accueil";

require_once("includes/init.php");
include_once("includes/header.php");

?>

<section class="header-bckg">
	<div class="container">
		<h1>Coder plus facilement grâce à Devento</h1>
		<p class="description">Une communauté de développeurs toujours prête à vous aider</p>
		<a class="more" href="#courses">Découvrir nos cours</a>
	</div>
</section>

<section id="courses" class="courses">
	<div class="container">
		<h2>Nos cours</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb html"><i class="devicon-html5-plain"></i></div>
				<h4>HTML</h4>
				<p>Apprenez à créer vos premières pages internet.</p>
				<a class="cat_link" href="category.php?category=HTML">Accéder à cette catégorie</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb css"><i class="devicon-css3-plain"></i></div>
				<h4>CSS</h4>
				<p>Apprenez à mettre en page vos sites webs.</p>
				<a class="cat_link" href="category.php?category=CSS">Accéder à cette catégorie</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb js"><i class="devicon-javascript-plain"></i></div>
				<h4>JavaScript</h4>
				<p>Apprenez à dynamiser vos pages internet.</p>
				<a class="cat_link" href="category.php?category=JavaScript">Accéder à cette catégorie</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb php"><img src="assets/images/logo-php.png" width="90px" alt=""></div>
				<h4>PHP</h4>
				<p>Apprenez à gérer vos pages côté serveur avec MySQL</p>
				<a class="cat_link" href="category.php?category=PHP">Accéder à cette catégorie</a>
			</div>
		</div>
	</div>
</section>

<section class="students text-center gray-bckg">
	<div class="container">

		<h2>Nos utilisateurs en parlent</h2>
		<div class="row text-center">

			<div class="col-md-4 mb-r">

				<div class="testimonial">
					<div class="avatar_index">
						<img src="assets/images/person_2.png" class="rounded-circle z-depth-1 img-fluid">
					</div>
					<h4>Anna Deynah</h4>
					<h6>Web Designer</h6>
					<p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>

					<div>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star-half-full"> </i>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimonial">
					<div class="avatar_index">
						<img src="assets/images/person-flat.png"  class="rounded-circle">
					</div>
					<h4>John Doe</h4>
					<h6>Web Developer</h6>
					<p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

					<div>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimonial">
					<div class="avatar_index">
						<img src="assets/images/person_3.png"  class="rounded-circle z-depth-1 img-fluid">
					</div>
					<h4 >Jason Christopher</h4>
					<h6>Photographer</h6>
					<p><i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
					<div>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star"> </i>
						<i class="fa fa-star-o"> </i>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="partners text-center">
	<div class="container">
		<h2>Ils nous font confiance</h2>
		<div class="row">
			<div class="col-md-3"><img src="assets/images/fb-wordmark.png" alt="" width="150px"></div>
			<div class="col-md-3"><img src="assets/images/ingesup-logo.png" alt="" width="150px"></div>
			<div class="col-md-3"><img src="assets/images/Google_logo.png" alt="" width="150px"></div>
			<div class="col-md-3"><img src="assets/images/Behance_logo.png" alt="" width="150px"></div>
		</div>
	</div>
</section>

<?php include_once("includes/footer.php");?>
