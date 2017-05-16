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

        <section class="header container">
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
        </section>
        <section class="menu-list menu-list_complex container">
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
        </section>
        <section class="page-navigation container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="products.php">Товары и услуги</a></li>
                    <li><a href="subdirectory.php">Спальни</a></li>
                    <li><a href="catalog.php">Классические</a></li>
                    <li class="active">Спальня SIENA AVORIO</li>
                </ol>
        </section>
        <section class="content container">
            <div class="row product-details">
                <div class="product-details__carousel col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="images/custom_slider_1.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="images/custom_slider_2.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="images/custom_slider_3.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="images/custom_slider_4.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>
                        <!-- End Carousel Inner -->
                        <div class="controls">
                            <ul class="nav">
                                <li data-target="#custom_carousel" data-slide-to="0" class="active">
                                    <a href="#"><img src="images/custom_slider_1.jpg"></a>
                                </li>
                                <li data-target="#custom_carousel" data-slide-to="1">
                                    <a href="#"><img src="images/custom_slider_2.jpg"></a>
                                </li>
                                <li data-target="#custom_carousel" data-slide-to="2">
                                    <a href="#"><img src="images/custom_slider_3.jpg"></a>
                                </li>
                                <li data-target="#custom_carousel" data-slide-to="3">
                                    <a href="#"><img src="images/custom_slider_4.jpg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-details__description col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <header>
                        <h5>Спальня SIENA AVORIO</h5>
                    </header>
                    <p class="available">Есть в наличие</p>
                    <div class="price-normal">
                        <p>Цена</p>
                        <p class="normal">от 2275</p>
                    </div>
                    <div class="price-discount">
                        <p>Цена со скидкой</p>
                        <p class="discount">от 1999</p>
                    </div>
                    <button class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-product">Заказать</button>
                </div>
            </div>            
            <div class="row product__description">
                 <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <h2 class="header-title" >Описание</h2>
                 </header>
                 <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description__content">
                        <header>
                            <h5>Цена согласно фабричного прайс - листа без дополнительных накруток</h5>
                            <ul class="description__list">
                                <li>Действуют специальные условия скидки при покупке</li>
                                <li>Минимальные сроки поставки под заказ, наличие складской программы</li>
                            </ul>
                        </header>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda suscipit rem voluptas, fuga quae ipsam, recusandae laudantium commodi nulla sunt expedita cupiditate beatae id odit voluptatibus vitae, incidunt praesentium et illum officia saepe iusto totam, maiores rerum! Voluptatem, quam dolorum aut, placeat natus saepe quis neque dicta tempora sunt recusandae.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda suscipit rem voluptas, fuga quae ipsam, recusandae laudantium commodi nulla sunt expedita cupiditate beatae id odit voluptatibus vitae, incidunt praesentium et illum officia saepe iusto totam, maiores rerum! Voluptatem, quam dolorum aut, placeat natus saepe quis neque dicta tempora sunt recusandae.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda suscipit rem voluptas, fuga quae ipsam, recusandae laudantium commodi nulla sunt expedita cupiditate beatae id odit voluptatibus vitae, incidunt praesentium et illum officia saepe iusto totam, maiores rerum! Voluptatem, quam dolorum aut, placeat natus saepe quis neque dicta tempora sunt recusandae.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda suscipit rem voluptas, fuga quae ipsam, recusandae laudantium commodi nulla sunt expedita cupiditate beatae id odit voluptatibus vitae, incidunt praesentium et illum officia saepe iusto totam, maiores rerum! Voluptatem, quam dolorum aut, placeat natus saepe quis neque dicta tempora sunt recusandae.
                        </p>
                 </article>                 
                <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a class="read-more download-price">Скачать прайс SIENA AVORIO</a>
                        <a class="footer-icon"><i class="fa fa-download" aria-hidden="true"></i></a>
                </footer>             
            </div>
        </section>
        <section class="footer container">
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
        </section>
        <section class="footer-contacts container">
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
        </section>
        
        <!-- build:js scripts/footer_vendor.js -->
                <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <!-- endbuild -->
                <script src="scripts/main.js"></script>
 </body>
 </html>
