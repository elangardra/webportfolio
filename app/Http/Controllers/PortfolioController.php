<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Sample projects data
        $projects = [
            [
                'title' => 'Credit Risk Scoring Model',
                'description' => 'Developed a machine learning model to predict loan default risk using Python and Scikit-learn.',
                'category' => 'Machine Learning',
                'project_date' => '2024-06',
                'image' => 'https://via.placeholder.com/350x200',
                'project_url' => '#'
            ],
            [
                'title' => 'Market Analysis Dashboard',
                'description' => 'Created an interactive Power BI dashboard for market segment analysis and customer behavior insights.',
                'category' => 'Data Visualization',
                'project_date' => '2024-04',
                'image' => 'https://via.placeholder.com/350x200',
                'project_url' => '#'
            ],
            [
                'title' => 'ETL Process Development',
                'description' => 'Designed and implemented an ETL pipeline to integrate external data with internal systems.',
                'category' => 'Data Engineering',
                'project_date' => '2024-03',
                'image' => 'https://via.placeholder.com/350x200',
                'project_url' => '#'
            ]
        ];

        return view('portfolio.public.index', compact('projects'));
    }

    public function about()
    {
        return view('portfolio.public.about');
    }

    public function projects()
    {
        // Sample projects data
        $projects = [
            [
                'title' => 'Credit Risk Scoring Model',
                'description' => 'Developed a machine learning model to predict loan default risk using Python and Scikit-learn.',
                'category' => 'Machine Learning',
                'project_date' => '2024-06',
                'image' => 'https://via.placeholder.com/350x200',
                'project_url' => '#'
            ],
            [
                'title' => 'Market Analysis Dashboard',
                'description' => 'Created an interactive Power BI dashboard for market segment analysis and customer behavior insights.',
                'category' => 'Data Visualization',
                'project_date' => '2024-04',
                'image' => 'https://via.placeholder.com/350x200',
                'project_url' => '#'
            ],
            [
                'title' => 'ETL Process Development',
                'description' => 'Designed and implemented an ETL pipeline to integrate external data with internal systems.',
                'category' => 'Data Engineering',
                'project_date' => '2024-03',
                'image' => 'https://via.placeholder.com/350x200',
                'project_url' => '#'
            ]
        ];

        return view('portfolio.public.projects', compact('projects'));
    }

    public function contact()
    {
        return view('portfolio.public.contact');
    }
}
