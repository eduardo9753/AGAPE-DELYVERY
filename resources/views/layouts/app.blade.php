<!DOCTYPE html>
<html lang="en"><!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Ágape Chicken & Grill</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @yield('header')

    @yield('main')

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>Acerca</h3>
                    <p>Agape chicken & grill, venta de pollos a la brasa, chifas y parrilas</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Subscribe</h3>
                    <div class="subscribe_form">
                        <form class="subscribe_form">
                            <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
                                type="email">
                            <button type="submit" class="submit">SUBSCRIBETE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Contactanos</h3>
                    <p class="lead"> parque sinchi roc, Av. Universitaria 9311, Comas 15316</p>
                    <p class="lead"><a href="#">+51 946 015 906</a></p>
                    <p><a href="#"> enproceso@gmail.com</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Horarios</h3>
                    <p><span class="text-color">Martes: </span>Cerrado</p>
                    <p><span class="text-color">Lun-Mier :</span> 9:Am - 11PM</p>
                    <p><span class="text-color">Jue-Vier :</span> 9:Am - 11PM</p>
                    <p><span class="text-color">Sab-domin :</span> 9:Am - 11PM</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2024 <a href="#">Agape chicken &
                                grill</a>
                            <a href=""></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o"
            aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('assets/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
