@extends('layouts.layout')
@section('title')
Adeunis Car
@endsection
@section('nav')
<li class="nav-item">
    <a class="nav-link active" href="/"><i class="fa fa-home"></i> Accueil
    </a>
</li>

<li class="nav-item"><a class="nav-link" href="/nos-voitures"><i class="fa fa-car-alt"></i> Voitures & Prix</a>
</li>

<li class="nav-item"><a class="nav-link" href="/conditions"><i class="fa fa-file-alt"></i> Conditions</a>
</li>

<li class="nav-item"><a class="nav-link" href="/contact"><i class="fa fa-phone-alt"></i> Contact</a>
</li>

@endsection
@section('content')
<!-- Page Content -->
<!-- Banner Starts Here -->

<div class="page-heading contact-heading header-text" style="background-image: url(assets/images/accueil.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4 class="text-danger"><em>Votre satisfaction est notre devise</em></h4>
                    <h2>Faites votre réservation dès aujourd'hui !</h2><br><br>
                    <a href="/nos-voitures">
                        <button type="button" class="btn btn-outline-danger">
                            <i class="fa fa-car-alt"></i> Voir nos voitures
                        </button>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture.">
                        <button type="button" class="btn btn-outline-success">
                            <i class="fab fa-whatsapp"></i> Contactez nous
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Nos voitures</h2>
                    <a href="/nos-voitures">voir plus <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-md-12 d-flex justify-content-center">
                <div class="alert alert-success">
                    <strong>Nouveaut&eacute; !</strong> La Golf GTD full option diesel est diponible, <strong>la Golf 8 sera disponible au mois de Mai !!!</strong>.
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item shadow">
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia.">
                        <img src="assets/images/octavia-blanc.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia">
                            <h4>Skoda Octavia</h4>
                        </a>
                        <h6><small>à partir de</small> 400 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i> Diesel</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Manuel</strong>

                        </p>
                        <small>
                            <strong title="passagers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bagages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="portes"><img src="assets/images/car-door.png" style="width : 12px; height: 12px;" alt="">
                                5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bluetooth"><i class="fab fa-bluetooth"></i> Bluetooth</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="climatisation"><i class="fa fa-snowflake"></i> A/C</strong>
                        </small>
                        <hr>
                        <div class="text-center">
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia.">
                                <button type="button" class="btn btn-outline-success">
                                    <i class="fab fa-whatsapp"></i> R&eacute;server
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item shadow">
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Golf%207">
                        <img src="assets/images/golf7.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Golf%207">
                            <h4>Volkswagen Golf 7</h4>
                        </a>
                        <h6><small>à partir de</small> 450 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i> Diesel</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Automatique</strong>

                        </p>
                        <small>
                            <strong title="passagers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bagages"><i class="fa fa-briefcase"></i> 3</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="portes"><img src="assets/images/car-door.png" style="width : 12px; height: 12px;" alt="">
                                5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bluetooth"><i class="fab fa-bluetooth"></i> Bluetooth</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="climatisation"><i class="fa fa-snowflake"></i> A/C</strong>
                        </small>
                        <hr>
                        <div class="text-center">
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Golf%207.">
                                <button type="button" class="btn btn-outline-success">
                                    <i class="fab fa-whatsapp"></i> R&eacute;server
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item shadow">
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Range_Rover">
                        <img src="assets/images/range-rover.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Range_Rover">
                            <h4>Range Rover Evoque</h4>
                        </a>
                        <h6><small>à partir de</small> 1.500 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i> Diesel</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Automatique</strong>

                        </p>
                        <small>
                            <strong title="passagers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bagages"><i class="fa fa-briefcase"></i> 4+</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="portes"><img src="assets/images/car-door.png" style="width : 12px; height: 12px;" alt="">
                                5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bluetooth"><i class="fab fa-bluetooth"></i> Bluetooth</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="climatisation"><i class="fa fa-snowflake"></i> A/C</strong>
                        </small>
                        <hr>
                        <div class="text-center">
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Range_Rover.">
                                <button type="button" class="btn btn-outline-success">
                                    <i class="fab fa-whatsapp"></i> R&eacute;server
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<div class="best-features">
    <div class="container shadow-lg">
        <div class="row about">
            <div class="col-md-12 ">
                <div class="section-heading">
                    <h2><br>A propos de nous</h2>
                </div>
            </div>
            <div class="col-md-7">
                <div class="left-content text-justify">
                    <p>Nous sommes présents dans les principaux aéroports, gares et centres-villes.
                        Nos clients peuvent compter sur nous partout où ils ont besoin de louer un véhicule .
                        Nous offrons à nos clients un service complet de locations de tous types de véhicules Automatique
                        ,Economique , 4x4 & SUV , Voiture de Luxe....
                        <br>
                        Chez Adeunis Car, nous vous garantissons :
                    </p>
                    <ul class="featured-list">
                        <li><a>Des vehicules en très bons Etats</a></li>
                        <li><a>Un Confort digne de vous</a></li>
                        <li><a>2e conducteur <o class="text-success">gratuit</o></a></li>
                    </ul>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture.">
                        <button type="button" class="btn btn-success">
                            <i class="fab fa-whatsapp"></i> Contactez nous
                        </button>
                    </a>
                </div>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-4">
                <div class="right-image">
                    <img src="assets/images/about-1-570x350.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>Avis des Clients</h3>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="service-item shadow">
                    <div class="down-content" style="text-align: justify;">
                        <p class="n-m">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <small class="date float-right"><i class="fa fa-clock"></i>
                                <script>
                                    document.write(s);
                                </script>
                            </small>
                        </p>
                        <hr>
                        <p class="n-m"><em>"J’ai loué une voiture pour mon voyage. La voiture était vraiment top. J’ai pu choisir
                                ma voiture parmi une multitude de voitures. La personne est accueillante et compétente. Je recommande.
                                Merci pour votre efficacité et professionnalisme."</em></p>
                        <br>
                        <h4 class="float-right"><i class="fa fa-user"></i>&nbsp;Chéché C.</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item shadow">
                    <div class="down-content" style="text-align: justify;">

                        <p class="n-m">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <small class="date float-right">
                                <i class="fa fa-clock"></i>
                                <script>
                                    document.write(s);
                                </script>
                            </small>
                        </p>
                        <hr>
                        <p class="n-m"><em>"Au top . Il m'a louer deux voiture pour mon séjour c'était parfait merci encore..
                                L'agence a tout type de véhicule. 4x4, berline ,sport etc.. Je recommande . Merci en tous cas à
                                vous"</em></p>
                        <br><br><br>
                        <h4 class="float-right"><i class="fa fa-user"></i>&nbsp;Abdellah O.</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item shadow">
                    <div class="down-content" style="text-align: justify;">

                        <p class="n-m">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <small class="date float-right"><i class="fa fa-clock"></i>
                                <script>
                                    document.write(s);
                                </script>
                            </small>
                        </p>
                        <hr>
                        <p class="n-m"><em>"Parmi les meilleurs agence qui j'ai rencontré."</em></p>
                        <br><br><br><br><br><br>
                        <h4 class="float-right"><i class="fa fa-user"></i>&nbsp;Hafid k.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="find-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Contact & Localisation</h2>
                </div>
            </div>
            <div class="col-md-7">
                <!-- How to change your own map point
    1. Go to Google Maps
    2. Click on your location point
    3. Click "Share" and choose "Embed map" tab
    4. Copy only URL and paste it within the src="" field below
