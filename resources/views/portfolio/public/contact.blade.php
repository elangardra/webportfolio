@extends('portfolio.layouts.app')

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('portfolio.index') }}">Elang Ardra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio.about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio.projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('portfolio.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contact Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Get in Touch</h1>
            <p class="text-center text-muted mb-5">Feel free to reach out for collaborations or opportunities</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="contact-info text-center">
                        <div class="mb-4">
                            <i class="fas fa-phone fa-2x mb-3"></i>
                            <h4>Phone</h4>
                            <p>+6281223926414</p>
                        </div>
                        <div class="mb-4">
                            <i class="fas fa-envelope fa-2x mb-3"></i>
                            <h4>Email</h4>
                            <p>elangardra.a@gmail.com</p>
                        </div>
                        <div class="mb-4">
                            <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                            <h4>Location</h4>
                            <p>Menteng, Jakarta Pusat, 10320</p>
                        </div>
                        <div class="social-links mt-4">
                            <a href="https://linkedin.com/in/elang-ardra-angkawijaya" target="_blank" class="me-3">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                            <a href="https://medium.com/@elangardra12" target="_blank" class="me-3">
                                <i class="fab fa-medium fa-2x"></i>
                            </a>
                            <a href="https://github.com/elangardra" target="_blank">
                                <i class="fab fa-github fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .contact-info i {
        color: var(--primary-color);
    }

    .contact-info h4 {
        margin: 1rem 0;
        color: var(--secondary-color);
    }

    .social-links a {
        color: var(--primary-color);
        transition: color 0.3s ease;
    }

    .social-links a:hover {
        color: var(--secondary-color);
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush
@endsection 