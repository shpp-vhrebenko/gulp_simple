<?php

?>
 <!doctype html>
 <html class="no-js" lang="">
	 <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DvaCom</title>
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="styles/main.css?<?php echo filemtime('styles/main.css');?>">
		<!--  build:js scripts/head_vendor.js -->
		<script src="bower_components/jquery/dist/jquery.js"></script>
		<!-- endbuild -->

 </head>
 <body>
		 <!--[if lt IE 10]>
			 <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		 <![endif]-->

		<div class="header container">
				<div class="row">
						<div id="social-bar" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 social-bar">
								<nav>
										<a class="social-bar__icon" href="#"><i class="glyphicon glyphicon-envelope"></i></a>
										<a class="social-bar__icon" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
										<a class="social-bar__icon" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										<a class="social-bar__icon" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										<a class="social-bar__icon" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								 </nav>
						 </div> 
						 <div id="site-name" class="col-lg-6 col-md-5 col-sm-12 col-xs-12 site-name">
								 <img src="images/header_logo.png" class="img-responsive" alt="Camelgroup">
						 </div>            
						 <div id="contacts" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 contacts">
								 <p class="contacts__item">
										 <span class="icon_phone icon_block ">
												 <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
										 </span>
										 <span class="icon_green-phone icon_block ">
												 <i class="fa fa-phone" aria-hidden="true"></i>
										 </span>
										 <span class="number-phone"> +3<span class="red-lightning">(067)</span>344 38 88</span>
								 </p>
						 </div>
				 </div>
		</div>
		<div class="menu-list menu-list_complex container">
				<div class="row navigation">
						<nav class="nav col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="container-fluid">
										<!-- Brand and toggle get grouped for better mobile display -->
										<div class="navbar-header">
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												</button>
										</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav menu-list__nav">
											 <li class="active menu-list__item" ><a href="index.php">Главная</a></li>
											 <li class="menu-list__item" ><a href="products.php">Товары и услуги</a></li>
											 <li class="menu-list__item" ><a href="about_us.php">О нас</a></li>
											 <li class="menu-list__item" ><a href="contacts.php">Контакты</a></li>
										</ul>      
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
				</div>
		</div>
		<div class="page-navigation container">
				<ol class="breadcrumb">
					<li><a href="index.php">Главная</a></li>
					<li class="active">Контакты</li>
				</ol>
		</div>
		<div class="content container">
				<div class="row contacts-bar">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h1 class="header-title">Контакты</h1>
						</div>
							
						<div class="navbar-nav contacts-bar col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<i class="fa fa-map-marker col-md-2" aria-hidden="true"></i>
								<p class="col-md-10">Adress</p>
							</li>
							<li class="col-lg-3 col-md3 col-sm-6 col-xs-6">
								<i class="fa fa-mobile-phone col-md-2" aria-hidden="true"></i>
								<p class="col-md-10">Mobile number</p>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<i class="glyphicon glyphicon-time col-md-2" ></i>
								<p class="col-md-10">Time work</p>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
								<i class="fa fa-skype col-md-2" aria-hidden="true"></i>
								<p class="col-md-10">Skype</p>
							</li>
						</div>
				</div>
				<div class="row contacts-form">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h1 class="header-title">Напишите нам</h1>
						</div>
						<form class="form-horizontal col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3  col-xs-12 ">
								<input type="text" name="user_phone" class="col-md-12" placeholder="Телефон">
								<input type="text" name="user_name" class="col-md-12" placeholder="Ваше имя">
								<input type="email" name="user_email" class="col-md-12" placeholder="E-mail">
								<textarea class="col-md-12" placeholder="Текстовое сообщение">
									
								</textarea>
								<a type="button" class="col-md-8 col-md-offset-2 button-success">Отправить</a>
						</form>
				</div>
				<div class="row map">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h1 class="header-title">Как нас найти</h1>
						</div>
						<div class="google-map col-lg-12 col-md-12 col-sm-12 col-xs-12">
							
						</div>
				</div>
		</div>
		<div class="footer container">
				<div class="row top-group">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class= "group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class= "group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class= "group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class= "group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
						
						<hr>
				</div>
				 <div class="row bottom-group">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class="group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class="group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class="group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 group__item">
								<header>
										<h5>Category header</h5>
								</header>
								<ul class="group__list">
										<li class="active"><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
										<li><a href="#">category item</a></li>
								</ul>    
						</div>
				 </div>
		</div>
		<div class="footer-contacts container">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-contacts__item">
						<a href="#">Создание сайтов</a><img src="images/logo_dvacom.png">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-contacts__item">
						<p class="copyright">&copy; Camelgroup итальянская мебель</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-contacts__item">
						<p class="contacts__item">
								<span class="icon_phone icon_block ">
										 <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								</span>
								<span class="icon_green-phone icon_block ">
										 <i class="fa fa-phone" aria-hidden="true"></i>
								</span>
								<span class="number-phone"> +3<span class="red-lightning">(067)</span>344 38 88</span>
						</p>
				</div>
		</div>
		
		<!-- build:js scripts/footer_vendor.js -->
				<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
		<!-- endbuild -->
				<script src="scripts/main.js"></script>
 </body>
 </html>
