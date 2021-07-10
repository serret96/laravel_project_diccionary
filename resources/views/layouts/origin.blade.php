<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EbreDIC - Diccionari Ebrenc Online - APP Diccionari Ebrenc @yield('title')</title>

    <!-- Theme CSS -->
    <link href="/src/css/freelancer.min.css" rel="stylesheet">

    >
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="src/js/jquery-3.1.0.js"></script>

    <!-- Contact Form JavaScript -->

{{--<script src="js/contact_me.js"></script>--}}

<!-- Theme JavaScript -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body id="page-top" class="index" style="">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Ebre DIC</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Terres de l'Ebre</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">Sobre nosaltres</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contacta</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>

    <div class="container">
        <div class="row">


                        <form method="get" action="search" role="search">
                            <div class="input-group custom-search-form"  >
                                <input type="text"
                                       class="form-control"
                                       name="term"
                                       placeholder="Cercador de paraules..."
                                       style="font-size: 40px; height: 64px">
                                <span class="input-group-btn">
                                <button class="btn btn-default-sm"
                                        type="submit"
                                        style="font-size: 35px">
                                    <i class="fa fa-search">
                                    </i>
                                </button>

                         </span>
                            </div>
                        </form>
            <br>

        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Diccionari les terres de l'Ebre</h2>

                <br><br>
                <p>
                    Aquesta aplicació es tracta d'un intent d'aproximament entre els diferents dialectes que podem trobar en el Català.
                    Per això, hem desenvolupat aquesta aplicació però per poder disposar d'un bon diccionari serà necessari que la gent
                    col·labori en l'emplenament en les diferents paraules que ens podem trobar en els diferents pobles.
                    Pel fet que cada poble sempre ha disposat de les seves paraules que els acaba caracteritzant.
                </p>
            </div>
        </div>

    </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Sobre nosaltres
                </h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>
                    Aquesta app va començar sent una broma entre nosaltres sobre la creació d'una app amb les paraules
                    que nosaltres els ebrencs només coneixem  entre nosaltres i la resta de Catalunya no coneix, el nostre dialecte.
                </p>
            </div>
            <div class="col-lg-4">
                <p>
                    Una altra de les motivacions per fer aquest diccionari ha estat perquè quan anàvem a altres pobles en les festes Majors,
                    ens trobàvem a gent que parlava en Català, però que de sobte ens sortien, en paraules que mai havíem escoltat.                </p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">

                <a href="#" class="btn btn-lg btn-outline">
                    <img class="img-responsive" src="/src/img/1468929702_android.png" alt="">

                    {{--</i> Download Theme--}}
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contacta</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form method="post" action="sendmail" name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nom</label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Nom"
                                   id="name"
                                   name="name"
                                   required
                                   data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Correu Electronic</label>
                            <input type="email"
                                   class="form-control"
                                   placeholder="Correu Electronic"
                                   id="email"
                                   name="email"
                                   required
                                   data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Telèfon</label>
                            <input type="tel"
                                   class="form-control"
                                   placeholder="Telèfon"
                                   id="phone"
                                   name="number"
                                   required
                                   data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Missatge</label>
                            <textarea rows="5"
                                      class="form-control"
                                      placeholder="Missatge"
                                      id="message"
                                      name="message"
                                      required
                                      data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    {{--<div class="footer-above">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="footer-col col-md-4">--}}
    {{--<h3>Localització</h3>--}}
    {{--<p>--}}
    {{--<br>Amposta, CP 43870</p>--}}
    {{--</div>--}}
    {{--<div class="footer-col col-md-4">--}}
    {{--<h3>Around the Web</h3>--}}
    {{--<ul class="list-inline">--}}
    {{--<li>--}}
    {{--<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="footer-col col-md-4">--}}
    {{--<h3>About Freelancer</h3>--}}
    {{--<p>Freelance is a free to use, open source Bootstrap theme created by <a--}}
    {{--href="http://startbootstrap.com">Start Bootstrap</a>.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="pull-left hidden-xs">
                    Copyright &copy; 2016 EbreDIC TICPlace®
                </div>
                <div class="pull-right hidden-xs">
                    <strong>Desenvolupat per <a href="http://www.ticplace.es/" target="_blank">TICPlace&reg;</a></strong>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>






</body>

</html>
