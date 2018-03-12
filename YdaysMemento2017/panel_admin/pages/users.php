<?php 
require_once("../../includes/init.php");
require_once("header.php");
require_once("check.php");
?>

<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="/panel_admin/pages/index.php">Panel Admin</a>
		</li>
		<li class="breadcrumb-item active">Utilisateurs</li>
	</ol>
	<!-- Example DataTables Card-->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fa fa-table"></i> Utilisateurs Devento</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Nom d'utilisateur</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Level</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							<tr class="gradeA">
								<?php 
								$get_users = $dbh->query('SELECT * FROM users where level is Null OR level < 2 ORDER BY `id` DESC');
								$users = $get_users->fetchAll();

								foreach ($users as $key => $value) { ?>
								<td><?php echo $value['username']; ?></td>
								<td><?php echo $value['firstname']; ?></td>
								<td><?php echo $value['lastname']; ?></td>
								<td>
									<?php 
									if ($value['level'] == null) {
										echo "-";
									} else {
										echo $value['level'];
									}
									?>
								</td>
								<!--
								<td>
									<select class="form-control">
										<option selected disabled><?php //echo $value['level']; ?></option>
										<option>0</option>
										<option>1</option>
										<option>2</option>
									</select>
								</td>-->

								<td>
									<a class="btn btn-primary" href="edit_user.php?id=<?php echo $value['id']; ?>" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a class="btn btn-danger" href="delete_user.php?id=<?php echo $value['id']; ?>" role="button"><i class="fa fa-eraser" aria-hidden="true"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	<?php 
	require_once("footer.php");
	?>
