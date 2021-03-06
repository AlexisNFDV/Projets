<?php 

$titre="CaD - Mon profil";

require_once("includes/init.php");
require_once("includes/header.php");

$all_user = $dbh->prepare('SELECT id FROM users');
$all_user->execute();
$all = $all_user->fetchAll();

// store id users
for ($i = 0; $i < count($all); $i++) {
	$alls[]=$all[$i][0];
}
if (!empty($_GET) && in_array($_GET['id'], $alls) ) {
	$id_user = $_GET["id"];
	if (isset($_SESSION['id'])) {
		$id_connected = $_SESSION['id'];

	// Si le profile a consulter est le sien
		if ($id_user != $id_connected) {
		//récupération des info de l'user
			$get_user = $dbh->prepare('SELECT * FROM users WHERE id = :id');
			$get_user->execute(
				array(
					'id' => $id_user
				)
			);
			$user = $get_user->fetch();
		}

			else{
				$get_user = $dbh->prepare('SELECT * FROM users WHERE id = :id');
			$get_user->execute(
				array(
					'id' => $id_connected
				)
			);
			$user = $get_user->fetch();

			

			}

			?>
			<div class="container pgprofile">
				<div class="row">
					<div class="col-lg-3 info-user">
						<div class="text-center">
							<img src="<?php echo $user['profile_picture']; ?>" class="avatar text-center img-circle">
							<p><?php echo $user[3]; ?></p>
							<p>
								<?php 
							//calcule de l'age avec la date de naissance
								if ($user[5]) {
									$age = round((time() - strtotime($user[5])) / 3600 / 24 / 365, 0, PHP_ROUND_HALF_DOWN);
									echo "$age ans";
								}?>
							</p>
							<p class="date_sign">Membre depuis le <?php echo date_format(date_create($user[10]),'d-m-Y'); ?></p>
							<button type="button" class="btn btn-default" OnClick="window.location.href='edit_profile.php'">Editer</button>
						</div>
					</div>
					<div class="col-lg-7 col-lg-offset-1">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">En quelques mots...</h3>
							</div>
							<div class="panel-body">
								<p>
									<?php 

									if (!empty($user['bio'])) {
										echo $user['bio'];
									}else{
										echo "Vous n'avez pas de description";
									}
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
	}else{
		$dup_user = $dbh->prepare('SELECT * FROM users WHERE id = :id ');
		$dup_user->execute(
			array(
				'id' => $id_user
			)
		);
		$a_user = $dup_user->fetch(); ?>

		<div class="container pgprofile">
			<div class="row">
				<div class="col-lg-3 info-user">
					<div class="text-center">
						<img src="<?php echo $a_user['profile_picture']; ?>" class="avatar text-center img-circle">
						<p><?php echo $a_user[3]; ?></p>
						<p>
							<?php 
							//calcule de l'age avec la date de naissance
							if ($a_user[5]) {
								$dup_age = round((time() - strtotime($a_user[5])) / 3600 / 24 / 365, 0, PHP_ROUND_HALF_DOWN);
								echo "$dup_age ans";
							}?>
						</p>
						<p class="date_sign">Membre depuis le <?php echo date_format(date_create($a_user[10]),'d-m-Y'); ?></p>
					</div>
				</div>
				<div class="col-lg-7 col-lg-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">En quelques mots...</h3>
						</div>
						<div class="panel-body">
							<p>
								<?php 

								if (!empty($a_user['bio'])) {
									echo $a_user['bio'];
								}else{
									echo "Cet utilisateur n'a pas encore défini de description";
								}
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 		
	}
	require_once("includes/footer.php");
} else {
	header("Location: index.php");
}


?>
