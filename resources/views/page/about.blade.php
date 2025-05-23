@extends('layouts.app')

@section('title', 'Guides') {{-- Optional: if you use dynamic <title> in head --}}

@push('styles')
<!-- Page-specific styles (if any) -->
@endpush

@section('hero')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Guides</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Guides</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
            <h1 class="mb-5">Meet Our Guide</h1>
        </div>
        <div class="row g-4">
            @for($i = 1; $i <= 8; $i++)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + (($i-1)*0.2) }}s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/team-' . (($i-1) % 4 + 1) . '.jpg') }}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
<!-- Team End -->
@endsection

@push('scripts')
<!-- Page-specific scripts (if any) -->
@endpush
