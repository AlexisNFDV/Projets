<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/icons/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Devento - Panel Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/"><img src="../../assets/icons/logo_devento_wh_text.png" width="150px" alt=""></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="/panel_admin/pages/index.php">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="/panel_admin/pages/users.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Utilisateurs</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
      <a class="nav-link" href="/panel_admin/pages/all_memos.php">
        <i class="fa fa-fw fa-sticky-note"></i>
        <span class="nav-link-text">Mémos</span>
    </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
  <a class="nav-link" href="/panel_admin/pages/memo.php">
    <i class="fa fa-fw fa-check-square-o"></i>
    <span class="nav-link-text">Modération</span>
</a>
</li>
</ul>
<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
      <a class="nav-link text-center" id="sidenavToggler">
        <i class="fa fa-fw fa-angle-left"></i>
    </a>
</li>
</ul>
<ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" href="../../logout.php" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
    </li>
</ul>
</div>
</nav>

<div class="content-wrapper">


