@extends('template')
@section('title')
    Contact | Sit International
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('sit/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contacter Nous</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success my-5">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    @include('includes.form')
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Adresse:</span> Place de l' UDEAC, Zone Portuaire A, B.P: 4448</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Téléphone:</span> <a href="tel://1234567920">+ (237) 233 43 78 13</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">contact@sitinternational.ch</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p><span>Site Web</span> <a href="/">sitinternational.ch</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
