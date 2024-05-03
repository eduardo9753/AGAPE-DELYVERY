@extends('layouts.app')


@section('header')
    @include('template.menu')
@endsection


@section('main')
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Nuestro Menu</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Menu -->
    @include('helpers.menu')
    <!-- End Menu -->

    <!-- Start QT -->
    @include('helpers.start')
    <!-- End QT -->

    <!-- Start Customer Reviews -->
    @include('helpers.reviews')
    <!-- End Customer Reviews -->

    <!-- Start Contact info -->
    @include('helpers.info')
    <!-- End Contact info -->
@endsection
