@extends('layouts.app')

@section('content')
<!-- Projects Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">My Projects</h1>
            <p class="text-center text-muted mb-5">Showcasing my work in data science, machine learning, and analytics</p>
        </div>
    </div>

    <div class="row g-4">
        @foreach($projects as $project)
        <div class="col-md-4">
            <div class="card h-100 portfolio-card">
                <div class="portfolio-image-container">
                    <img src="{{ $project['image'] }}" class="card-img-top portfolio-image" alt="{{ $project['title'] }}">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            @if($project['project_url'])
                                <a href="{{ $project['project_url'] }}" class="btn btn-light btn-sm" target="_blank">View Project</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $project['title'] }}</h5>
                    <p class="card-text text-muted small">{{ $project['description'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">{{ $project['category'] }}</span>
                        <small class="text-muted">{{ date('M Y', strtotime($project['project_date'])) }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@push('styles')
<style>
    .portfolio-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .portfolio-image-container {
        position: relative;
        overflow: hidden;
        height: 200px;
    }

    .portfolio-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .portfolio-card:hover .portfolio-image {
        transform: scale(1.05);
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .overlay-content {
        text-align: center;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .badge {
        padding: 0.5em 1em;
        font-weight: 500;
    }
</style>
@endpush
@endsection 