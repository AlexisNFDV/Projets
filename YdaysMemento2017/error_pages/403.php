<?php 

$titre="403 - Access Denied";

require_once("../includes/init.php");
include_once("../includes/header.php");


?>

<div class="container standard error-page">
	<div class="row">
		<div class="col-md-12">
			<p class="text-center error-message">Erreur: 403 Accès Refusé </p>
			<img src="/error_pages/img/403-error.png" class="error-img img-responsive" alt="">
		</div>
		<div>
			<a href="/" class="btn-custom bttn-jelly bttn-md">Accueil</a>
		</div>
	</div>
</div>

<?php
include_once("../includes/footer.php");

?>
