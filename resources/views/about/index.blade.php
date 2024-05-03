@extends('layouts.app')


@section('header')
    @include('template.menu')
@endsection


@section('main')
    <!-- Start header -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Acerca de nosotros</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->


    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="inner-column">
                        <h1>Les Saluda! <span>Agape chicken & grill</span></h1>
                        <h4>nuestra historia</h4>
                        <p>somos un emprendimiento con mas de 9 años en el mercado, brindando los mejores productos de
                            comida rapida</p>
                        <p>Con los mejores precios del mercado y accesible para todos, contamos con delivery para que puedes
                            ordenar desde
                            la comodidad de tu hogar
                        </p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservaciones</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="images/about-img.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-12">
                    <div class="inner-pt">
                        <p>En Agape Chicken & Grill, nos especializamos en la venta de deliciosos pollos a la brasa, además
                            de ofrecer una amplia variedad de platos de chifa y parrilla. </p>
                        <p>Nuestro compromiso es brindarte una experiencia culinaria excepcional, donde la calidad y el
                            sabor se fusionan para satisfacer los paladares más exigentes. ¡Ven y descubre el auténtico
                            sabor en cada bocado! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Menu -->
    @include('helpers.menu')
    <!-- End Menu -->


    <!-- Start Contact info -->
    @include('helpers.info')
    <!-- End Contact info -->
@endsection
