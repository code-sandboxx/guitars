@extends('master')
@section('title', 'Page Home')
@section('content') 
<header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenue dans notre magasin de guitares électriques!</div>
                <div class="masthead-heading text-uppercase">Rock Riffs Guitares Électriques</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">En savoir plus</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Offerts par notre magasin</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Réparation</h4>
                        <p class="text-muted">Nous proposons des services de réparation pour vos guitares électriques, l'accordage et le changement de cordes.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-music fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cours de musique</h4>
                        <p class="text-muted">Cours de guitare pour tous les niveaux, des débutants aux avancés.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-cart-arrow-down fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Location</h4>
                        <p class="text-muted">Nous proposons la location d'équipement de musique.</p>
                    </div>
                </div>
            </div>
        </section>       
@endsection                    