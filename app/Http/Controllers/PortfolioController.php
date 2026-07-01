<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name'        => 'Cahya Darma W.',
            'role'        => 'Mobile Developer | Web Developer',
            'description' => 'Seorang mahasiswa yang suka membuat aplikasi mobile & website, mencoba hal baru, dan mencari tahu bagaimana sebuah sistem bisa bekerja.',
            'photo'       => 'assets/img/bloomsv3.jpeg',
        ];

        $about    = config('portfolio.about');
        $skills   = config('portfolio.skills');
        $projects = config('portfolio.projects');
        $contact  = config('portfolio.contact');

        return view('pages.home', compact('profile', 'about', 'skills', 'projects', 'contact'));
    }

//     public function about()
//     {
//         $about = config('portfolio.about');

//         return view('pages.about', compact('about'));
//     }

//     public function skills()
//     {
//         $skills = config('portfolio.skills');

//         return view('pages.skills', compact('skills'));
//     }

//     public function projects()
//     {
//         $projects = config('portfolio.projects');

//         return view('pages.projects', compact('projects'));
//     }

//     public function contact()
//     {
//         $contact = config('portfolio.contact');

//         return view('pages.contact', compact('contact'));
//     }
}