@extends('layouts.layout')
@section('title')
Conditions
@endsection

@section('nav')
<li class="nav-item">
    <a class="nav-link" href="/"><i class="fa fa-home"></i> Accueil
    </a>
</li>

<li class="nav-item"><a class="nav-link" href="/nos-voitures"><i class="fa fa-car-alt"></i> Voitures & Prix</a>
</li>

<li class="nav-item active"><a class="nav-link" href="/conditions"><i class="fa fa-file-alt"></i> Conditions</a>
</li>

<li class="nav-item"><a class="nav-link" href="/contact"><i class="fa fa-phone-alt"></i> Contact</a>
</li>
@endsection

@section('content')

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(/assets/images/terms2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4><i class="fa fa-file-alt"></i>&nbsp;Termes & Conditions</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-justify">
                <div class="section-heading">
                    <h2 class="text-danger">Quels sont les termes & Conditions de location de voiture a Adeunis Car ?</h2>
                </div>

                <h5>La franchise d’assurance en cas de sinistre:</h5>
                <br>
                <p>
                    - Toutes nos voitures sont couvertes d’une assurance tout risque avec 10% de franchise.
                    <br>
                    - En cas de sinistre et que votre responsabilité est engagée totalement ou partiellement, vous ne supporterez que 10% de la valeur des dommages causés en plus des jours d’immobilisation de la voiture pour la réparation.
                </p>

                <br>
                <br>

                <h5>Conditions relatives au locataire:</h5>
                <br>
                <p>
                    - Présentation du permis de conduire original d'au moins 2 ans d'ancienneté.
                    <br>
                    - Présentation d'une pièce d'identité originale en cours de validité (Carte nationale pour les résidents marocains et passeport dans le cas des EMR et des non-marocains
                    <br>
                    - Être âgé d'au moins 22 ans.
                </p>

                <br>
                <br>

                <h5>Le contrat de location et les responsabilités du premier chauffeur:</h5>
                <br>
                <p>
                    - Le contrat de location désigne le premier conducteur de la voiture & qui est seul responsable de toute détérioration ou dégradation de l'état de la voiture suite à une mauvaise manipulation ou utilisation sur une route non goudronnée.
                    <br>
                    - La vérification de l'état de la voiture et de ses accessoires est indispensable avant de signer le contrat. Aucun litige client antérieur n'est accepté.

                </p>

                <br>
                <br>

                <h5>La franchise d'assurance en cas de sinistre:</h5>
                <br>

                <p>
                    - Toutes nos voitures sont couvertes par une assurance tous risques avec une franchise de 10%.
                    <br>
                    - En cas de sinistre et dont vous êtes entièrement ou partiellement responsable, vous ne supporterez que 10% de la valeur du dommage causé en plus des jours d'immobilisation du véhicule pour réparation.
                    <br>
                    - En cas de sinistre et votre responsabilité n'est pas engagée, notre contrat d'assurance prévoit votre remorquage vers l'une de nos agences les plus proches où nous livrons une autre voiture de location de même catégorie.
                    <br>
                    - La responsabilité du chauffeur est désignée par le représentant des autorités (agent de la circulation en ville et gendarmerie royale en zone rurale).
                    <br>
                    - Tout dommage suite à une réclamation non justifiée par un rapport d'accident à l'amiable ou un rapport des autorités locales est à la charge du locataire (Le premier conducteur sur le contrat de location), qui reste le seul et unique responsable de la voiture même en stationnement .
                    <br>
                    - La réparation de tout dommage ou détérioration de la voiture suite à une conduite en état d'ébriété est à 100% de la responsabilité du 1er conducteur, en plus des jours d'immobilisation de la voiture pour réparation.
                </p>

            </div>
        </div>
    </div>
</div>
@endsection