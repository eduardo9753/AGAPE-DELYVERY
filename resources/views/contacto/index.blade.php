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
                    <h1>Contacto</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->


    <!-- Start Contact -->
    <div class="map-full">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.860849323978!2d-77.05063392610822!3d-11.914770839454805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d0511c25208d%3A0x794f394e7059c0ca!2sAv.%20Universitaria%209307%2C%20Comas%2015316!5e0!3m2!1ses-419!2spe!4v1714686646789!5m2!1ses-419!2spe"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Contacto</h2>
                        <p>recomendaciones</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Tu nombre" required data-error="ingresa tu nombre">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Tu gmail" id="email" class="form-control"
                                        name="name" required data-error="ingresa tu gmail">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="custom-select d-block form-control" id="guest" required
                                        data-error="Please Select Person">
                                        <option disabled selected>Selecciona la puntuación*</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Tu mensaje campeón" rows="4"
                                        data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Enviar</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Contact info -->
    @include('helpers.info')
    <!-- End Contact info -->
@endsection
