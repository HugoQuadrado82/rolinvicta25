<?php
// Iniciar a sessão, caso ainda não tenha sido iniciada
session_start();
?>


<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rolinvicta'25 - Brevemente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="rolinvicta porto RPg" />
	<meta name="keywords" content="rolinvicta RPG" />
	<meta name="author" content="rolinvicta" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="fh5co-loader"></div>

	<aside id="fh5co-aside" role="sidebar" class="text-center" style="background-image: url(images/img_bg_1_gradient.png);"></aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<img src="images/ComingSoon_Logo.png" alt="Launcher Logo" class="logo">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="fh5co-intro animate-box">
									<h2>O maior evento de RPG do Porto!</h2>
									<p>7 - 8 de Junho 2025</p>
								</div>
							</div>
							
							<div class="col-md-12 animate-box">
							    <?php if (isset($_GET['registo']) && $_GET['registo'] == 'sucesso'): ?>
							        <!-- Mensagem de agradecimento pelo registo -->
							        <div style="text-align: center; padding: 20px;">
							            <h2>Obrigado pelo seu registo!</h2>
							            <p>Por favor, verifique o seu email e confirme o seu registo.</p>
							        </div>
							    <?php elseif (isset($_GET['confirmacao']) && $_GET['confirmacao'] == 'sucesso'): ?>
							        <!-- Mensagem de agradecimento pela confirmação -->
							        <div style="text-align: center; padding: 20px;">
							            <h2>Obrigado pela confirmação!</h2>
							            <p>A sua conta foi confirmada com sucesso.</p>
							        </div>
							    <?php else: ?>
							        <!-- Formulário de inscrição -->
							        <form action="newsletter.php" method="post" id="fh5co-subscribe">
							            <div class="form-group">
							                <input type="email" name="email" class="form-control" placeholder="Quero saber mais!" required>
							                <input type="submit" value="Enviar" class="btn btn-primary">
							            </div>
							        </form>
							    <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>

		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<ul id="fh5co-social">
						<li><a href="https://www.facebook.com/rolinvicta/"><i class="icon-facebook"></i></a></li>
						<li><a href="https://twitter.com/rolinvicta/"><i class="icon-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/rolinvicta/"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

