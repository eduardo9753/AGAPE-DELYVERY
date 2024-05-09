@extends('layouts.app')


@section('header')
    @include('template.menu')
@endsection


@section('main')
    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="{{ asset('assets/images/slider-01.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Ágape <br> chicken & grill</strong></h1>
                            <p class="m-b-40">¡Ven y descubre la excelencia en cada bocado! En nuestra pollería, te esperan
                                'Los Mejores Pollos a la Brasa de Todo Collique'. Déjate seducir por el sabor inigualable,
                                la jugosidad irresistible y el aroma tentador de nuestras deliciosas creaciones. ¡Una
                                experiencia gastronómica que te dejará deseando volver por más!</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('menu.index') }}">Nuestro menu</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-left">
                <img src="{{ asset('assets/images/slider-02.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Ágape <br> chicken & grill</strong></h1>
                            <p class="m-b-40">¡Hacer tu pedido es más fácil que nunca! Ahora puedes solicitar tus órdenes
                                directamente desde nuestra página web o a través de nuestro Whatsapp al +51 922394642. ¡Haz
                                tu pedido ahora y disfruta de la comodidad de recibir nuestros deliciosos platos en la
                                comodidad de tu hogar!</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('menu.index') }}">Nuestro menu</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-left">
                <img src="{{ asset('assets/images/slider-03.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Ágape <br> chicken & grill</strong></h1>
                            <p class="m-b-40">¡Crea momentos inolvidables en familia con nuestros increíbles combos!
                                Descubre los mejores sabores y variedades diseñados especialmente para compartir. Desde
                                nuestras exquisitas opciones, hasta nuestros platos más emblemáticos, encontrarás la
                                combinación perfecta para satisfacer a todos. ¡Haz que cada reunión sea especial con los
                                mejores combos para compartir en familia!</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white"
                                    href="{{ route('menu.index') }}">Nuestro menu</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Les Saluda! <span>Agape chicken & grill</span></h1>
                        <h4>nuestra historia</h4>
                        <p>Somos un emprendimiento con más de 9 años en el mercado, ofreciendo los mejores productos de
                            comida rápida.</p>
                        <p>Con los precios más competitivos y accesibles del mercado, además de contar con servicio de
                            entrega a domicilio para que puedas realizar tus pedidos desde la comodidad de tu hogar.</p>

                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservaciones</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('assets/images/about-img.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    @include('helpers.start')
    <!-- End QT -->

    <!-- Start Menu -->
    @include('helpers.menu', ['categoriesWithDishes' => $categoriesWithDishes])
    <!-- End Menu -->


    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Galeria</h2>
                        <p>Nuestra de pila de los mejores productos que tenemos</p>
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <a class="lightbox" href="{{ $item->photo }}">
                                <img class="img-fluid" src="{{ $item->photo }}" alt="Gallery Images">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Customer Reviews -->
    @include('helpers.reviews')
    <!-- End Customer Reviews -->

    <!-- Start Contact info -->
    @include('helpers.info')
    <!-- End Contact info -->
@endsection