-->
                <div id="map" class="shadow-lg">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d313.08576839277373!2d-9.53449248517965!3d30.398585233407342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c82fe43eea57%3A0xee4d14501cb73c00!2sADEUNIS%20CAR!5e0!3m2!1sfr!2sma!4v1614641443651!5m2!1sfr!2sma" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-5 shadow-lg contactdiv" style="padding: 15px 5px;">
                <div class="left-content">
                    <h4 class="float-left">Appelez nous</h4>
                    <a href="assets/images/adeunis-carte.jpg" target="_blank"><img src="assets/images/adeunis-carte.jpg" alt="" style="height: inherit; width: 150px;" class="float-right"></a>
                    <p class="float-left">
                        Notre Agence est ouverte <strong class="text-success">24h/24 - 7j/7</strong>
                    <ul class="contact">
                        <li><a href="tel:+212661134708"><i class="fa fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;: +212 (0) 6 61 13 47
                                08</a></li>
                        <li><a href="tel:+212661311186"><i class="fa fa-phone-alt"></i>&nbsp; : +212 (0) 6 61 31 11 86</a></li>
                        <li><a href="mailto:bwltaki@gmail.com"><i class="fa fa-mail-bulk"></i>&nbsp; : bwltaki@gmail.com</a></li>
                        <li><a href="https://g.page/adeunis-agadir?share" target="_blank"><i class="fa fa-map-marker-alt"></i>&nbsp; : <small>3, hay Al Houda, bloc G74 imm. Omar -
                                    Agadir</small></a>
                        <li>

                    </ul>

                    </p>

                    <ul class="social-icons">
                        <h4>Suivez nos pages:</h4>
                        <li><a href="https://www.facebook.com/adeunis-car-2339361523016566" class="fb" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/adeuniscar/" class="insta" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center text-danger">
                    <h3><strong>Pourquoi choisir l'agence de location de voiture Adeunis Car ?</strong></h3>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="service-item shadow-sm">
                    <div class="down-content">
                        <strong><i class="fa fa-tags"></i><br>DES SERVICES DE QUALITÉ</strong>
                        <hr>
                        <p class="n-m text-justify"><em>L’agence Adeunis Car vous assure un maximum de confort pendant votre
                                conquête des paysages et des reliefs marocains.</em></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="service-item shadow-sm">
                    <div class="down-content">
                        <strong><i class="fa fa-clock"></i><br>LOCATION PAR JOUR / LONGUE DURÉE</strong>
                        <hr>
                        <p class="n-m text-justify"><em>Chez l’agence Adeunis Car, vous avez l’occasion de louer pas cher par
                                jour, par semaine ou longue durée selon vos besoins.</em></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="service-item shadow-sm">
                    <div class="down-content">
                        <strong><i class="fa fa-map-marked-alt"></i><br>LIVRAISON & RÉCUPÉRATION À L'AÉROPORT</strong>
                        <hr>
                        <p class="n-m text-justify"><em>Vous pourrez récupérer votre voiture louée déjà à l’aéroport, et vous
                                diriger ensuite vers votre hôtel ou votre résidence.</em></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="service-item shadow-sm">
                    <div class="down-content">
                        <strong><i class="fa fa-car-alt"></i><br>UN LARGE CHOIX DE VÉHICULES</strong>
                        <hr>
                        <p class="n-m text-justify"><em>Vous avez accès à un parc automobile des plus variés :
                                Economique/Berline/4*4 ; Essence/Diesel ; Automatique/Manuelle.</em></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection