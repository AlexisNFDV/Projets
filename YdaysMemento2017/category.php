<?php


$titre="Devento - Catégorie";

require_once("includes/init.php");
include_once("includes/header.php");



function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit))."...";
}

if (!empty($_GET)) {

    if($_GET["category"] === "HTML"){

        $titre = $dbh->prepare('SELECT * FROM memo, users WHERE category = :category AND is_validate = :is_validate AND memo.id_user=users.id');
        $titre->execute([':category' => "HTML", ':is_validate' => 1]);
        $all_category = $titre->fetchAll();

        $get = "category=HTML";

    }

    elseif($_GET["category"] === "CSS"){

        $titre = $dbh->prepare('SELECT * FROM memo, users WHERE category = :category AND is_validate = :is_validate AND memo.id_user=users.id');
        $titre->execute([':category' => "CSS", ':is_validate' => 1]);
        $all_category = $titre->fetchAll();

        $get = "category=CSS";

    }

    elseif($_GET["category"] === "JavaScript"){

        $titre = $dbh->prepare('SELECT * FROM memo, users WHERE category = :category AND is_validate = :is_validate AND memo.id_user=users.id');
        $titre->execute([':category' => "JavaScript", ':is_validate' => 1]);
        $all_category = $titre->fetchAll();

        $get = "category=JavaScript";

    }

    elseif($_GET["category"] === "PHP"){

        $titre = $dbh->prepare('SELECT * FROM memo, users WHERE category = :category AND is_validate = :is_validate AND memo.id_user=users.id');
        $titre->execute([':category' => "PHP", ':is_validate' => 1]);
        $all_category = $titre->fetchAll();

        $get = "category=PHP";
    } 
}
?> 
<div class="hr-title">
    <h1 class="page-title">Catégorie <?= $_GET["category"]?></h1>
</div>

<div class="container standard">
    <div class="row">
        <?php 
        if (isset($all_category)) :
            foreach ($all_category as $item) : ?>
            <div class="col-md-8 col-md-offset-2 post">
                <?php if ($_GET["category"] === "HTML") :?>
                    <div class="card-title html-card">
                        <a href="category.php?category=HTML" class="card-title-link">HTML</a>
                        <span class="category"><img src="/assets/devicon/icons/html5/html5-original.svg" alt=""></span></div>
                    <?php elseif ($_GET["category"] === "PHP") :?>
                        <div class="card-title php-card">
                            <a href="category.php?category=PHP" class="card-title-link">PHP</a>
                            <span class="category"><img class="php-img" src="/assets/devicon/icons/php/php-logo.png" alt=""></span></div>
                        <?php elseif ($_GET["category"] === "JavaScript") :?>
                            <div class="card-title js-card">
                                <a href="category.php?category=JavaScript" class="card-title-link">JavaScript</a>
                                <span class="category"><img src="/assets/devicon/icons/javascript/js-logo.png" width="70px" alt=""></span></div>
                            <?php elseif ($_GET["category"] === "CSS") :?>
                                <div class="card-title css-card">
                                    <a href="category.php?category=CSS" class="card-title-link">CSS</a>
                                    <span class="category"><img src="/assets/devicon/icons/css3/css3-original.svg" alt=""></span></div>
                                <?php endif; ?>
                                <div>
                                    <h2 class="title"><a href="cours.php?id=<?= $item[0] ?>"><?= $item['title'];?></a></h2>
                                    <p class="content"><?= limit_words(strip_tags(htmlspecialchars_decode( $item['content'])),40);?></p>
                                    <span class="author"><a href="profile.php?id=<?=$item['id'];?>"><?= $item['username'];?></a></span>
                                </div>
                            </div>

                        <?php endforeach;?>
                    </div>
                </div>
            <?php else:

            header('Location:index.php');

        endif;
        include_once("includes/footer.php");
        ?>