<?php 


$titre="Devento - Derniers Posts";

require_once("includes/init.php");

$ref = $dbh->prepare('SELECT * FROM memo, users WHERE is_validate = :is_validate AND memo.id_user=users.id ORDER BY memo.creation_date DESC');
$ref->execute([':is_validate' => 1]);
$res = $ref->fetchAll();


function limit_words($string, $word_limit)
{
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit))."...";
}

include_once("includes/header.php");

?>
<div class="hr-title">
	<h1 class="page-title">Derniers Posts</h1>
</div>
<div class="container standard">
	<div class="row posts">
		<?php
		foreach ($res as $post) : ?>
		<div class="col-md-8 col-md-offset-2 post">
			<?php if ($post["category"] === "HTML") :?>
				<div class="card-title html-card">
					<a href="category.php?category=HTML" class="card-title-link">HTML</a>
					<span class="category"><img src="/assets/devicon/icons/html5/html5-original.svg" alt=""></span></div>
				<?php elseif ($post["category"] === "PHP") :?>
					<div class="card-title php-card">
						<a href="category.php?category=PHP" class="card-title-link">PHP</a>
						<span class="category"><img class="php-img" src="/assets/devicon/icons/php/php-logo.png" alt=""></span></div>
					<?php elseif ($post["category"] === "JavaScript") :?>
						<div class="card-title js-card">
							<a href="category.php?category=JavaScript" class="card-title-link">JavaScript</a>
							<span class="category"><img src="/assets/devicon/icons/javascript/js-logo.png" width="70px" alt=""></span></div>
						<?php elseif ($post["category"] === "CSS") :?>
							<div class="card-title css-card">
								<a href="category.php?category=CSS" class="card-title-link">CSS</a>
								<span class="category"><img src="/assets/devicon/icons/css3/css3-original.svg" alt=""></span></div>
							<?php endif; ?>
							<div>
								<h2 class="title"><a href="cours.php?id=<?=$post[0];?>"><?php echo $post['title'];?></a></h2>
								<p class="content"><?= limit_words(strip_tags(htmlspecialchars_decode( $post['content'])),40);?></p>
								<span class="author"><a href="profile.php?id=<?=$post['id'];?>"><?= $post['username'];?></a></span>
							</div>
						</div>
					<?php endforeach ;?>
				</div>
			</div>

			<?php include_once("includes/footer.php");?>