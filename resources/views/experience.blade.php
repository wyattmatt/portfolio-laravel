@extends('layouts.app')

@section('title', 'Experience - Portfolio')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">My Experience</h1>
        <p class="text-xl text-blue-100">Professional journey and career highlights</p>
    </div>
</section>

<!-- Experience Timeline -->
<section class="py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($experiences->isEmpty())
        <div class="text-center py-12">
            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">No experiences yet</h3>
            <p class="text-gray-500">Experience data will appear here once added.</p>
        </div>
        @else
        <div class="space-y-8">
            @foreach($experiences as $experience)
            <div class="bg-white rounded-lg shadow-md p-6 md:p-8 hover:shadow-xl transition duration-300 border-l-4 border-primary">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $experience->title }}</h3>
                        <div class="flex items-center text-primary font-semibold mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            {{ $experience->company }}
                        </div>
                        @if($experience->location)
                        <div class="flex items-center text-gray-600 text-sm mb-2">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            {{ $experience->location }}
                        </div>
                        @endif
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-medium">
                                {{ $experience->start_date->format('M Y') }} -
                                @if($experience->is_current)
                                <span class="text-primary font-semibold">Present</span>
                                @else
                                {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-gray-700 leading-relaxed">
                    {{ $experience->description }}
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Interested in Working Together?</h2>
        <p class="text-xl text-blue-100 mb-10">
            Let's discuss how my experience can benefit your project
        </p>
        <a href="/contact" class="inline-block bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">
            Get in Touch
        </a>
    </div>
</section>
@endsection