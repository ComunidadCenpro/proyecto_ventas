<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AC SOLUCIONES</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/animate.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/style.css">
</head>
<body id="page-top" class="landing-page">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="index.html">Inicio</a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#features">Catalogo</a></li>
                        <!-- <li><a class="page-scroll" href="#team">Team</a></li> -->
                        <li><a class="page-scroll" href="#testimonials">Sobre Nostros</a></li>
                        <!-- <li><a class="page-scroll" href="#pricing"> Sobre Nostros </a></li> -->
                        <li><a class="page-scroll" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>AC SOLUCIONES<br/>
                        Venta de Laptop<br/>
                        Monitores, Teclado<br/>
                        Disco Duro</h1>
                    <p>Venta al por mayor y menor de equipos de Computo</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">Ver mas</a>
                        <!-- <a class="caption-link" href="#" role="button">Inspinia Theme</a> -->
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="<?php echo base_url();?>img/landing/laptop.png" alt="laptop" style="height: 370px;" />
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>AC SOLUCIONES <br/> </h1>
                    <p>Sistema de gestión de almacén y ventas de equipos de computo</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver mas</a></p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section id="features" class="container services">
    <div class="row">
        <div class="row">
        <?php if(!empty($productos)):?>
            <?php foreach($productos as $producto):?>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="<?php echo base_url();?>img/<?php echo $producto->foto;?>" alt="laptop" style="height: 170px;" />
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    $xxxxx
                                </span>
                                <small class="text-muted"><?php echo $producto->categoria;?></small>
                                <a href="#" class="product-name"> <?php echo $producto->nombre;?></a>



                                <div class="small m-t-xs">
                                    <?php echo $producto->descripcion;?>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
        </div>
    </div>
</section>
<section id="testimonials" class="navy-section testimonials" style="margin-top: 0">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-comment big-icon"></i>
                <h1>
                    SOBRE NOSOTROS
                </h1>
                <div class="testimonials-text">
                    <i>"AC SOLUCIONES " es una empresa creada en el Perú, y en el tiempo que lleva laborando ha sabido posicionarse entre las primeras empresas de comercialización e importación de equipos, periféricos e insumos informáticos de los diferentes fabricantes; asimismo ensamblamos computadoras, y distribuimos las mejores marcas del mercado informáticos, brindamos soporte técnico de mantenimiento preventivo y correctivo.
</i>
                </div>
                <small>
                    <strong>21.11.2019 - AC SOLUCIONES</strong>
                </small>
            </div>
        </div>
    </div>

</section>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contactenos</h1>
                <!-- <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p> -->
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">AC Soluciones</span></strong><br/>
                    Calle Moquegua 430<br/>
                    Email:admininstrador@acsoluciones.com<br/>
                    <abbr title="Phone">P:</abbr> Tel. 4641281
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Nos puede enviar un correo con su solicitud
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Enviar un Mensaje</a>
                <p class="m-t-sm">
                    Busquenos en nuestras Redes Sociales
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2019 AC SOLUCIONES</strong><br/></p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery-2.1.1.js"></script>
<script src="<?php echo base_url();?>assets/template/dist/js/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>assets/template/dist/js/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui-1.10.4.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url();?>assets/template/dist/js/inspinia.js"></script>
<script src="<?php echo base_url();?>assets/template/dist/js/pace.min.js"></script>
<script src="<?php echo base_url();?>assets/template/dist/js/wow.min.js"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>
