<?php 
require_once("../../includes/init.php");
require_once("header.php");
require_once("check.php");

function limit_words($string, $word_limit)
{
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit))."...";
}

$get_memo = $dbh->query('SELECT * FROM memo');
$allMemo = $get_memo->fetchAll();
?>

<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="/panel_admin/pages/index.php">Panel Admin</a>
		</li>
		<li class="breadcrumb-item active">Modération mémos</li>
	</ol>
	<!-- Example DataTables Card-->

	<?php if (count($allMemo)>0) { ?>
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> Mémos
		</div>
		<div class="card-body">
			<div class="row">
				<?php foreach ($allMemo as $key => $value) {
					$get_username = $dbh->query('SELECT username FROM users WHERE id ='.$value['id_user']);
					$username = $get_username->fetch();
					?>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h2 class="panel-title" style="font-size: 20px; float: left;"><?php echo $value['title']; ?></h2>
								<div class="text-right">
									<a class="btn btn-secondary " href="view_memo.php?id=<?= $value['id']?>" role="button"><i class="fa fa-eye" aria-hidden="true"></i></a>
									<a class="btn btn-primary" href="edit_memo.php?id=<?php echo $value['id']; ?>" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="card-block" style="padding: 1.25rem;">
								<p class="card-text"><?= limit_words(strip_tags(htmlspecialchars_decode( $value['content'])),40);?></p>
								<p class="text-right">Par  <strong><?= $username[0]?></strong> le <?php $date = explode(" ",$value['creation_date']); echo $date[0]; ?></p>
							</div>
						</div>
					</div>
					<?php  }?>
				</div>
			</div>
		</div>
		<?php } else {?>
		<div class="col-12">
			<p>Aucune modération en attente.</p>
		</div>
		<?php }
		require_once("footer.php");
		?>

