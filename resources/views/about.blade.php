@extends('layouts.app')

@section('title', 'About Us - YourCompany')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
        <p class="text-xl text-blue-100">Discover our story and what drives us forward</p>
    </div>
</section>

<!-- Company Overview -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Who We Are</h2>
                <p class="text-gray-600 text-lg mb-4">
                    Founded in 2010, YourCompany has been at the forefront of digital innovation, helping businesses transform their ideas into reality. We are a team of passionate professionals dedicated to delivering exceptional solutions that drive growth and success.
                </p>
                <p class="text-gray-600 text-lg mb-4">
                    With over 15 years of combined experience, we've worked with startups, SMEs, and enterprise clients across various industries, delivering projects that exceed expectations and create lasting impact.
                </p>
                <p class="text-gray-600 text-lg">
                    Our approach combines technical expertise with creative thinking, ensuring that every solution we deliver is not only functional but also innovative and future-ready.
                </p>
            </div>
            <div class="bg-gradient-to-br from-primary to-secondary rounded-lg p-8 text-white">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Our Vision</h3>
                        <p class="text-blue-100">To be the leading technology partner that empowers businesses to achieve their digital transformation goals.</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Our Values</h3>
                        <ul class="space-y-2 text-blue-100">
                            <li>✓ Innovation & Creativity</li>
                            <li>✓ Quality & Excellence</li>
                            <li>✓ Integrity & Transparency</li>
                            <li>✓ Client Success</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-8 md:p-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mission</h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                To deliver innovative, reliable, and scalable technology solutions that empower businesses to thrive in the digital age. We are committed to building long-term partnerships with our clients, understanding their unique challenges, and creating tailored solutions that drive measurable results.
            </p>
        </div>
    </div>
</section>

<!-- What We Do -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What We Do</h2>
            <p class="text-gray-600 text-lg">Comprehensive solutions for your business needs</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-primary text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                <p class="text-gray-600">Custom websites and web applications built with modern technologies and best practices.</p>
            </div>

            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-primary text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Apps</h3>
                <p class="text-gray-600">Native and cross-platform mobile applications for iOS and Android devices.</p>
            </div>

            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-primary text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Solutions</h3>
                <p class="text-gray-600">Scalable cloud infrastructure and migration services for modern businesses.</p>
            </div>

            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-primary text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">UI/UX Design</h3>
                <p class="text-gray-600">Beautiful, intuitive designs that enhance user experience and engagement.</p>
            </div>

            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-primary text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Digital Marketing</h3>
                <p class="text-gray-600">Strategic digital marketing campaigns to grow your online presence.</p>
            </div>

            <div class="p-6 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300">
                <div class="bg-primary text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Consulting</h3>
                <p class="text-gray-600">Expert technology consulting to help you make informed strategic decisions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
            <p class="text-gray-600 text-lg">The talented people behind our success</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-primary to-secondary h-48 flex items-center justify-center">
                    <div class="text-white text-6xl font-bold">JS</div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">John Smith</h3>
                    <p class="text-primary font-semibold mb-3">CEO & Founder</p>
                    <p class="text-gray-600">Visionary leader with 20+ years of experience in technology and business.</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-primary to-secondary h-48 flex items-center justify-center">
                    <div class="text-white text-6xl font-bold">SJ</div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                    <p class="text-primary font-semibold mb-3">CTO</p>
                    <p class="text-gray-600">Technical expert specializing in scalable architectures and cloud solutions.</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-primary to-secondary h-48 flex items-center justify-center">
                    <div class="text-white text-6xl font-bold">MD</div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Michael Davis</h3>
                    <p class="text-primary font-semibold mb-3">Head of Design</p>
                    <p class="text-gray-600">Creative designer passionate about creating beautiful user experiences.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Want to Work With Us?</h2>
        <p class="text-xl text-blue-100 mb-10">
            Let's discuss how we can help your business succeed
        </p>
        <a href="/contact" class="inline-block bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">
            Get in Touch
        </a>
    </div>
</section>
@endsection