<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/experience', function () {
    $experiences = \App\Models\Experience::orderBy('order', 'desc')
        ->orderBy('start_date', 'desc')
        ->get();
    return view('experience', compact('experiences'));
});

Route::get('/skill', function () {
    $skills = \App\Models\Skill::orderBy('category')
        ->orderBy('proficiency_level', 'desc')
        ->get()
        ->groupBy('category');
    return view('skill', compact('skills'));
});

Route::get('/project', function () {
    $projects = \App\Models\Project::orderBy('is_featured', 'desc')
        ->orderBy('order', 'desc')
        ->orderBy('start_date', 'desc')
        ->get();
    return view('project', compact('projects'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin.index');
});
