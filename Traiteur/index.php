<?php

$titre="CaD - Accueil";

require_once("includes/init.php");
include_once("includes/header.php");

?>


<section class="header-bckg">
	<div class="container">
		<h1>Découvrez la gastronomie mondiale chez vous</h1>
		<p class="description">Des chefs d'exception à votre disposition</p>
		<a class="more" href="#courses">Recommandations</a>
	</div>
</section>

<section id="courses" class="courses">
	<div class="container">
		<h2>Recommandations</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb"><img src="assets/images/italy.png" width="150px" alt=""></div>
				<h4>Italien</h4>
				<p>Découvrez les délices de la pizza et des pâtes.</p>
				<a class="cat_link" href="liste-traiteurs.php?pays=Italy">Accéder à cette catégorie</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb"><img src="assets/images/japan.png" width="150px" alt=""></div>
				<h4>Japonais</h4>
				<p>Découvrez les mystères des sushis et des makis.</p>
				<a class="cat_link" href="liste-traiteurs.php?pays=Japan">Accéder à cette catégorie</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb"><img src="assets/images/states.png" width="150px" alt=""></div>
				<h4>Américain</h4>
				<p>Découvrez la richesse gastronomique de la cuisine Américaine.</p>
				<a class="cat_link" href="liste-traiteurs.php?pays=United%20States">Accéder à cette catégorie</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="thumb"><img src="assets/images/france.png" width="150px" alt=""></div>
				<h4>Français</h4>
				<p>Découvrez le raffinement à la française.</p>
				<a class="cat_link" href="liste-traiteurs.php?pays=France">Accéder à cette catégorie</a>
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
			<div class="col-md-3"><img src="assets/images/delivroo.png" alt="" width="150px"></div>
		</div>
	</div>
</section>

<?php include_once("includes/footer.php");?>
