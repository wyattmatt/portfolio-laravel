@extends('layouts.app')

@section('title', 'Projects - Portfolio')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">My Projects</h1>
        <p class="text-xl text-blue-100">A showcase of my work and achievements</p>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($projects->isEmpty())
        <div class="text-center py-12">
            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">No projects yet</h3>
            <p class="text-gray-500">Project data will appear here once added.</p>
        </div>
        @else
        <!-- Featured Projects -->
        @php
        $featuredProjects = $projects->where('is_featured', true);
        $regularProjects = $projects->where('is_featured', false);
        @endphp

        @if($featuredProjects->isNotEmpty())
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                <svg class="w-8 h-8 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                Featured Projects
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($featuredProjects as $project)
                @include('partials.project-card', ['project' => $project, 'featured' => true])
                @endforeach
            </div>
        </div>
        @endif

        @if($regularProjects->isNotEmpty())
        <div>
            @if($featuredProjects->isNotEmpty())
            <h2 class="text-3xl font-bold text-gray-900 mb-8">All Projects</h2>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($regularProjects as $project)
                @include('partials.project-card', ['project' => $project, 'featured' => false])
                @endforeach
            </div>
        </div>
        @endif
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Have a Project in Mind?</h2>
        <p class="text-xl text-blue-100 mb-10">
            Let's collaborate and create something extraordinary together
        </p>
        <a href="/contact" class="inline-block bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">
            Let's Talk
        </a>
    </div>
</section>
@endsection