<?php 

$titre="Devento - Mes posts";

require_once("includes/init.php");
require_once("includes/header.php");

function limit_words($string, $word_limit)
{
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit))."...";
}

if (!empty($_GET)) {

	$id_user = $_GET["id"];
	$id_connected = $_SESSION['id'];
	
	// Si le profile a consulter est le sien
	if ($id_user = $id_connected) {

		$get_post = $dbh->prepare('SELECT * FROM memo WHERE id_user = :id_user');
		$get_post->execute(
			array(
				'id_user' => $id_user
			)
		);
		$post = $get_post->fetchAll();?>
		<div class="hr-title">
			<h1 class="page-title">Mes Posts</h1>
		</div>
		<div class="container standard">
			<div class="row">
				<?php if (count($post)>0) {

					foreach ($post as $item) { ?>
					<div class="col-md-8 col-md-offset-2 post">
						<?php if ($item["category"] === "HTML") :?>
							<div class="card-title html-card"><a href="category.php?category=HTML" class="card-title-link">HTML</a>
								<span class="category"><img src="/assets/devicon/icons/html5/html5-original.svg" alt=""></span>
							</div>
						<?php elseif ($item["category"] === "PHP") :?>
							<div class="card-title php-card">
								<a href="category.php?category=PHP" class="card-title-link">PHP</a>
								<span class="category"><img class="php-img" src="/assets/devicon/icons/php/php-logo.png" alt=""></span>
							</div>
						<?php elseif ($item["category"] === "JavaScript") :?>
							<div class="card-title js-card">
								<a href="category.php?category=JavaScript" class="card-title-link">JavaScript</a>
								<span class="category"><img src="/assets/devicon/icons/javascript/js-logo.png" width="70px" alt=""></span>
							</div>
						<?php elseif ($item["category"] === "CSS") :?>
							<div class="card-title css-card">
								<a href="category.php?category=CSS" class="card-title-link">CSS</a>
								<span class="category"><img src="/assets/devicon/icons/css3/css3-original.svg" alt="">
								</span>
							</div>
						<?php endif; ?>
						<div>
							<h2 class="title">
								<a href="cours.php?id=<?= $item[0] ?>&profil=Y"><?= $item['title'];?></a></h2>
								<p class="content"><?= limit_words(strip_tags(htmlspecialchars_decode( $item['content'])),40);?></p>
							</div>
						</div>

						<?php
					}
				}else { ?>
				<div class="col-md-8 col-md-offset-2 post">
					<div>
						<div>								
							<p class="content">Vous n'avez aucun post</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
	}
} else {
	header("Location: index.php");
}

} else {
	header("Location: index.php");
}
require_once("includes/footer.php");

?>