@extends('layouts.layout')
@section('title')
Voitures & Prix
@endsection

@section('nav')
<li class="nav-item">
    <a class="nav-link" href="/"><i class="fa fa-home"></i> Accueil
    </a>
</li>

<li class="nav-item active"><a class="nav-link" href="/nos-voitures"><i class="fa fa-car-alt"></i> Voitures & Prix</a>
</li>

<li class="nav-item"><a class="nav-link" href="/conditions"><i class="fa fa-file-alt"></i> Conditions</a>
</li>

<li class="nav-item"><a class="nav-link" href="/contact"><i class="fa fa-phone-alt"></i> Contact</a>
</li>
@endsection

@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/voitures.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content text-center">
                    <h4>Voitures & Prix</h4>
                    <h2>Découvrez notre large gamme de véhicules</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="alert alert-success">
                    <strong>Nouveaut&eacute; !</strong> La Golf GTD full option diesel est diponible, <strong>la Golf 8 sera disponible au mois de Mai !!!</strong>.
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item shadow">
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Fabia">
                        <img src="assets/images/fabia.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Fabia">
                            <h4>Skoda Fabia</h4>
                        </a>
                        <h6><small>à partir de</small> 300 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i> Essence</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Manuel</strong>

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
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Fabia">
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
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Toyota_Yaris">
                        <img src="assets/images/yaris.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Toyota_Yaris">
                            <h4>Toyota Yaris</h4>
                        </a>
                        <h6><small>à partir de</small> 300 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i> Essence</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Manuel</strong>

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
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Toyota_Yaris">
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
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Clio%204">
                        <img src="assets/images/clio.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Clio%204">
                            <h4>Renault Clio 4</h4>
                        </a>
                        <h6><small>à partir de</small> 350 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i>
                                Diesel/Essence</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Auto/Manuel</strong>

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
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Clio%204">
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
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Golf%207%20GTD">
                        <img src="assets/images/golf7-gt.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Golf%207%20GTD">
                            <h4>Volkswagen Golf 7 GTD</h4>
                        </a>
                        <h6><small>à partir de</small> 500 Mad<small>/jour</small></h6>
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
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Golf%207%20GTD">
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
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia">
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
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia">
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
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia">
                        <img src="assets/images/octavia-maron.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia">
                            <h4>Skoda Octavia Automatique</h4>
                        </a>
                        <h6><small>à partir de</small> 500 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i> Diesel</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Automatique</strong>

                        </p>
                        <small>
                            <strong title="passagers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bagages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="portes"><img src="assets/images/car-door.png" style="width : 12px; height: 12px;" alt="">
                                5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="bluetooth"><i class="fab fa-bluetooth"> Bluetooth</i></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="climatisation"><i class="fa fa-snowflake"></i> A/C</strong>
                        </small>
                        <hr>
                        <div class="text-center">
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Skoda_Octavia">
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
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Jetta">
                        <img src="assets/images/jetta.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Jetta">
                            <h4>Volkswagen Jetta</h4>
                        </a>
                        <h6><small>à partir de</small> 500 Mad<small>/jour</small></h6>
                        <p>
                            <strong title="carburant"><i class="fas fa-gas-pump"></i> Diesel</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="transmission"><img src="assets/images/manual-transmission.png" style="width : 16px; height: 16px;" alt=""> Automatique</strong>

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
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Volkswagen%20Jetta">
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
                    <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Touareg%204x4">
                        <img src="assets/images/touareg-in.jpg" alt="" class="product">
                    </a>
                    <div class="down-content">
                        <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Touareg%204x4">
                            <h4>Volkswagen Touareg V6</h4>
                        </a>
                        <h6><small>à partir de</small> 1.000 Mad<small>/jour</small></h6>
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
                            <a href="https://api.whatsapp.com/send?phone=+212%20661%2013%2047%2008&amp;text=Bonjour,%20je%20cherche%20une%20voiture%20Touareg%204x4">
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
@endsection