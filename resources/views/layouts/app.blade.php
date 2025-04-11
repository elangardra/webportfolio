<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elang Ardra - Data Scientist & ML Engineer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2C3E50;
            --secondary-color: #3498DB;
            --accent-color: #E74C3C;
            --text-color: #2C3E50;
            --light-bg: #F8FAFC;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: var(--light-bg);
        }
        
        .navbar {
            padding: 1rem 0;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 4px rgba(0,0,0,.08);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-color);
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--secondary-color);
        }

        .social-links {
            display: flex;
            gap: 1.5rem;
        }

        .social-links a {
            color: var(--text-color);
            font-size: 1.2rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-links a:hover {
            color: var(--secondary-color);
            transform: translateY(-2px);
        }

        footer {
            background-color: white;
            padding: 2rem 0;
            margin-top: 4rem;
            box-shadow: 0 -2px 4px rgba(0,0,0,.08);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('portfolio.index') }}">
                <i class="fas fa-brain me-2"></i>Elang Ardra
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolio.about') }}">
                            <i class="fas fa-user me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolio.projects') }}">
                            <i class="fas fa-project-diagram me-1"></i>Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/elangardra" target="_blank">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://medium.com/@Elangardra12" target="_blank">
                            <i class="fab fa-medium me-1"></i>Blog
                        </a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.portfolio.index') }}">
                            <i class="fas fa-cog me-1"></i>Admin
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main style="padding-top: 76px;">
        @if(session('success'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="copyright">
                    <p class="mb-0">&copy; {{ date('Y') }} Elang Ardra Angkawijaya</p>
                </div>
                <div class="social-links">
                    <a href="https://github.com/elangardra" target="_blank" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/elang-ardra-angkawijaya" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://medium.com/@Elangardra12" target="_blank" title="Medium">
                        <i class="fab fa-medium"></i>
                    </a>
                    <a href="mailto:elangardra.a@gmail.com" title="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 