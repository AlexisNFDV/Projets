<?php 


$titre="CaD - Derniers Posts";

require_once("includes/init.php");

$ref = $dbh->prepare('SELECT * FROM memo, users WHERE memo.id_user=users.id ORDER BY memo.creation_date DESC');
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
        <h1 class="page-title">Dernières annonces</h1>
    </div>
    <div class="container standard">
        <div class="row posts">
            <?php
            foreach ($res as $post) : ?>
                <div class="col-md-8 col-md-offset-2 post">
                    <div>
                        <h2 class="title"><a href="offre.php?id=<?=$post[0];?>"><?php echo $post['title'];?></a></h2>
                        <p class="content"><?= limit_words(strip_tags(htmlspecialchars_decode( $post['content'])),40);?></p>
                        <span class="author"><a href="profile.php?id=<?=$post['id'];?>"><?= $post['username'];?></a></span>
                    </div>
                </div>
            <?php endforeach ;?>
        </div>
    </div>

<?php include_once("includes/footer.php");?>