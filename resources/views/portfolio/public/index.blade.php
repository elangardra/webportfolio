@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero-section py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="display-4 fw-bold mb-3">Elang Ardra Angkawijaya</h1>
                <h2 class="h4 text-gradient mb-4">Data-Driven Problem Solver</h2>
                <p class="lead mb-4">Statistics graduate with a passion for leveraging data to drive business impact. Currently applying data science and analytics expertise to optimize sales strategies at Pupuk Indonesia. Experienced in transforming complex data into actionable insights that help organizations make better decisions.</p>
                <div class="d-flex gap-3">
                    <a href="mailto:elangardra.a@gmail.com" class="btn btn-primary">
                        <i class="fas fa-envelope me-2"></i>Contact Me
                    </a>
                    <a href="https://linkedin.com/in/elang-ardra-angkawijaya" target="_blank" class="btn btn-outline-primary">
                        <i class="fab fa-linkedin me-2"></i>LinkedIn
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="tech-stack-visual">
                    <div class="tech-icons">
                        <i class="fab fa-python"></i>
                        <i class="fas fa-database"></i>
                        <i class="fab fa-aws"></i>
                        <i class="fab fa-github"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Skills Section -->
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Technical Expertise</h2>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-3">
            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Machine Learning</h3>
                <p>TensorFlow, Keras, PyTorch, Scikit-learn</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Programming</h3>
                <p>Python (Pandas, NumPy), SQL, ETL Processes</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-file-excel"></i>
                </div>
                <h3>Data Analysis</h3>
                <p>Excel, Power BI, Data Visualization</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3>Cloud & Tools</h3>
                <p>AWS, Git, Jupyter Notebook</p>
            </div>
        </div>
    </div>
</div>

