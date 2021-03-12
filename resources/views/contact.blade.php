@extends('layouts.layout')
@section('title')
Contact
@endsection

@section('nav')
<li class="nav-item">
    <a class="nav-link" href="/"><i class="fa fa-home"></i> Accueil
    </a>
</li>

<li class="nav-item"><a class="nav-link" href="/nos-voitures"><i class="fa fa-car-alt"></i> Voitures & Prix</a>
</li>

<li class="nav-item"><a class="nav-link" href="/conditions"><i class="fa fa-file-alt"></i> Conditions</a>
</li>

<li class="nav-item active"><a class="nav-link" href="/contact"><i class="fa fa-phone-alt"></i> Contact</a>
</li>
@endsection

@section('content')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="page-heading contact-heading header-text" style="background-image: url(assets/images/contact_banner.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4><i class="fa fa-phone-alt"></i>&nbsp;CONTACT</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->


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
            <li><a href="tel:+212661311186"><i class="fa fa-phone"></i>&nbsp; : +212 (0) 6 61 31 11 86</a></li>
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
@endsection