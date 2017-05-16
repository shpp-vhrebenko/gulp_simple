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
					<li class="active">О нас</li>
				</ol>
		</div>
		<div class="content container">
				<div class="row about-us__description">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h1 class="header-title">О нас</h1>
								<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis sapiente possimus iure illo, sit repellendus quasi iste nostrum quas earum unde et, nisi optio culpa libero sint molestias. Iure rerum quaerat veniam sequi ut veritatis nihil dolorum, nulla illo. Quibusdam eveniet recusandae earum ratione eaque vero illo ab molestias facere.</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nam asperiores, iure suscipit ipsum. Optio eveniet, labore tempore debitis, expedita et facilis esse, odit impedit tenetur tempora dolorum magni? Consequatur placeat consectetur odio illo, beatae facere saepe. Molestiae, omnis necessitatibus. Impedit fugit, doloribus neque, fuga dignissimos consequuntur aperiam quia labore ad voluptate, dolores aliquam unde harum eius debitis commodi ex. Et asperiores iste optio fugiat ad nam debitis, expedita pariatur laboriosam sapiente! Accusamus, temporibus. Tempora odit dolorem cumque, dolore corrupti atque, distinctio numquam omnis libero ab ratione ipsa. Minus tempore perferendis, tempora fugit rem inventore rerum nihil ducimus! Beatae vero labore ex architecto esse repellat amet quis, perferendis fugiat quod officia similique aspernatur iste corporis enim maiores placeat error ullam? Doloribus impedit magnam facilis alias quod. Quis provident laudantium excepturi accusantium. Tempore odio possimus consequatur laboriosam porro placeat, velit delectus incidunt, dolorum eveniet perferendis vitae nulla animi itaque, quasi voluptates.</p>
						</div>
				</div>
				<div class="row about-us__images">
          <div class="about-us_carousel col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="about-us_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                          <div class="container-fluid">
                              <div class="row">
                              		<img src="images/custom_slider_1.jpg" class="img-responsive col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                  <img src="images/custom_slider_2.jpg" class="img-responsive col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="container-fluid">
                              <div class="row">
                                  <img src="images/custom_slider_2.jpg" class="img-responsive col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                  <img src="images/custom_slider_3.jpg" class="img-responsive col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="container-fluid">
                              <div class="row">
                                  <img src="images/custom_slider_3.jpg" class="img-responsive col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                  <img src="images/custom_slider_4.jpg" class="img-responsive col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              </div>
                          </div>
                      </div>
                      <!-- End Item -->
                  </div>
                  <!-- End Carousel Inner -->
                  <div class="controls">
                      <ul class="nav">
                          <li data-target="#about-us_carousel" data-slide-to="0" class="active">
                              <a href="#"><img src="images/custom_slider_1.jpg"></a>
                          </li>
                          <li data-target="#about-us_carousel" data-slide-to="1">
                              <a href="#"><img src="images/custom_slider_2.jpg"></a>
                          </li>
                          <li data-target="#about-us_carousel" data-slide-to="2">
                              <a href="#"><img src="images/custom_slider_3.jpg"></a>
                          </li>
                          <li data-target="#about-us_carousel" data-slide-to="3">
                              <a href="#"><img src="images/custom_slider_4.jpg"></a>
                          </li>
                      </ul>
                       <a class="left carousel-control" href="#about-us_carousel" role="button" data-slide="prev"><span class="vertical-text previous" aria-hidden="true">Предыдущая</span>
											</a>
											<a class="right carousel-control" href="#about-us_carousel" role="button" data-slide="next"><span class="vertical-text next" aria-hidden="true">Следующая</span></a>
                  </div>
										
								 
              </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          	<a class="read-more">Смотреть фото</a>
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
