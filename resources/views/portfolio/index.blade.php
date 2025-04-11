@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero-section py-5 mb-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold mb-4">Welcome to My Portfolio</h1>
                <p class="lead mb-4">Showcasing my creative work and professional projects. Explore my journey through web development, design, and innovation.</p>
                <a href="{{ route('portfolio.create') }}" class="btn btn-light btn-lg">Add New Project</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://via.placeholder.com/500x400" alt="Hero Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Grid Section -->
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="text-center mb-4">My Projects</h2>
            <p class="text-center text-muted">Discover some of my best work and professional achievements</p>
        </div>
    </div>

    <div class="row g-4">
        @forelse($portfolios as $portfolio)
        <div class="col-md-4">
            <div class="card h-100 portfolio-card">
                <div class="portfolio-image-container">
                    @if($portfolio->image)
                        <img src="{{ asset('storage/' . $portfolio->image) }}" class="card-img-top portfolio-image" alt="{{ $portfolio->title }}">
                    @else
                        <img src="https://via.placeholder.com/350x200" class="card-img-top portfolio-image" alt="{{ $portfolio->title }}">
                    @endif
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            @if($portfolio->project_url)
                                <a href="{{ $portfolio->project_url }}" class="btn btn-light btn-sm" target="_blank">View Project</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $portfolio->title }}</h5>
                    <p class="card-text text-muted small">{{ Str::limit($portfolio->description, 100) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">{{ $portfolio->category }}</span>
                        <small class="text-muted">{{ $portfolio->project_date->format('M Y') }}</small>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        @if($portfolio->client)
                            <small class="text-muted">Client: {{ $portfolio->client }}</small>
                        @endif
                        <div class="btn-group">
                            <a href="{{ route('portfolio.edit', $portfolio) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('portfolio.destroy', $portfolio) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <div class="alert alert-info">
                No projects found. <a href="{{ route('portfolio.create') }}" class="alert-link">Add your first project!</a>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        position: relative;
        overflow: hidden;
    }

    .portfolio-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    .portfolio-image-container {
        position: relative;
        overflow: hidden;
    }

    .portfolio-image {
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-card:hover .portfolio-image {
        transform: scale(1.1);
    }

    .overlay-content {
        text-align: center;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .portfolio-card:hover .overlay-content {
        transform: translateY(0);
    }

    .badge {
        font-weight: 500;
        padding: 0.5em 1em;
    }

    .btn-group {
        gap: 0.5rem;
    }
</style>
@endpush 