@extends('layouts.app')

@section('title', 'Home - YourCompany')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-primary to-secondary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
                Welcome to YourCompany
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100">
                Innovative Solutions for Modern Businesses
            </p>
            <p class="text-lg mb-10 max-w-2xl mx-auto text-blue-50">
                We help businesses grow through cutting-edge technology, creative design, and strategic thinking.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">
                    Get Started
                </a>
                <a href="/about" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    <!-- Wave SVG -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z" fill="#F9FAFB" />
        </svg>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
            <p class="text-gray-600 text-lg">We deliver excellence in everything we do</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Fast & Efficient</h3>
                <p class="text-gray-600">We deliver high-quality solutions quickly without compromising on excellence.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Secure & Reliable</h3>
                <p class="text-gray-600">Your data and projects are protected with enterprise-grade security measures.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Team</h3>
                <p class="text-gray-600">Our experienced professionals bring years of expertise to every project.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl md:text-5xl font-bold mb-2">500+</div>
                <div class="text-blue-100">Projects Completed</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold mb-2">250+</div>
                <div class="text-blue-100">Happy Clients</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                <div class="text-blue-100">Team Members</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold mb-2">15+</div>
                <div class="text-blue-100">Years Experience</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Ready to Start Your Project?
        </h2>
        <p class="text-xl text-gray-600 mb-10">
            Let's work together to bring your ideas to life
        </p>
        <a href="/contact" class="inline-block bg-primary text-white px-10 py-4 rounded-lg font-semibold hover:bg-secondary transition duration-300 shadow-lg">
            Contact Us Today
        </a>
    </div>
</section>
@endsection