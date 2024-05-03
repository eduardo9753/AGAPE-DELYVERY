<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img style="width: 55px;height: 55px;" src="{{ asset('img/logo.png') }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('home.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('menu.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('menu.index') }}">Menu</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about.index') }}">Nosotros</a>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                            data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="reservation.html">Reservation</a>
                            <a class="dropdown-item" href="stuff.html">Stuff</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                            data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">blog</a>
                            <a class="dropdown-item" href="blog-details.html">blog Single</a>
                        </div>
                    </li> --}}
                    <li class="nav-item {{ request()->routeIs('contact.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('contact.index') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
