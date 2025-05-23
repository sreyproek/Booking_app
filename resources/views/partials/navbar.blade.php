
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link @if(request()->is('/')) active @endif">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link @if(request()->is('about')) active @endif">About</a>
            <a href="{{ url('/services') }}" class="nav-item nav-link @if(request()->is('services')) active @endif">Services</a>
            <a href="{{ url('/packages') }}" class="nav-item nav-link @if(request()->is('packages')) active @endif">Packages</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ url('/destination') }}" class="dropdown-item">Destination</a>
                    <a href="{{ url('/booking') }}" class="dropdown-item">Booking</a>
                    <a href="{{ url('/team') }}" class="dropdown-item">Travel Guides</a>
                    <a href="{{ url('/testimonials') }}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link @if(request()->is('contact')) active @endif">Contact</a>
        </div>
        <a href="{{ route('register') }}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
    </div>
</nav>