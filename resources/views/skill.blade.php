@extends('layouts.app')

@section('title', 'Skills - Portfolio')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">My Skills</h1>
        <p class="text-xl text-blue-100">Technologies and tools I work with</p>
    </div>
</section>

<!-- Skills Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($skills->isEmpty())
        <div class="text-center py-12">
            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">No skills yet</h3>
            <p class="text-gray-500">Skills data will appear here once added.</p>
        </div>
        @else
        <div class="space-y-12">
            @foreach($skills as $category => $categorySkills)
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <span class="bg-primary text-white px-4 py-2 rounded-lg">{{ $category }}</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($categorySkills as $skill)
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-900">{{ $skill->name }}</h3>
                            <span class="text-primary font-bold text-lg">{{ $skill->proficiency_level }}%</span>
                        </div>

                        <!-- Progress Bar -->
                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="bg-gradient-to-r from-primary to-secondary h-3 rounded-full transition-all duration-500"
                                style="width: {{ $skill->proficiency_level }}%"></div>
                        </div>

                        <!-- Proficiency Label -->
                        <div class="mt-3 text-sm text-gray-600 text-right">
                            @if($skill->proficiency_level >= 90)
                            <span class="text-green-600 font-semibold">Expert</span>
                            @elseif($skill->proficiency_level >= 75)
                            <span class="text-blue-600 font-semibold">Advanced</span>
                            @elseif($skill->proficiency_level >= 60)
                            <span class="text-yellow-600 font-semibold">Intermediate</span>
                            @else
                            <span class="text-gray-600 font-semibold">Beginner</span>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Skill Overview</h2>
            <p class="text-gray-600 text-lg">A summary of my technical expertise</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-primary text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-bold">{{ $skills->flatten()->count() }}</span>
                </div>
                <p class="text-gray-700 font-semibold">Total Skills</p>
            </div>
            <div class="text-center">
                <div class="bg-primary text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-bold">{{ $skills->count() }}</span>
                </div>
                <p class="text-gray-700 font-semibold">Categories</p>
            </div>
            <div class="text-center">
                <div class="bg-primary text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-bold">{{ $skills->flatten()->where('proficiency_level', '>=', 90)->count() }}</span>
                </div>
                <p class="text-gray-700 font-semibold">Expert Level</p>
            </div>
            <div class="text-center">
                <div class="bg-primary text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-bold">{{ round($skills->flatten()->avg('proficiency_level')) }}%</span>
                </div>
                <p class="text-gray-700 font-semibold">Avg Proficiency</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Let's Build Something Amazing</h2>
        <p class="text-xl text-blue-100 mb-10">
            Ready to leverage these skills for your next project?
        </p>
        <a href="/contact" class="inline-block bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">
            Start a Conversation
        </a>
    </div>
</section>
@endsection