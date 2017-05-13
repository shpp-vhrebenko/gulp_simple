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
		<div class="menu-list container">
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
		<div class="content container">
				<div class="row carousel">
						 <div id="carousel-generic" class="carousel slide" data-ride="carousel">
								 <!-- Indicators -->
								 <ol class="carousel-indicators">
										 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										 <li data-target="#carousel-example-generic" data-slide-to="1"></li>
										 <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								 </ol>

								 <!-- Wrapper for slides -->
								 <div class="carousel-inner" role="listbox">
										 <div class="item active">
												 <img src="images/header_slider.jpg" >
												 <div class="carousel-caption">
														 <p>Спальня</p>
														 <a href="subdirectory.php">SIENA AVORIO <span>&#62;</span></a>
												 </div>
										 </div>
										 <div class="item">
												 <img src="images/header_slider_2.jpg" >
												 <div class="carousel-caption">
														 <p>Спальня</p>
														 <a href="subdirectory.php">SIENA AVORIO <span>&#62;</span></a>
												 </div>
										 </div>
										 <div class="item">
												 <img src="images/header_slider_3.jpg" >
												 <div class="carousel-caption">
														 <p>Спальня</p>
														 <a href="subdirectory.php">SIENA AVORIO <span>&#62;</span></a>
												 </div>
										 </div>
								 </div>

								 <!-- Controls -->
								 <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
										 <div class="overlay"></div>
										 <span class="vertical-text" aria-hidden="true">Предыдущая</span>
										 <span class="sr-only">Previous</span>
								 </a>
								 <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
										 <div class="overlay"></div>
										 <span class="vertical-text" aria-hidden="true">Следующая</span>
										 <span class="sr-only">Next</span>
								 </a>
						 </div>
						 <a href="products.php" class="look_all_products">Смотреть все товары  &#62;</a>
				</div>
				<div class="row gallery">
						 <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <h1 class="header-title">Витрина</h1>
						 </div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>

						<div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="overlay-image">
										<img src="images/slider_item.jpg" class="img-responsive image">
								</div>
								<a href="products.php" class="product_name">спальни</a>
						</div>
				</div>
				<div class="row articles">
						 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <h1 class="header-title">Новости</h1>
						 </div>
						 <article class="col-lg-3 col-md-3 col-sm-6 col-xs-12 articles__item">
								<figure>
										<img src="images/articles_item.png">
										<p class="articles__date"><span>&#822;&#822; &nbsp; &nbsp;</span> 08.04.16 <span> &nbsp; &nbsp;&#822;&#822;</span></p>    
								</figure>                
								<a class="articles__link" href="">лучшая цена сamelgroup</a>              
						 </article>
						 <article class="col-lg-3 col-md-3 col-sm-6 col-xs-12 articles__item">
								<figure>
										<img src="images/articles_item.png">
										<p class="articles__date"><span>&#822;&#822; &nbsp; &nbsp;</span> 08.04.16 <span> &nbsp; &nbsp;&#822;&#822;</span></p>    
								</figure>                
								<a class="articles__link" href="">лучшая цена сamelgroup</a>              
						 </article>
						 <article class="col-lg-3 col-md-3 col-sm-6 col-xs-12 articles__item">
								<figure>
										<img src="images/articles_item.png">
										<p class="articles__date"><span>&#822;&#822; &nbsp; &nbsp;</span> 08.04.16 <span> &nbsp; &nbsp;&#822;&#822;</span></p>    
								</figure>                
								<a class="articles__link" href="">лучшая цена сamelgroup</a>              
						 </article>
						 <article class="col-lg-3 col-md-3 col-sm-6 col-xs-12 articles__item">
								<figure>
										<img src="images/articles_item.png">
										<p class="articles__date"><span>&#822;&#822; &nbsp; &nbsp;</span> 08.04.16 <span> &nbsp; &nbsp;&#822;&#822;</span></p>    
								</figure>                
								<a class="articles__link" href="">лучшая цена сamelgroup</a>              
						 </article>
				</div>
				<div class="row advantage">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <h1 class="header-title">Наши Преимущества</h1>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 advantage__item clearfix">
								<div class="advantage__icon icon_medal">                    
								</div>
								<div class="advantage__description">
										<p>Lorem ipsum dolor sit amet, consectetur.</p>
								</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 advantage__item clearfix">
								<div class="advantage__icon icon_experience">                    
								</div>
								<div class="advantage__description">
										<p>Lorem ipsum dolor sit amet, consectetur.</p>
								</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 advantage__item clearfix">
								<div class="advantage__icon icon_calc">                    
								</div>
								<div class="advantage__description">
										<p>Lorem ipsum dolor sit amet, consectetur.</p>
								</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 advantage__item clearfix">
								<div class="advantage__icon icon_catalog">                    
								</div>
								<div class="advantage__description">
										<p>Lorem ipsum dolor sit amet, consectetur.</p>
								</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 advantage__item clearfix">
								<div class="advantage__icon icon_grafic">                    
								</div>
								<div class="advantage__description">
										<p>Lorem ipsum dolor sit amet, consectetur.</p>
								</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 advantage__item clearfix">
								<div class="advantage__icon icon_work">                    
								</div>
								<div class="advantage__description">
										<p>Lorem ipsum dolor sit amet, consectetur.</p>
								</div>
						</div>            
				</div>
				<div class="row description">
						 <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <h2 class="header-title" >CamelGroup</h2>
						 </header>
						 <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description__item">
								 <header>
										 <h4></h4>
								 </header>
								 <p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda suscipit rem voluptas, fuga quae ipsam, recusandae laudantium commodi nulla sunt expedita cupiditate beatae id odit voluptatibus vitae, incidunt praesentium et illum officia saepe iusto totam, maiores rerum! Voluptatem, quam dolorum aut, placeat natus saepe quis neque dicta tempora sunt recusandae.
								 </p>
						 </article>
						 <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description__item">
								 <header>
										 <h4>Разнообразие</h4>
								 </header>
								 <p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi obcaecati sunt quaerat voluptatem eum accusantium accusamus, dicta quibusdam distinctio alias saepe deleniti deserunt illum ipsam perspiciatis veritatis sed modi consequatur quidem. Dolor animi cum totam repudiandae, blanditiis maiores et quaerat est beatae consequuntur, quas. Magnam delectus neque quam nisi exercitationem. 
								 </p>
						 </article>
						<footer class="description__footer col-lg-12 col-md-12 col-sm-12">
								<h3 class="read-more">Читать полностью</h3>
								<p class="copyright">&copy; Camelgroup итальянская мебель<p>
						</footer>             
				</div>
		</div>
		<div class="footer container">
				<div class="row top-group">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<hr>
				</div>
				 <div class="row bottom-group">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 group__item">
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
						<div class="wrapper_dva_com">
								<a href="#">Создание сайтов</a><img src="images/logo_dvacom.png">
						</div>            
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
