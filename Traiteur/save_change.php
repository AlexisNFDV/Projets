<?php
require_once("includes/init.php");

if (!empty($_POST)) {

    //récupération des infos d'origine de l'user
    $get_user = $dbh->prepare('SELECT * FROM users WHERE id = :id ');
    $get_user->execute(
        array(
            'id' => $_SESSION['id']
        )
    );

    $user = $get_user->fetch();


    var_dump(   $user );
    if ((!empty($_FILES['file_img']['name'])) && ($_POST['file_img'] != $user[8])) {
        if ($user[8] !== 'profile_picture/default-avatar.png') {
          unlink($user[8]);
      }
      $file = $_FILES['file_img']['name'];
      $file_loc = $_FILES['file_img']['tmp_name'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // Vérifie le type MIME du fichier
        $mime = finfo_file($finfo, $file_loc); // Regarde dans ce fichier le type MIME
        finfo_close($finfo); // Fermeture de la lecture

        $filename = explode('.', $_FILES['file_img']['name']); // Explosion du nom sur le point
        $extension = $filename[count($filename) - 1]; // L'extension du fichier

        if ([$extension == 'jpg' && $mime == 'image/jpeg'] || [$extension == 'png' && $mime == 'image/png'] || [$extension == 'gif' && $mime == 'image/gif']) {
            move_uploaded_file($_FILES['file_img']['tmp_name'], 'profile_picture/' . $file);
            $chemin = 'profile_picture/' . $file;
        }
        $chemin = 'profile_picture/' . $file;

        $req = $dbh->prepare('UPDATE users SET profile_picture = :profile_picture WHERE id = :id');
        $req->execute([
            ':profile_picture' => $chemin,
            ':id' => $_SESSION['id']
        ]);
    }

    //si la bio est modifié enregistrer la nouvelle
    if (!empty($_POST['bio']) && $_POST['bio'] != $user[4]) {
        $req = $dbh->prepare('UPDATE users SET bio = :bio WHERE id = :id');
        $req->execute([
            ':bio' => htmlspecialchars($_POST['bio']),
            ':id' => $_SESSION['id']
        ]);

    }

    //si le nom d'utilisateur est modifié enregistrer la nouvelle
    if (!empty($_POST['username']) && $_POST['username'] != $user[3]) {
        $req = $dbh->prepare('UPDATE users SET username = :username WHERE id = :id');
        $req->execute([
            ':username' => htmlspecialchars($_POST['username']),
            ':id' => $_SESSION['id']
        ]);
    }

    //si la date de naissance est modifié enregistrer la nouvelle
    if (!empty($_POST['birth']) && $_POST['birth'] != $user[5]) {
        $req = $dbh->prepare('UPDATE users SET birthday = :birth WHERE id = :id');
        $req->execute([
            ':birth' => htmlspecialchars($_POST['birth']),
            ':id' => $_SESSION['id']
        ]);
    }

        header("Location: profile.php?id=" . $_SESSION['id']);

} else {
        header("Location: profile.php?id=" . $_SESSION['id']);
}
?>