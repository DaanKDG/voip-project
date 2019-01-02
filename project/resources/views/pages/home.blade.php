@extends('layouts.app')

@section('content')

<header>        
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-color: #7f82a0;  background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
            <div class="col-md-12 mb-4 white-text text-center">
                <img class="header-img" src="{{ asset('/img/placeholderimage.png') }}" alt="">
                <h1 class="h1-reponsive white-text font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                data-wow-delay="0.3s"><strong>Creating unexpected friendships since 2018</strong></h1>                
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
</header>
<main>
    <section class="section1 mt-4">
        <div class="container">
            <h1 class="mt-5">Section1</h1>
            <div class="row">
                <div class="col-sm my-auto">
                    <div class="circle1">
                        <h4>circle1</h4>
                    </div>
                </div>
                <div class="col-sm my-auto">
                    <div class="circle2">
                        <h4>circle2</h4>
                    </div>
                </div>  
                <div class="col-sm my-auto">
                    <div class="circle3">
                        <h4>circle3</h4>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
    <section class="section2">
        <div class="container">            
            <h1 class="padded-title">Section2</h1>
            <h1>Portretten van al onze bellers</h1>
            <a href="#">Alle portretten bekijken =></a>
        </div>
    </section> 
    <section class="section3">
        <div class="container">            
            <h1 class="padded-title">Section3</h1>
            <h1>5 minuten van uw tijd voor een glimlach</h1>
            <p>
                Bellen met een persoon die zich eenzaam voelt kan
                een kleine gebaar lijken, maar met 5 minuten van uw
                tijd kan u een glimlach toveren op het gezicht van 
                een oudere die zich eenzaam voelt.
                Ik wil nu bellen
            </p>
            <a href="#">Ik wil nu bellen</a>
        </div>
    </section> 
    <section class="section4">
        <div class="container">            
            <h1 class="padded-title">Section4</h1>
            <h1>Je kan ons steeds contacteren via </h1>
        </div>
    </section> 
</main>


@endsection