<!-- Work Experience Section -->
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Work Experience</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">Jan 2025 - Present</div>
                    <div class="timeline-content">
                        <h3>MAGENTA BUMN Internship</h3>
                        <h4>PT Pupuk Indonesia (Persero) - PSO Sales and Billing Strategy</h4>
                        <ul>
                            <li>Designed and implemented ETL process to extract external data and integrate with internal systems</li>
                            <li>Conducted data reconciliation and comparative analysis across multiple sources</li>
                            <li>Enhanced data processing efficiency by streamlining event report generation</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Mar 2024 - Apr 2024</div>
                    <div class="timeline-content">
                        <h3>Project-Based Internship</h3>
                        <h4>Bank Muamalat Indonesia - Product & Business Development</h4>
                        <ul>
                            <li>Analyzed market segments by generation to optimize marketing strategies</li>
                            <li>Enhanced Muamalat Deposito Terencana based on customer preferences</li>
                            <li>Utilized Excel for data cleaning and visualization</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Mei 2024 - Jun 2024</div>
                    <div class="timeline-content">
                        <h3>Project-Based Internship</h3>
                        <h4>Home Credit Indonesia - Data Scientist</h4>
                        <ul>
                            <li>Developed credit risk scoring model using machine learning algorithms</li>
                            <li>Performed exploratory data analysis on large customer dataset</li>
                            <li>Utilized Python libraries (Pandas, NumPy, Scikit-learn) and SQL</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Jan 2022 - Feb 2022</div>
                    <div class="timeline-content">
                        <h3>Internship</h3>
                        <h4>PT Patra Logistics - Procurement</h4>
                        <ul>
                            <li>Prepared appointment letters</li>
                            <li>Generated RFQ on time and within budget</li>
                            <li>Analyzed data to create accurate annual reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Education Section -->
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Education</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">Sep 2020 - May 2023</div>
                    <div class="timeline-content">
                        <h3>Bachelor of Statistics</h3>
                        <h4>Universitas Islam Indonesia</h4>
                        <ul>
                            <li>Faculty of Mathematics and Natural Sciences</li>
                            <li>GPA: 3.28/4.00</li>
                            <li>Specialized in Data Science, focusing on machine learning algorithms and statistical modeling</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Training Section -->
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Training & Certifications</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">Oct 2024 - Present</div>
                    <div class="timeline-content">
                        <h3>SAP Business One</h3>
                        <h4>Binus Center</h4>
                        <ul>
                            <li>Comprehensive understanding of SAP Business One modules</li>
                            <li>Customization of SAP B1 workflows and master data management</li>
                            <li>Financial and operational reporting skills</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Apr 2024 - Mei 2024</div>
                    <div class="timeline-content">
                        <h3>Power BI Data Analyst</h3>
                        <h4>Digital Talent Scholarship - Fresh Graduate Academy</h4>
                        <ul>
                            <li>Data preparation, modeling, and visualization using Power BI</li>
                            <li>ETL processes implementation in Power Query</li>
                            <li>Microsoft Azure data services understanding</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Feb 2024 - Mar 2024</div>
                    <div class="timeline-content">
                        <h3>AWS Cloud Architecting</h3>
                        <h4>Digital Talent Scholarship - Fresh Graduate Academy</h4>
                        <ul>
                            <li>AWS services and architecture principles</li>
                            <li>Secure and cost-effective cloud solutions deployment</li>
                            <li>Application performance optimization and security measures</li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">Feb 2023 - Jul 2023</div>
                    <div class="timeline-content">
                        <h3>Machine Learning</h3>
                        <h4>Bangkit Academy 2023 by Google, GoTo, Traveloka</h4>
                        <ul>
                            <li>Completed Coursera courses in Python, TensorFlow, and machine learning</li>
                            <li>Computer vision project for fish classification and price detection</li>
                            <li>Team collaboration and communication skills development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    :root {
        --primary-color: #2C3E50;
        --secondary-color: #3498DB;
        --accent-color: #E74C3C;
        --gradient-start: #2C3E50;
        --gradient-end: #3498DB;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--primary-color);
    }

    .hero-section {
        background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .text-gradient {
        background: linear-gradient(45deg, #E74C3C, #3498DB);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 600;
    }

    .tech-stack-visual {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
    }

    .tech-icons {
        font-size: 3rem;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }

    .skill-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .skill-card:hover {
        transform: translateY(-5px);
    }

    .skill-icon {
        font-size: 2.5rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
    }

    .portfolio-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
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
        background: rgba(44, 62, 80, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .badge {
        font-weight: 500;
        padding: 0.5em 1em;
        background: var(--secondary-color);
    }

    .btn-primary {
        background: var(--secondary-color);
        border-color: var(--secondary-color);
    }

    .btn-primary:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }

    .btn-outline-primary {
        color: var(--secondary-color);
        border-color: var(--secondary-color);
    }

    .btn-outline-primary:hover {
        background: var(--secondary-color);
        border-color: var(--secondary-color);
    }

    .timeline {
        position: relative;
        padding: 20px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: var(--secondary-color);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 30px;
        width: 100%;
    }

    .timeline-date {
        position: absolute;
        left: 0;
        width: 50%;
        padding-right: 30px;
        text-align: right;
        font-weight: bold;
        color: var(--secondary-color);
    }

    .timeline-content {
        position: relative;
        left: 50%;
        width: 50%;
        padding-left: 30px;
    }

    .timeline-content h3 {
        margin-bottom: 5px;
        color: var(--primary-color);
    }

    .timeline-content h4 {
        margin-bottom: 15px;
        color: var(--secondary-color);
    }

    .timeline-content ul {
        padding-left: 20px;
        margin-bottom: 0;
    }

    .timeline-content li {
        margin-bottom: 5px;
    }

    @media (max-width: 768px) {
        .timeline::before {
            left: 30px;
        }

        .timeline-date {
            width: 100%;
            text-align: left;
            padding-right: 0;
            padding-left: 30px;
        }

        .timeline-content {
            left: 0;
            width: 100%;
            padding-left: 30px;
        }
    }
</style>
@endpush 