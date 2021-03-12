<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--
    <meta name="description" content="">
    <meta name="author" content="">
    -->
    <link rel="icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <title>@yield('title')</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css">-->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link href="/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/owl.css">

    <script>
        var an = (new Date().getFullYear()) - 2020;
        var s = " il y a " + an + " ";
        if (an > 1)
            s = s + "ans"
        else
            s = s + "an"
    </script>

</head>

<body class="bg-light">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2><i class="fa fa-car-alt"></i>&nbsp;Adeunis <em>car</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">
                        @yield('nav')
                        <li class="nav-item">

                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture.">
                                <button type="button" class="btn btn-success" style="margin-top: 5px;">
                                    <i class="fab fa-whatsapp"></i> Whatsapp
                                </button>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content shadow-lg">
                        <form id="contact" action="https://api.whatsapp.com/send?" method="get">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Besoin de renseigment ?</h4>
                                </div>
                                <div class="col-md-8">
                                    <input name="phone" type="hidden" class="form-control" value="+212661134708">
                                    <fieldset>
                                        <textarea name="text" rows="6" class="form-control" id="message" placeholder="Ecrivez votre message ici" required=""></textarea>
                                    </fieldset>
                                    <br>
                                    <div class="text-right">
                                        <button type="submit" id="form-submit" class="btn btn-success"><i class="fab fa-whatsapp"></i>&nbsp;Envoyer</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark">
        <div class="container">
            <div class="row inner-content">
                <div class="col-md-12 text-left">
                    <h2 class="text-light">Adeunis <o class="text-danger">Car</o>
                    </h2>
                    <strong class="text-muted">Location de voiture Agadir</strong>

                </div>
                <div class="col-md-7 text-left">
                    <p>
                        <br><br><br><br>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/adeunis-car-2339361523016566" class="fb rounded-circle" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/adeuniscar/" class="insta rounded-circle" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://m.me/2339361523016566" class="fb rounded-circle" title="Messenger" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture." class="wha rounded-circle" title="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>

                    </ul>
                    </p>
                </div>

                <div class="col-md-5 text-right text-light">
                    <p>
                    <h5><i class="fa fa-mail-bulk"></i>&nbsp; : bwltaki@gmail.com</h5><br>
                    <h5><i class="fa fa-phone-alt"></i>&nbsp;-&nbsp;Taki&nbsp;:&nbsp;(+212) 06 61 13 47 08 </h5><br>
                    <h5><i class="fa fa-phone-alt"></i>&nbsp;-&nbsp;Youssef&nbsp;:&nbsp;(+212) 06 61 31 11 86</h5><br>

                    <h5><i class="fa fa-map-marker-alt"></i>&nbsp; : <small>3, hay Al Houda, bloc G74 imm. Omar - Agadir</small>
                    </h5>

                    </p>
                </div>

                <div class="col-md-12">
                    <hr>
                    <p class="text-light float-left text-left">Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script> - <a href="/"> Adeunis Car</a>
                    </p>
                    <p class="float-right"><a href="/nos-voitures" class="text-light">Voitures &amp; Prix</a> - <a href="/conditions" class="text-light"> Conditions</a></p>
                </div>


            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/owl.js"></script>
</body>

</html>