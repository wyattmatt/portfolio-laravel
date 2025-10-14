@extends('layouts.app')

@section('title', 'Blog - YourCompany')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Blog</h1>
        <p class="text-xl text-blue-100">Insights, news, and updates from our team</p>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Featured Post -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="bg-gradient-to-br from-primary to-secondary h-64 md:h-auto flex items-center justify-center">
                    <div class="text-white text-center p-8">
                        <svg class="w-24 h-24 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <p class="text-lg">Featured Article</p>
                    </div>
                </div>
                <div class="p-8">
                    <span class="inline-block bg-primary text-white text-xs px-3 py-1 rounded-full mb-4">Featured</span>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">The Future of Web Development in 2025</h2>
                    <p class="text-gray-600 mb-4">
                        Explore the latest trends and technologies shaping the web development landscape. From AI integration to progressive web apps, discover what's next in our industry.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-6">
                        <span>By John Smith</span>
                        <span class="mx-2">•</span>
                        <span>October 10, 2025</span>
                        <span class="mx-2">•</span>
                        <span>5 min read</span>
                    </div>
                    <a href="#" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">
                        Read More
                    </a>
                </div>
            </div>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-blue-400 to-blue-600 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <span class="inline-block bg-blue-100 text-primary text-xs px-3 py-1 rounded-full mb-3">Development</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Building Scalable Applications with Laravel</h3>
                    <p class="text-gray-600 mb-4">Learn best practices for building scalable and maintainable Laravel applications that grow with your business.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>Sarah Johnson</span>
                        <span class="mx-2">•</span>
                        <span>Oct 8, 2025</span>
                    </div>
                    <a href="#" class="text-primary font-semibold hover:text-secondary transition duration-300">Read More →</a>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-purple-400 to-purple-600 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <span class="inline-block bg-purple-100 text-purple-600 text-xs px-3 py-1 rounded-full mb-3">Design</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">UI/UX Design Trends for 2025</h3>
                    <p class="text-gray-600 mb-4">Discover the latest design trends that are reshaping how users interact with digital products.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>Michael Davis</span>
                        <span class="mx-2">•</span>
                        <span>Oct 5, 2025</span>
                    </div>
                    <a href="#" class="text-primary font-semibold hover:text-secondary transition duration-300">Read More →</a>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-green-400 to-green-600 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <span class="inline-block bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full mb-3">Cloud</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Migration: A Complete Guide</h3>
                    <p class="text-gray-600 mb-4">Everything you need to know about migrating your infrastructure to the cloud safely and efficiently.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>John Smith</span>
                        <span class="mx-2">•</span>
                        <span>Oct 3, 2025</span>
                    </div>
                    <a href="#" class="text-primary font-semibold hover:text-secondary transition duration-300">Read More →</a>
                </div>
            </article>

            <!-- Blog Post 4 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-red-400 to-red-600 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <span class="inline-block bg-red-100 text-red-600 text-xs px-3 py-1 rounded-full mb-3">Security</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Security Best Practices</h3>
                    <p class="text-gray-600 mb-4">Protect your web applications from common security threats with these essential best practices.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>Sarah Johnson</span>
                        <span class="mx-2">•</span>
                        <span>Oct 1, 2025</span>
                    </div>
                    <a href="#" class="text-primary font-semibold hover:text-secondary transition duration-300">Read More →</a>
                </div>
            </article>

            <!-- Blog Post 5 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-600 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <span class="inline-block bg-yellow-100 text-yellow-600 text-xs px-3 py-1 rounded-full mb-3">Mobile</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">React Native vs Flutter in 2025</h3>
                    <p class="text-gray-600 mb-4">Compare the two leading cross-platform mobile development frameworks and choose the right one.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>Michael Davis</span>
                        <span class="mx-2">•</span>
                        <span>Sep 28, 2025</span>
                    </div>
                    <a href="#" class="text-primary font-semibold hover:text-secondary transition duration-300">Read More →</a>
                </div>
            </article>

            <!-- Blog Post 6 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-indigo-400 to-indigo-600 h-48 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <span class="inline-block bg-indigo-100 text-indigo-600 text-xs px-3 py-1 rounded-full mb-3">Analytics</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Data-Driven Decision Making</h3>
                    <p class="text-gray-600 mb-4">Learn how to leverage analytics and data to make better business decisions and drive growth.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <span>John Smith</span>
                        <span class="mx-2">•</span>
                        <span>Sep 25, 2025</span>
                    </div>
                    <a href="#" class="text-primary font-semibold hover:text-secondary transition duration-300">Read More →</a>
                </div>
            </article>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-50 transition duration-300">
                    Previous
                </button>
                <button class="px-4 py-2 bg-primary text-white rounded-lg font-semibold">1</button>
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition duration-300">2</button>
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition duration-300">3</button>
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition duration-300">
                    Next
                </button>
            </nav>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Subscribe to Our Newsletter</h2>
        <p class="text-gray-600 text-lg mb-8">Get the latest articles and insights delivered to your inbox</p>
        <form class="flex flex-col sm:flex-row gap-4 max-w-2xl mx-auto">
            <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            <button type="submit" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">
                Subscribe
            </button>
        </form>
    </div>
</section>
@endsection