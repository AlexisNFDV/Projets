<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="/assets/icons/favicon.ico">

  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport">
  <title><?= $titre; ?></title>
  <link rel="stylesheet" href="/assets/font_icons/icon_sets.css">
  <link rel="stylesheet" href="/assets/prism/prism.css">
  <link rel="stylesheet" href="/assets/devicon/devicon.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body class="colored">
  <main class="main">
    <nav class="navbar navbar-default navbar-custom navbar-static-top">   

      <div class="container">
        <a class="navbar-brand" href="/index.php"><img src="/assets/icons/logo_devento.png" width="150px"></a> 
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/index.php">Accueil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catégories <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="css-link cat-link" href="/category.php?category=<?="CSS"?>">CSS</a></li>
                <li><a class="php-link cat-link" href="/category.php?category=<?="PHP"?>">PHP</a></li>
                <li><a class="js-link cat-link" href="/category.php?category=<?="JavaScript"?>">JavaScript</a></li>
                <li><a class="html-link cat-link" href="/category.php?category=<?="HTML"?>">HTML</a></li>
              </ul>
            </li>
            <li><a href="/latest_posts.php">Derniers Posts</a></li>
            <li><a href="/contact.php">Contact</a></li>
            <li class="search-nav">
              <div class="navbar-form navbar-left" role="search">
                <div class="input-group">
                  <i class="socicon-icon-search custom-icon"></i>
                  <input id="search-input" type="text" class="form-control search-form" name="search-input" placeholder="Rechercher">
                </div>
              </div>
            </li>
          </ul>

          <?php 
          //Vérifier si l'utilisateur est connécté (localsession)
          //si il est connecté affiche un menu dropdown 
          if (isset($_SESSION) && isset($_SESSION['connected'])) : 
            //recupère les infos de l'user
            $req = $dbh->query("select * FROM users WHERE id = '".$_SESSION["id"]."'");
            $data = $req->fetch();
            //récupère son image de profil
            $user_image = $data['profile_picture'];
            ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/<?= $user_image;?>" class="avatar-icon img-circle"><?=$data['username'];?>
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <?php if (isset($_SESSION['admin']) || $data['level']>=1 ) :?>
                      <li><a href="/panel_admin/pages/index.php"><i class="socicon-dashboard custom-icon"></i>Dashboard</a></li>
                    <?php endif;?>
                    <li><a href="/profile.php?id=<?=$_SESSION['id'];?>"><i class="socicon-users custom-icon"></i>Mon profil</a></li>
                    <li><a href="/account.php"><i class="socicon-settings custom-icon"></i>Mon compte</a></li>
                    <li><a href="/add_post.php"><i class="socicon-file-add custom-icon"></i>Ajouter un post</a></li>
                    <li><a href="/posts.php?id=<?=$_SESSION['id'];?>"><i class="socicon-eye custom-icon"></i>Voir mes posts</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/logout.php"><i class="socicon-logout custom-icon"></i>Déconnexion</a></li>
                  </ul>
                </li>
              </ul>
            <?php else : ?>
              <ul class="nav navbar-nav navbar-right extra-links">
                <li><a href="signup.php" class="btn-like-link">Inscription</a></li>
                <li><a href="login.php" class="btn-like-link1">Connexion</a></li>
              </ul>

            <?php endif;?>
          </div><!--/.nav-collapse -->
        </div>  
        <div id="result"></div>
      </nav>
