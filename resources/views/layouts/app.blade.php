<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e40af',
                        accent: '#3b82f6',
                    }
                }
            }
        }
    </script>
    <style>
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-primary">YourCompany</a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="/" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('/') ? 'text-primary font-semibold' : '' }}">Home</a>
                        <a href="/about" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('about') ? 'text-primary font-semibold' : '' }}">About</a>
                        <a href="/blog" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('blog') ? 'text-primary font-semibold' : '' }}">Blog</a>
                        <a href="/contact" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('contact') ? 'text-primary font-semibold' : '' }}">Contact</a>

                        <!-- More Info Dropdown -->
                        <div class="relative group">
                            <button class="text-gray-700 hover:text-primary transition duration-300 flex items-center {{ Request::is('experience') || Request::is('skill') || Request::is('project') ? 'text-primary font-semibold' : '' }}">
                                More Info
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                <a href="/experience" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-150 {{ Request::is('experience') ? 'bg-primary text-white' : '' }}">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        Experience
                                    </div>
                                </a>
                                <a href="/skill" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-150 {{ Request::is('skill') ? 'bg-primary text-white' : '' }}">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                        Skills
                                    </div>
                                </a>
                                <a href="/project" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-150 {{ Request::is('project') ? 'bg-primary text-white' : '' }}">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                        Projects
                                    </div>
                                </a>
                            </div>
                        </div>

                        <a href="/admin" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition duration-300 {{ Request::is('admin') ? 'bg-secondary' : '' }}">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Admin
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-primary focus:outline-none focus:text-primary">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="/" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('/') ? 'bg-primary text-white' : '' }}">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('about') ? 'bg-primary text-white' : '' }}">About</a>
                <a href="/blog" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('blog') ? 'bg-primary text-white' : '' }}">Blog</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('contact') ? 'bg-primary text-white' : '' }}">Contact</a>

                <!-- Mobile More Info Dropdown -->
                <div>
                    <button id="mobile-more-info-button" class="w-full text-left px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition duration-300 flex items-center justify-between">
                        <span>More Info</span>
                        <svg id="mobile-chevron" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-more-info-menu" class="hidden pl-6 space-y-1">
                        <a href="/experience" class="block px-3 py-2 rounded-md text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('experience') ? 'bg-primary text-white' : '' }}">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Experience
                            </div>
                        </a>
                        <a href="/skill" class="block px-3 py-2 rounded-md text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('skill') ? 'bg-primary text-white' : '' }}">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                                Skills
                            </div>
                        </a>
                        <a href="/project" class="block px-3 py-2 rounded-md text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('project') ? 'bg-primary text-white' : '' }}">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                Projects
                            </div>
                        </a>
                    </div>
                </div>

                <a href="/admin" class="block px-3 py-2 rounded-md bg-primary text-white hover:bg-secondary transition duration-300 {{ Request::is('admin') ? 'bg-secondary' : '' }}">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Admin Dashboard
                    </span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">YourCompany</h3>
                    <p class="text-gray-400">Building innovative solutions for tomorrow's challenges.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="/blog" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Web Development</li>
                        <li>Mobile Apps</li>
                        <li>Cloud Solutions</li>
                        <li>Consulting</li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: info@yourcompany.com</li>
                        <li>Phone: +1 (555) 123-4567</li>
                        <li>Address: 123 Business St, City</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} YourCompany. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Mobile More Info Dropdown
        const mobileMoreInfoButton = document.getElementById('mobile-more-info-button');
        const mobileMoreInfoMenu = document.getElementById('mobile-more-info-menu');
        const mobileChevron = document.getElementById('mobile-chevron');

        if (mobileMoreInfoButton) {
            mobileMoreInfoButton.addEventListener('click', () => {
                mobileMoreInfoMenu.classList.toggle('hidden');
                mobileChevron.classList.toggle('rotate-180');
            });
        }
    </script>

    @stack('scripts')
</body>

</html>