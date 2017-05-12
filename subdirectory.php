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
             <div id="social-bar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 social-bar">
                 <ul class="nav navbar-nav">
                     <li class="social-bar__icon"><i class="glyphicon glyphicon-envelope"></i></li>
                     <li class="social-bar__icon"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                     <li class="social-bar__icon"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                     <li class="social-bar__icon"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                     <li class="social-bar__icon"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                 </ul>
             </div> 
             <div id="site-name" class="col-lg-5 col-md-5 col-sm-12 col-xs-12 site-name">
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
                     <li class="active"><a href="#">Главная</a></li>
                     <li><a href="#">Товары и услуги</a></li>
                     <li><a href="#">О нас</a></li>
                     <li><a href="#">Контакты</a></li>
                    </ul>      
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <div class="path-navigation container">
        <div class="row navigation">
            <div id="history-bar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 history-bar">
                <ul class="nav navbar-nav">
                    <li class="history-bar__item"><a class="">Главная &#47;</a></li>
                    <li class="history-bar__item"><a class="">Товары и услуги &#47;</a></li>
                    <li class="history-bar__item"><a class="">Спальни &#47;</a></li>
                </ul>     
             </div>
        </div>
    </div>
    <div class="content container">
        
        <div class="row products">
             <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <h1 class="header-title">Товары и услуги</h1>
             </div>
             <div class="product__item product__item_description col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="overlay"></div>
                 <h4 class="product_name">спальни</h4>
                 <img src="images/product.png" class="img-responsive">
             </div>
             <div class="product__item product__item_description col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="overlay"></div>
                 <h4 class="product_name">спальни</h4>
                 <img src="images/product.png" class="img-responsive">
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
