<?php 

$titre="Devento - Ajouter un post";

require_once("includes/init.php");



if (!$_SESSION['connected']) {
	header('Location:login.php');
}


if (!empty($_POST['submit'])) {
	if (!empty(trim($_POST['title'])) && !empty(trim($_POST['category'])) && !empty(trim($_POST['content']))){

		$ref = $dbh->prepare('INSERT INTO memo (title,content,category,creation_date,is_validate,id_user) VALUES(:title,:content,:category,Now(),:is_validate,:id_user)');
		$ref->execute([
			':title' => htmlspecialchars($_POST['title']),
			':content' => htmlspecialchars($_POST['content']),
			':category' => htmlspecialchars($_POST['category']),
			':is_validate' => 0,
			':id_user' => htmlspecialchars($_SESSION['id'])
		]);
	}
}

include_once("includes/header.php");
?>

<div class="container form-post">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 form-custom">
			<h2 class="img-header">
				<img class="img-logo" src="assets/icons/logo_devento.png" />
				<div class="content">
					Ajouter un post
				</div>
			</h2>
			<div class="howto">
				<h2>Comment faire ?</h2>
				<p>
					Choisissez la catégorie dans laquelle vous voulez poster votre article. Ensuite cliquez sur Insérer et Extrait de code pour rajouter votre code dans n'importe quel language. Enfin cliquez sur Ajouter. Et voilà c'est fini.
				</p>
			</div>
			<form method="POST" action="">
				<div class="form-group">
					<label for="category">Titre</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="category">Catégorie</label>
					<select class="form-control" name="category">
						<option selected>Choisissez une catégorie</option>
						<option value="HTML">HTML</option>
						<option value="CSS">CSS</option>
						<option value="JavaScript">JavaScript</option>
						<option value="PHP">PHP</option>
						<option value="Base de données">Base de données</option>
					</select>
				</div>
				<div class="form-group">
					<label for="content">Contenu</label>
					<textarea id="content" type="text" class="form-control" name="content"></textarea>
				</div>
				<div class="text-center submit-button">
					<input type="submit" class="btn-custom bttn-jelly bttn-md" name="submit" value="Ajouter">
				</div>
				<div class="suggestion">
				</div>
			</form>
		</div>
	</div>
</div>

<?php
include_once("includes/footer.php");
?>