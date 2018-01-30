<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="keywords"               content="your,keywords">
        <meta name="date"                   content="November  30, 2017" />
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#245C72">
        <title>Wow Detalles</title>
        <!-- <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logos/favicon.png"> -->
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>engagement.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">                          
    </head>
    <body data-spy="scroll">
        <div id="home">
            <!-- <div class="header">
                <div class="container">
                    <div class="call-header">
                        <a href="tel:+016579057"><i class="mdi mdi-call"></i><span>LL&aacute;manos: 01-6579057</span></a><label class="separacion"> - </label>
                        <a href="tel:+51996312529"><i class="fa fa-whatsapp"></i><span>Whatsapp: +51 996312529</span></a>
                    </div>
                    <div class="redes-header">
                        <ul>
                            <li><a href="https://www.facebook.com/taxitoursrosenverg/" target="_blank" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:taxirosenverg@gmail.com" class="mdl-button mdl-js-button mdl-button--icon"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button id="nav-icon3" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="#">Wow Detalles</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#principal">Inicio</a></li>
                            <li><a href="#nosotros">Ofertas</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#tour">Categor&iacute;a</a></li>
                            <li><a href="Reserva">Shopping Cart</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="principal">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <!-- <img src="<?php echo RUTA_IMG?>fondo/fondo1.jpg" alt="">                        
                        <img src="<?php echo RUTA_IMG?>fondo/fondo1.png" alt=""> -->
                    </div>
                    <div class="item">
                        <!-- <img src="<?php echo RUTA_IMG?>fondo/fondo2.jpg" alt="">
                        <img src="<?php echo RUTA_IMG?>fondo/fondo2.png" alt=""> -->
                    </div>
                    <div class="item">
                        <!-- <img src="<?php echo RUTA_IMG?>fondo/fondo3.jpg" alt="">
                        <img src="<?php echo RUTA_IMG?>fondo/fondo3.png" alt=""> -->
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="container">
                <p>&copy;2018 Wow Detalles S.A.C</p>
            </div>
        </footer>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>   
        <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
    </body>
</html>
