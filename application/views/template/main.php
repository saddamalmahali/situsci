<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="<?php base_url('assets/img/favicon.144x144.png') ?>" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="<?php base_url('assets/img/favicon.114x114.png')?>" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="<?= base_url('assets/img/favicon.72x72.png') ?>" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="<?= base_url('assets/img/favicon.57x57.png') ?>" rel="apple-touch-icon" type="image/png">
	<link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon" type="image/png">
	<link href="<?= base_url('assets/img/favicon.ico') ?>" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/font-awesome/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/bootstrap-table/bootstrap-table.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/separate/vendor/bootstrap-select/bootstrap-select.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>
<body class="with-side-menu">

	<?php $this->load->view('template/header'); ?>

	<div class="mobile-menu-left-overlay"></div>
	<?php $this->load->view('template/sidebar') ?>

	<div class="page-content">
		<div class="container-fluid">
			<?= $content ?>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="<?= base_url('assets/js/lib/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/lib/tether/tether.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/lib/bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/lib/bootstrap-select/bootstrap-select.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugins.js') ?>"></script>
	<script src="<?= base_url('assets/js/lib/bootstrap-table/bootstrap-table.js') ?>"></script>

	<script src="<?= base_url('assets/js/app.js') ?>"></script>
	<script src="<?= base_url('assets/js/aplikasi.js') ?>"></script>
</body>
</html>
