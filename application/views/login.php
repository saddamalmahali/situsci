<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="<?= base_url('assets/img/favicon.144x144.png') ?>" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="<?= base_url('assets/img/favicon.114x114.png') ?> " rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="<?= base_url('assets/img/favicon.72x72.png') ?>" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="<?= base_url('assets/img/favicon.57x57.png') ?> " rel="apple-touch-icon" type="image/png">
	<link href="<?= base_url('assets/img/favicon.png') ?> " rel="icon" type="image/png">
	<link href="<?= base_url('assets/img/favicon.ico') ?> " rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?= base_url('assets/css/separate/pages/login.min.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/font-awesome/font-awesome.min.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/jqueryui/jquery-ui.min.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" method="POST" action="<?php echo base_url()."index.php/login/log" ?>">
                    <div class="sign-avatar">
                        <img src="<?= base_url('assets/img/logo-2.png') ?>" alt="">
                    </div>
                    <?php echo validation_errors(); ?>
                    <header class="sign-title">Masuk Ke Aplikasi</header>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="Password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded" name="submit">Masuk</button>
                    
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="<?= base_url('assets/js/lib/jquery/jquery.min.js') ?>  "></script>
<script src="<?= base_url('assets/js/lib/tether/tether.min.js') ?>"></script>
<script src="<?= base_url('assets/js/lib/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/lib/bootstrap-select/bootstrap-select.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/lib/match-height/jquery.matchHeight.min.js') ?>"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>