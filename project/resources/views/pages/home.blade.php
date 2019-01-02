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
                <img class="header-img" src="{{ asset('/img/logo.svg') }}" alt="" style="width: 48%;" >
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
            <div class="row">
                <div class="col-sm my-auto">
                    <div class="circle1">
                        <img src="{{ asset('img/kader1.svg') }}" alt="">                       
                    </div>
                </div>
                <div class="col-sm my-auto">
                    <div class="circle2">
                        <img src="{{ asset('img/telefoon1.svg') }}" alt=""> 
                    </div>
                </div>  
                <div class="col-sm my-auto">
                    <div class="circle3">
                        <img src="{{ asset('img/contact1.svg') }}" alt=""> 
                    </div>
                </div>
            </div>
        </div>  
    </section> 
    <section class="section2">        
        <div class="container-fluid">            
                <div class="row">
                    <h1>Portretten van al onze bellers.</h1>
                    <div class="col">                        
                        <div class="bommas">
                            <img src="{{ asset('img/bommas.svg') }}" alt="">                       
                        </div>                                            
                    </div>
                    <div class="col col-lg-2">
                        <div class="special-link">
                            <a href="#"><h2>Alle portretten bekijken =></h2></a>  
                        </div>
                    </div>                  
                </div>               
        </div>
    </section> 
    <section class="section3">
        <div class="container"> 
            <h1 class="text-center">5 minuten van uw tijd voor een glimlach</h1>
            <div class="row">
                <div class="col-sm my-auto">
                    <div class="circle2">
                        <img src="{{ asset('img/telefoon1.svg') }}" alt=""> 
                    </div>
                </div>
                <div class="col-sm my-auto">
                    <h3>
                        Bellen met een persoon die zich eenzaam voelt kan
                        een kleine gebaar lijken, maar met 5 minuten van uw
                        tijd kan u een glimlach toveren op het gezicht van 
                        een oudere die zich eenzaam voelt.
                        Ik wil nu bellen
                        <br>
                        <a href="#">Ik wil nu bellen =></a>
                    </h3>    
                </div>
            </div>           
        </div>
    </section> 
    <section class="section4">
        <div class="container">
            <h1>Je kan ons steeds contacteren via </h1>
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">04 99 84 69 34</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="e-mailadress">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Hello@cava.com</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="message" placeholder="bericht..." rows="4"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </section> 
</main>


@endsection
